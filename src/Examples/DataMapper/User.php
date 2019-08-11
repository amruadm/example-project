<?php


namespace App\Examples\DataMapper;

/**
 * Класс пользователя (доменный слой)
 */
class User {
    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var string[] */
    public $emails;
}