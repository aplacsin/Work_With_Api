<?php

include('../vendor/autoload.php');
include('TelegramBot.php');

/* get a message */
$telegramApi = new TelegramBot();


$updates = $telegramApi->getUpdates();


$telegramApi->sendMessage($updates[count($updates) - 1]->message->chat->id, date("H:i:s"));

if ($telegramApi) {  
  echo '<p class="text-success">Сообщение отправлено!</p>';
    return true;
} else {
  echo '<p class="text-danger"><b>Ошибка. Сообщение не отправлено!</b></p>';
} 


?>