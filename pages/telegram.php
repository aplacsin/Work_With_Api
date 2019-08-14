<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telegram API</title>    
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
                        <h1>Telegram API</h1>
                    </div>
                    <form action="" class="wellcome_form" id="telegramform" method="post" name="telegramform">
                        <p class="form-message"></p>
                        <p class="submit"><input class="button btn-hi" name="bot_hi" type="submit" value="Приветствие">
                        </p>
                    </form>
                    <form action="" class="clock_form" id="telegramform" method="post" name="telegramform">
                        <p class="submit"><input class="button btn-clock" name="bot_clock" type="submit"
                                value="Текущее время"></p>
                    </form>
                    <form action="https://t.me/workapis_bot" method="post">
                        <p class="submit"><a href=""><input class="button btn-addbot" name="bot" type="submit"
                                    value="Добавить бота"></a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../public/js/OtherComponents/jquery-3.4.1.min.js"></script>
    <script src="../public/js/OtherComponents/bootstrap.bundle.min.js"></script>
    <script src="../public/js/telegram.js"></script>
</body>

</html>