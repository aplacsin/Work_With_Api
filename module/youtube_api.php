<?php 

$url = '';
$videoId = '';
$apikey = '';
$messageError = '';

if(isset($_POST['video_url'])) {   
    $url = $_POST['video_url']; 

if(stripos($url,'youtu')===false){
    
    $messageError = "- Неверный URL. Укажите адрес YouTube";
    
    } else {        
            $value = preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);    
            $url = '<iframe align="middle" width="640" height="360" src="https://www.youtube.com/embed/'.$match[1].' "frameborder="0" allowfullscreen></iframe>';
            $videoId = $match[1];
        }
    }



    $apikey = 'AIzaSyBZ5ZTEjkw1WsocxZs6wZs4-Mn_S5n0mG8';
    $googleApiUrl = 'https://www.googleapis.com/youtube/v3/videos?id=' . $videoId . '&key=' . $apikey . '&part=snippet';
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    
    curl_close($ch);
    
    $data = json_decode($response);
    
    $value = json_decode(json_encode($data), true);
    
    @$title = $value['items'][0]['snippet']['title'];
    @$description = $value['items'][0]['snippet']['description'];
?>