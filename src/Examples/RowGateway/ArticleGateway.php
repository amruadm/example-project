<?php


namespace App\Examples\RowGateway;

/**
 * Запись в таблице article.
 * Не содержит доменной логики, отражает только структуру таблицы в БД.
 *
 * Методы доступа к данным являются статическими, но так же можно и вынести их в отдельные поведенческие классы.
 */
class ArticleGateway {
    public $id;
    const ATTR_ID = 'id';

    public $title;
    const ATTR_TITLE = 'title';

    public $content;
    const ATTR_CONTENT = 'content';

    /**
     *
     *
     * @param int $id
     *
     * @return ArticleGateway
     */
    public static function findOne(int $id): self {
        // ...
    }

    /**
     * @return array
     */
    public static function findAll(): array {
        // ...
    }

    public function insert() {
        // ...
    }

    public function update() {
        // ...
    }
}