<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/

class Option{
  use IdTrait;

  private $name;
  private $url;


}
