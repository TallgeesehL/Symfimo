<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * Get Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
