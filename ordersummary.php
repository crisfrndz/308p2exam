<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$cinema = $_POST['cinema'];
$noticket = $_POST['noticket'];
$addons = $_POST['addons'];
$age = $_POST['age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px;
    }

    .content {
        background-color: #fff;
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    h2 {
        font-size: 18px;
        margin: 10px 0;
    }
</style>
</head>
<body>
    <header><h1>Order Summary</h1></header>
    <div class="content">
        <h2>Name: <?php echo $name?></h2>
        <h2>Gender: <?php echo $gender?> </h2>
        <h2>Addrress: <?php echo $address?></h2>
        <h2>Cinema: <?php echo $cinema?></h2>
        <h2>Number of tickets: <?php echo $noticket?></h2>
        <h2>Add-ons: <?php echo $addons?></h2>
        <iframe width="100%" height=""
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe> 
    </div>
</body>
</html>