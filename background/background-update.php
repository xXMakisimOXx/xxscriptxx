<?php
$file = '2.png';
$new_name = '321312.png';
if (rename($file, $new_name)) {
    echo "Файл переименован!";
}else{
    echo "Ошибка!";
}
?>
