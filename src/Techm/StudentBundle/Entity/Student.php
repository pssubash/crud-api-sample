<?php

namespace Techm\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Student
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="studname", type="string", length=255)
     */
    private $studname;

    /**
     * @var string
     *
     * @ORM\Column(name="studemail", type="string", length=255)
     */
    private $studemail;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set studname
     *
     * @param string $studname
     * @return Student
     */
    public function setStudname($studname)
    {
        $this->studname = $studname;

        return $this;
    }

    /**
     * Get studname
     *
     * @return string 
     */
    public function getStudname()
    {
        return $this->studname;
    }

    /**
     * Set studemail
     *
     * @param string $studemail
     * @return Student
     */
    public function setStudemail($studemail)
    {
        $this->studemail = $studemail;

        return $this;
    }

    /**
     * Get studemail
     *
     * @return string 
     */
    public function getStudemail()
    {
        return $this->studemail;
    }
}
