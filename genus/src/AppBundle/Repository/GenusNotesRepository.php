<?php
namespace AppBundle\Repository;

use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;
class GenusNotesRepository extends EntityRepository
{
     /**
     * @return Genus[]
     */
    public function findAllRecentNotesForGenus(Genus $genus)
    {
        return $this->createQueryBuilder('genus_note')
        ->andWhere('genus_note.genus = :genus')
        ->setParameter('genus', $genus)
        ->andWhere('genus_note.createdAt > :recentDate')
        ->setParameter('recentDate', new \DateTime('-3 months'))
        ->orderBy('genus_note.createdAt', 'DESC')
        ->getQuery()
        ->execute();
    }
}