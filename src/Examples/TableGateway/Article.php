<?php


namespace App\Examples\TableGateway;

/**
 * Запись в таблице article.
 * Не содержит доменной логики, отражает только структуру таблицы в БД.
 */
class Article {
    public $id;
    const ATTR_ID = 'id';

    public $title;
    const ATTR_TITLE = 'title';

    public $content;
    const ATTR_CONTENT = 'content';
}