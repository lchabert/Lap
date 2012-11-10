<?php

namespace Lap\AsteriskBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of CdrRepository
 *
 * @author lolostates
 */
class CdrRepository extends EntityRepository{

    
public function findCdrByCallerId($callerid) {
        return $this->createQueryBuilder('c')
                        ->where('c.dst = :callerid')
                        ->orWhere('c.src = :callerid')
                        ->setParameter('callerid', $callerid)
                        ->addOrderBy('c.calldate', 'ASC')
                        ->andWhere('c.calldate BETWEEN :debut AND :fin')
                        ->setParameter('debut', new \Datetime(date("Y-m-d")))
                        ->setParameter('fin', new \Datetime(date("Y-m-d", strtotime("+1 week"))))
                        ->getQuery()
                        ->getResult();
    }
}

?>
