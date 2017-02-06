<?php 



if(!isset($argv[1])){
    echo("No file provided exiting....");
    return;
}
$filename = $argv[1];
$file = file_get_contents($filename);
$json = json_decode($file, true);


foreach($json['message']['items'] as $j){
    $link_obj = $j['URL'];
    echo($link_obj . "\r\n");
}

?>
