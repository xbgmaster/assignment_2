<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Python Calculator</title>
</head>
<body>
    <h1>Python Calculator</h1>
    <form action="calculate.php" method="post">
        <label for="inputA">Enter A: </label>
        <input type="number" id="inputA" name="a" required/>
        <br><br>
        <label for="inputB">Enter B: </label>
        <input type="number" id="inputB" name="b" required/>
        <br><br>
        <label for="inputC">Enter C: </label>
        <input type="number" id="inputC" name="c" required/>
        <br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>