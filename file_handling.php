<?php
echo "File handling";
echo "<br>";

$file_path = './text.txt';
if(file_exists($file_path)) {
    $file_handle = fopen($file_path , 'r'); // r : read , w : write , a : append , x : create , r+ : read and write
//    echo readfile($file_path); // read file
    $file_content = fread($file_handle , filesize($file_path)); // read file
    echo $file_content;
    fclose($file_handle); // close file

}else{
    echo "File not found";
    $file_handle = fopen($file_path , 'w'); // create file
    $file_content = 'Hello world'.PHP_EOL . 'Hello world 2'.PHP_EOL;
    fwrite($file_handle , $file_content); // write file
    fclose($file_handle); // close file
}