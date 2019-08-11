<?php


namespace App\Examples\DataMapper;

use Doctrine\ORM\EntityManagerInterface;

class UserMapper
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function findById(int $id) : ?User
    {
        $sql = "SELECT u.*, STRING_AGG(e.email, ',') as emails
                FROM users u
                LEFT JOIN emails e ON e.user_id = u.id
                WHERE u.id = :id";

        $result = [];

        // Шлём запрос и получаем данные.

        return ($result ? $this->mapResultToUser($result) : null);
    }

    protected function mapResultToUser(array $data): User {
        $user         = new User;
        $user->id     = $data['id'];
        $user->name   = $data['name'];
        $user->emails = explode(',', $data['emails']);

        return $user;
    }
}