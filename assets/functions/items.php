<?php

include('connect.php');

function allItems($dbh)
{
    $sth = $dbh->prepare('SELECT * FROM items');
    $sth->execute();
    echo json_encode($sth->fetchAll());
}

// по айдишнику крафтящегося предмета выдается изображения предметов
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

// функция вставки юзера в бд
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

    default:
        echo 'oopseeee';
        break;
}
