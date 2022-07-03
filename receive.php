<?php
session_start();

if(isset($_POST['json_mes'])){

    $json = json_decode($_POST['json_mes'], true);

    $file = fopen("~/home/pi/Desktop/testfile.txt", "w") or die("Unable to open file");
    fwrite($file, $json['receiverNum'] . PHP_EOL . $json['nickname'] . ' says:' . PHP_EOL . $json['message']);

    
    shell_exec('ipconfig');
    
}

?>
