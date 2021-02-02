<?php

namespace App\Entity;

use Doctrine\ORM\EntityRepository;

class UsuarioRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM App:Usuario u ORDER BY u.nombre ASC'
            )
            ->getResult();
    }
}