<?php

namespace App\Repository;

use App\Entity\Formuls;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Formuls|null find($id, $lockMode = null, $lockVersion = null)
 * @method Formuls|null findOneBy(array $criteria, array $orderBy = null)
 * @method Formuls[]    findAll()
 * @method Formuls[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormulsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Formuls::class);
    }

    // /**
    //  * @return Formuls[] Returns an array of Formuls objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Formuls
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
