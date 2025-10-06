<?php

include("assets/functions/connect.php");
include("assets/functions/crafts/select.php");
include("assets/functions/items/select.php");


?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minecampf</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <?php include("assets/includes/header.php") ?>
    <main>
        <table class="list">
            <thead>
                <tr>
                    <th colspan="3" class="search">
                        <img src="assets/img/search.webp" alt="search">
                        <input type="search">
                    </th>
                    <th colspan="2" class="filter">
                        <img src="assets/img/Recipe Button.png" alt="filter">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="cell"></td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                </tr>
                <tr>
                    <td class="cell"></td>
                    <td class="cell"></td>
                    <td class="cell"></td>
                </tr>
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
                <th class="cell"></th>
                <th class="cell"></th>
                <th class="cell"></th>
            </tr>
            <tr>
                <th class="cell"></th>
                <th class="cell"></th>
                <th class="cell"></th>
            </tr>
            <tr>
                <th class="cell"></th>
                <th class="cell"></th>
                <th class="cell"></th>
            </tr>
            <!-- <div class="cell">

            </div>
            <div class="cell">

            </div>
            <div class="cell">

            </div>
            <div class="cell">

            </div>
            <div class="cell">

            </div>
            <div class="cell">

            </div>
            <div class="cell">

            </div>
            <div class="cell">

            </div>
            <div class="cell">

            </div> -->
        </table>

        <img src="assets/img/arrow.png" id="arrow">

        <div class="result">

        </div>
    </main>

    <?php include("assets/includes/footer.php") ?>
</body>

</html>