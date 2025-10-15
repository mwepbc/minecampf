<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
    <title>minecampf</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <?php include("assets/includes/header.php") ?>
    <main>
        <table class="list">
            <colgroup>
                <col style="width: 20%">
                <col style="width: 20%">
                <col style="width: 20%">
                <col style="width: 20%">
                <col style="width: 20%">
            </colgroup>
            <thead>
                <tr>
                    <th colspan="4">
                        <div class="search">
                            <img src="assets/img/search.webp" alt="search">
                            <input type="search">
                        </div>
                    </th>
                    <th colspan="1" class="filter">
                        <img src="assets/img/Recipe Button.png" alt="filter">
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td>
                        <div class="cell">
                            <img src="assets/img/planks.png" alt="item">
                        </div>
                    </td>

                    <td>
                        <div class="cell">
                            <img src="assets/img/planks.png" alt="item">
                        </div>
                    </td>

                    <td>
                        <div class="cell">
                            <img src="assets/img/planks.png" alt="item">
                        </div>
                    </td>

                    <td>
                        <div class="cell">
                            <img src="assets/img/planks.png" alt="item">
                        </div>
                    </td>

                    <td>
                        <div class="cell">
                            <img src="assets/img/planks.png" alt="item">
                        </div>
                    </td>
                </tr> -->
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2"></th>
                    <th>
                        <h4>0/0</h4>
                    </th>
                    <th colspan="2">
                        <img src="assets/img/arrow.png" alt="next">
                    </th>
                </tr>
            </tfoot>
        </table>

        <table class="craftingTable">
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <!-- <tr>
                <td>
                    <div class="cell">
                    </div>
                </td>
                <td>
                    <div class="cell">
                    </div>
                </td>
                <td>
                    <div class="cell">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cell">
                    </div>
                </td>
                <td>
                    <div class="cell">
                    </div>
                </td>
                <td>
                    <div class="cell">
                    </div>
                </td>
            </tr> -->
        </table>

        <img src="assets/img/arrow.png" id="arrow">

        <div class="result">

        </div>
    </main>

    <?php include("assets/includes/footer.php") ?>
</body>
<script>
    let list = document.querySelector('.list tbody');

    async function post(request) {
        try {
            const response = await fetch(request);
            const result = await response.json();
            list.innerHTML = '';

            // создается массив строк, которые будут у нас tr
            let rows = [];
            for (let i = 0; i < result.length; i += 5) {
                // делим их по 5 предметов
                rows.push(result.slice(i, i + 5));
            }

            rows.forEach(row => {
                // создаем элемент tr
                let tr = document.createElement('tr');

                // цикл идет по каждой ячейке данных
                for (let col = 0; col < 5; col++) {
                    let td = document.createElement('td');

                    if (row[col]) {
                        td.innerHTML = `
                        <div class="cell" id_item="${row[col].id}">
                            <img src="assets/img/${row[col].image}" alt=${row[col].name} id_item="${row[col].id}">
                        </div>
                        `;
                    }

                    td.addEventListener('click', (event) => {
                        const requestDif = new Request("assets/functions/crafts.php", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                            },
                            body: JSON.stringify({
                                id_item: event.target.getAttribute('id_item'),
                                function: 'defeniteCraft'
                            })
                        });

                        postDif(requestDif);
                    });

                    tr.appendChild(td);
                }

                // добавляем tr в tbody
                list.appendChild(tr);
            });



        } catch (error) {
            console.error("Error:", error);

        }
    }

    const request1 = new Request("assets/functions/crafts.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            function: "allCrafts"
        }),
    });

    post(request1);

    const craftingCells = document.querySelectorAll('.craftingTable td');
    const resultCell = document.querySelector('.result');

    //post для отправки selectDif и отображения крафта
    async function postDif(request) {
        try {
            const response = await fetch(request);
            const result = await response.json();
            console.log("Success:", result);

            craftingCells[0].innerHTML = `<img src = "assets/img/${result.slot1}" alt="" >`
            craftingCells[1].innerHTML = `<img src = "assets/img/${result.slot2}" alt="" >`
            craftingCells[2].innerHTML = `<img src = "assets/img/${result.slot3}" alt="" >`
            craftingCells[3].innerHTML = `<img src = "assets/img/${result.slot4}" alt="" >`
            craftingCells[4].innerHTML = `<img src = "assets/img/${result.slot5}" alt="" >`
            craftingCells[5].innerHTML = `<img src = "assets/img/${result.slot6}" alt="" >`
            craftingCells[6].innerHTML = `<img src = "assets/img/${result.slot7}" alt="" >`
            craftingCells[7].innerHTML = `<img src = "assets/img/${result.slot8}" alt="" >`
            craftingCells[8].innerHTML = `<img src = "assets/img/${result.slot9}" alt="" >`

            resultCell.innerHTML = `<img src="assets/img/${result.result}" alt="">`;

            if (result.quantity != null) {
                resultCell.innerHTML += `<p>${result.quantity}</p>`;
            }
        } catch (error) {
            console.error("Error:", error);
        }
    }
</script>

</html>