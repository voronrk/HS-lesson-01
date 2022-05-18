<?php
/**
 * Отладочная функция; выводит на экран данные, переданные ей в качестве параметров.
 */
function debug($data) {
    echo "<pre>";
    echo var_dump($data);
    echo "</pre>";
};

?>