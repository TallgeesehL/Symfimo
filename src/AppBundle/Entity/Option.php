<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/

class Option{
  use IdTrait;
  private $name;
  private $uri;



public function setName($name)
{
   $this->name = $name;
   return $this;
}

public function getName()
{
   return $this->name;
}

public function setUri($uri)
{
   $this->uri = $uri;
   return $this;
}

public function getUri()
{
   return $this->uri;
}

}
