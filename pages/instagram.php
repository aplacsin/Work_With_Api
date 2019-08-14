<?php 

require_once "../module/instagram_api.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram API</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-form">
                    <div class="wrapper-menu-text">
                        <a href="../index.php" class="main-page">Главная страница</a>
                    </div>
                    <div class="title-text">
                        <h1>Instagram API</h1>
                    </div>
                    <form action="" id="photoform" method="post" name="photoform">
                        <p><input class="input" id="hashtag_text" name="hashtag_text" size="20" type="text" required="required"
                                placeholder="Введите хэштег" value=""></p>
                        <p class="submit"><input class="button" name="search" type="submit" value="Получить фото"></p>
                    </form>
                </div>
                <div class="wrapper">
                    <div class="wrapper-img"><?php echo $output; ?> </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>