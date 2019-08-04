<?php


namespace App\Examples\RowGateway;

/**
 * Виртуальный шлюз записи данных.
 *
 * При использовании нескольких шлюзов записи данных на один источник данных могут возникнуть конфликты, которые довольно сложно разрешать.
 */
class SimpleArticleGateway {
    public $id;
    public $title;

    /**
     * @param int $id
     */
    public static function findById(int $id) {

    }
}