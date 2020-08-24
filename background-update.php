// переименование файла
$file = 'background/2.png';
$new_name = '321312.png';
if (rename($file, $new_name)) {
    echo "Файл успешно переименован!";
}else{
    echo "Файл не удалось переименовать!";
}
