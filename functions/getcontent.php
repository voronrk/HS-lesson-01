<?php

class GetContent {
    /**
     * Этот класс получает весь набор данных из внешнего источника. 
     * В настоящее время в качестве источника используется json-файл, 
     * но при замене метода getFullData может использоваться любой другой
     */

    public static function getFullData() {
        return json_decode(file_get_contents('./data/content.json'));
    }
}
?>