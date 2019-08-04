<?php


namespace App\Examples\TableGateway;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * Шлюз таблицы статей.
 * Предоставляет интерфейс к таблице статей.
 */
class ArticleGateway {
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    /**
     * Получить все записи.
     *
     * @return Article[]
     */
    public function findAll(): array {
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult(Article::class, 'a');
        $rsm->addFieldResult('a', Article::ATTR_ID, Article::ATTR_ID);
        $rsm->addFieldResult('a', Article::ATTR_TITLE, Article::ATTR_TITLE);
        $rsm->addFieldResult('a', Article::ATTR_CONTENT, Article::ATTR_CONTENT);

        return $this
            ->entityManager
            ->createNativeQuery("SELECT * FROM article a", $rsm)
            ->getResult()
        ;
    }

    /**
     * Вставка записи.
     *
     * @param Article $article
     */
    public function insert(Article $article) {
        // ...
    }

    /**
     * Изменение записи.
     *
     * @param Article $article
     */
    public function update(Article $article) {
        // ...
    }

    /**
     * Удаление записи.
     *
     * @param Article $article
     */
    public function delete(Article $article) {
        // ...
    }
}