<?php

include('connect.php');

// функция вывода всех предметов
function allItems($dbh)
{
    $sth = $dbh->prepare('SELECT * FROM items');
    $sth->execute();
    echo json_encode($sth->fetchAll());
}

// по айдишнику крафтящегося предмета выдается изображения всех предметов
function defeniteItem($dbh, $id)
{
    $sth = $dbh->prepare('
        SELECT * FROM items 
        WHERE id = ?
    ');
    $sth->execute([$id]);
    $item = $sth->fetch(PDO::FETCH_ASSOC);

    if (!$item) {
        echo json_encode(['error' => 'Item not found']);
        return;
    }

    echo json_encode($item);
}

// функция вставки предмета в бд
function insertItem($dbh, $name, $file)
{
    // проверка разрешения картинки
    $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
    if (!in_array($file['type'], $allowedTypes)) {
        echo json_encode(['error' => 'Только изображения (jpg, png, webp)']);
        return;
    }

    $basepath = "../img/";
    $filename = $file['name'];
    $temppath = $file['tmp_name'];
    $filePath = $basepath . $filename;
    move_uploaded_file($temppath, $filePath);

    try {
        $sth = $dbh->prepare('INSERT INTO `items`
        (`id`, `name`, `image`)
        VALUES (NULL, ?, ?)');
        $sth->execute([$name, $filename]);
        echo json_encode(['yay!']);
    } catch (Throwable $th) {
        return json_encode(['error' => 'Ошибка БД']);
    }
}

// функция обновления предмета в бд
function updateItem($dbh, $id, $name, $file)
{

    // проверка на наличие $file
    // как выяснила гптшка, если ничего не загрузить инпут файла, то $_FILES все равно не пустое
    // а возвращает ошибку какую-то, так что вот такая проверка
    if(isset($file) && $file['error'] === UPLOAD_ERR_OK){
        // проверка разрешения картинки
        $allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
        if (!in_array($file['type'], $allowedTypes)) {
            echo json_encode(['error' => 'Только изображения (jpg, png, webp)']);
            return;
        }

        $basepath = "../img/";
        $filename = $file['name'];
        $temppath = $file['tmp_name'];
        $filePath = $basepath . $filename;
        move_uploaded_file($temppath, $filePath);
    }
    else {
        $sth = $dbh->prepare('SELECT image FROM items WHERE id = ?');
        $sth->execute([$id]);
        $filename = $sth->fetch(PDO::FETCH_ASSOC)['image'];
    }
    
    try {
        $sth = $dbh->prepare('UPDATE `items` SET `name` = ?, `image` = ? WHERE `items`.`id` = ?');
        $sth->execute([$name, $filename, $id]);

        echo json_encode(['yay!']);
    } catch (Throwable $th) {
        return json_encode(['error' => 'Ошибка БД']);
    }
}

// удаление инфы
function deleteItem($dbh, $id)
{
    $sth = $dbh->prepare('
    DELETE FROM `items`
    WHERE `items`.`id` = ?');
    $sth->execute([$id]);

    echo json_encode('yay!');
}

switch ($function) {
    case 'allItems':
        allItems($dbh);
        break;

    case 'defeniteItem':
        defeniteItem($dbh, (int)$data['id_item']);
        break;

    case 'insertItem':
        insertItem($dbh, $data['name'], $_FILES['image_url']);
        break;

    case 'deleteItem':
        deleteItem($dbh, $data['id_item']);
        break;

    case 'updateItem':
        updateItem($dbh, $data['id_item'], $data['name'], $_FILES['image_url'] ?? null);
        break;

    default:
        echo 'oopseeee';
        break;
}
