<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even Number Checker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="body-content">
        <div id="header">
            <h1>Odd or Even Number Checker</h1>
        </div>
        <form id="myform" method="POST" action="">
            <input type="number" name="number" placeholder="Enter a number">
            <button type="submit" id="submit-btn">Submit</button>
        </form>
    </section>

    <?php

    $number = $_POST["number"];
    
        if($number % 2 == 0) {
            echo "<h2> $number is an even number!</h2>";
        } else {
            echo "<h2> $number is an odd number!</h2>";
        }
    
    ?>

    <script>
        document.getElementById("myForm").submit();
    </script>
    
</body>
</html>