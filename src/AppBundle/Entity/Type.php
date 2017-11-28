<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/

class Type{
  use IdTrait;
  private $name;

public function setName($name)
{
   $this->name = $name;
   return $this;
}

public function getName()
{
   return $this->name;
}

}
