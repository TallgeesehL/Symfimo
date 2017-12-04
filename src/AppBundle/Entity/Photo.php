<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/

class Photo{
  use IdTrait;

  /**
  * @ORM\ManyToOne(targetEntity="Estate")
  */
  private $estate;

  /**
  * @ORM\Column()
  */
  private $name;

  /**
  * @ORM\Column()
  */
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
