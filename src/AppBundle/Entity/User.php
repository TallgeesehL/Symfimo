<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/

class User{
  use IdTrait;

  /**
  * @ORM\ManyToOne(targetEntity="Estate")
  */
  private $estate;

  /**
  * @ORM\Column()
  */
  private $email;

  /**
  * @ORM\Column()
  */
  private $firstname;

  /**
  * @ORM\Column()
  */
  private $lastname;


  /**
  * @ORM\Column()
  */
  private $password;

  /**
  * @ORM\Column()
  */
  private $role;


public function setEmail($email)
{
   $this->email = $email;
   return $this;
}

public function getEmail()
{
   return $this->email;
}

public function setFirstname($firstname)
{
   $this->firstname = $firstname;
   return $this;
}

public function getFirstname()
{
   return $this->firstname;
}

public function setLastname($lastname)
{
   $this->lastname = $lastname;
   return $this;
}

public function getLastname()
{
   return $this->lastname;
}

public function setPassword($password)
{
   $this->password = $password;
   return $this;
}

public function getPassword()
{
   return $this->password;
}

public function setRole($role)
{
   $this->role = $role;
   return $this;
}

public function getRole()
{
   return $this->role;
}

}
