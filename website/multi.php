<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin: 20px auto;
            max-width: 1000px;
        }
        .table {
            border: 1px solid black;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 20px;
            display: inline-block;
        }
        .row {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">MULTIPLICATION TABLE</h1>
        <div class="table">
            <?php
            for ($i = 1; $i <= 12; $i++) { // Corrected loop condition
                echo "<div class='row'>2 x " . $i . " = " . (2 * $i) . "</div>";
            }
            ?>
        </div>
        <div class="table">
            <?php
            for ($i = 1; $i <= 12; $i++) { // Corrected loop condition
                echo "<div class='row'>3 x " . $i . " = " . (3 * $i) . "</div>"; 
            }
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class='row'>4 x " . $i . "=" . (4 *  $i) . "</div>";

            }
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class=\"row\">5 x " . $i . "=" . (5*$i) . "</div>";
            } 
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class=\"row\">5 x " . $i . "=" . (5*$i) . "</div>";
            } 
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class=\"row\">5 x " . $i . "=" . (5*$i) . "</div>";
            } 
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class=\"row\">5 x " . $i . "=" . (5*$i) . "</div>";
            } 
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class=\"row\">5 x " . $i . "=" . (5*$i) . "</div>";
            } 
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class=\"row\">5 x " . $i . "=" . (5*$i) . "</div>";
            } 
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class=\"row\">5 x " . $i . "=" . (5*$i) . "</div>";
            } 
            ?>
        </div>
        <div class="table">
            <?php
            for($i=1;$i<=12;$i++) {
                echo "<div class=\"row\">5 x " . $i . "=" . (5*$i) . "</div>";
            } 
            ?>
        </div>
    </div>
</body>
</html>
