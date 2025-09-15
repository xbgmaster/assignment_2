<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = escapeshellarg($_POST['a']);
    $b = escapeshellarg($_POST['b']);
    $c = escapeshellarg($_POST['c']);

    $command = "python3 /var/www/html/assignment_2/calculate.py $a $b $c";
    $output = [];
    exec($command, $output);

    $result     = $output[0];
    $c_val      = $output[1];
    $c_cubed    = $output[2];
    $sqrt       = $output[3];
    $division   = $output[4];
    $multiplied = $output[5];
    $b_val      = $output[6];
    $a_val      = $output[7];
    $timestamp  = $output[8];

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Calculation Result</title>
        <style>
             body {
            background-color: #f8e9dc;
            font-family: Arial, sans-serif;
            text-align: center; /* centra el contenido inline */
        }

        .container {
            display: inline-block; /* permite centrar el bloque */
            text-align: left; /* mantiene alineado el texto interno */
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .steps {
            background-color: #f1f1f1;
            border-left: 5px solid green;
            padding: 10px;
            margin-top: 15px;
        }

        h2 {
            color: green;
        }

        strong {
            color: red;
        }

        .result {
            font-weight: bold;
            font-size: 1.2em;
        }

        .timestamp {
            margin-top: 20px;
            font-style: italic;
        }
        </style>
    </head>
    <body>
        <div class='separator'>====================================</div>
        <div >
            <h2>Assignment #2</h2>
            <p class='name'>Mora</p>
            <p class='result'>Final Result: {$result}</p>
            <div class='steps'>
                <p>Step 1: c = {$c_val} , c³ = {$c_cubed}</p>
                <p>Step 2: √(c³) = {$sqrt}</p>
                <p>Step 3: {$sqrt} / {$a_val} = {$division}</p>
                <p>Step 4: {$division} * 10 = {$multiplied}</p>
                <p>Step 5: {$multiplied} + {$b_val} = {$result}</p>
            </div>
            <p class='timestamp'>Calculation completed at {$timestamp}</p>
        </div>
        <div class='separator'>====================================</div>
    </body>
    </html>";
}
?>
