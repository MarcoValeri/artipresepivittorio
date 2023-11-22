<?php

namespace App\Repository;

use App\Entity\Statua;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Statua>
 *
 * @method Statua|null find($id, $lockMode = null, $lockVersion = null)
 * @method Statua|null findOneBy(array $criteria, array $orderBy = null)
 * @method Statua[]    findAll()
 * @method Statua[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatuaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Statua::class);
    }

//    /**
//     * @return Statua[] Returns an array of Statua objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Statua
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
