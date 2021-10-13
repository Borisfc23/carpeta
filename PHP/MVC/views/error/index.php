<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>

<body>
    <?php require 'views/header.php' ?>
    <div class="error">
        <img src="https://www.prestashop.com/forums/uploads/monthly_2020_09/image.png.20e48d90410760e45e1b250527d56741.png"
            alt="">
    </div>
    <?php echo $this->mensaje; ?>
    <?php require 'views/footer.php' ?>
</body>

</html>