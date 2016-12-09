<?php

namespace Azeroth\WorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureTemplate
 *
 * @ORM\Table(name="creature_template")
 * @ORM\Entity(repositoryClass="Azeroth\WorldBundle\Repository\CreatureTemplateRepository")
 */
class CreatureTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

