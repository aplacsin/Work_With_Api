<?php

require_once "../module/youtube_api.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Youtube API</title>
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
                        <h1>YouTube API</h1>
                    </div>
                    <form action="" id="videoform" method="post" name="videoform">
                        <p><input class="input" id="video_url" name="video_url" size="20" type="url" required="required"
                                placeholder="Ссылка на видео" value=""></p>
                        <p class="submit"><input class="button" name="search" type="submit" value="Добавить видео"></p>
                    </form>
                </div>
                <div class="window_video">
                    <?php echo $url ?>
                    <?php echo $messageError ?>
                </div>
                <div class="thumbnail-wrapper">
                    <div class="titleDiv">
                        <h2><?php echo $title; ?></h2>
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>