<?php
/**
 * Created by PhpStorm.
 * User: alink
 * Date: 06.09.2024
 * Time: 0:01
 */
namespace App\Repository;

use App\Document\User;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class UserRepository extends ServiceDocumentRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    // Добавьте необходимые методы для взаимодействия с пользователями
}