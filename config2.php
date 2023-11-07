<?php
    extract($_REQUEST);
    $file=fopen("form-save2.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"phone :");
    fwrite($file, $phone ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"message :");
    fwrite($file, $message ."\n");
    fclose($file);
    header("location: main.php");
 ?>
