<?php

namespace Azeroth\WorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureLootTemplate
 *
 * @ORM\Table(name="creature_loot_template")
 * @ORM\Entity(repositoryClass="Azeroth\WorldBundle\Repository\CreatureLootTemplateRepository")
 */
class CreatureLootTemplate
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
     * @var int
     *
     * @ORM\Column(name="item", type="integer")
     */
    private $item;

    /**
     * @var float
     *
     * @ORM\Column(name="ChanceOrQuestChance", type="float")
     */
    private $chanceOrQuestChance;

    /**
     * @var int
     *
     * @ORM\Column(name="lootmode", type="integer")
     */
    private $lootmode;

    /**
     * @var int
     *
     * @ORM\Column(name="groupid", type="integer")
     */
    private $groupid;

    /**
     * @var int
     *
     * @ORM\Column(name="mincountOrRef", type="integer")
     */
    private $mincountOrRef;

    /**
     * @var int
     *
     * @ORM\Column(name="maxcount", type="integer")
     */
    private $maxcount;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return CreatureLootTemplate
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return int
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set chanceOrQuestChance
     *
     * @param float $chanceOrQuestChance
     *
     * @return CreatureLootTemplate
     */
    public function setChanceOrQuestChance($chanceOrQuestChance)
    {
        $this->chanceOrQuestChance = $chanceOrQuestChance;

        return $this;
    }

    /**
     * Get chanceOrQuestChance
     *
     * @return float
     */
    public function getChanceOrQuestChance()
    {
        return $this->chanceOrQuestChance;
    }

    /**
     * Set lootmode
     *
     * @param integer $lootmode
     *
     * @return CreatureLootTemplate
     */
    public function setLootmode($lootmode)
    {
        $this->lootmode = $lootmode;

        return $this;
    }

    /**
     * Get lootmode
     *
     * @return int
     */
    public function getLootmode()
    {
        return $this->lootmode;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     *
     * @return CreatureLootTemplate
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return int
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set mincountOrRef
     *
     * @param integer $mincountOrRef
     *
     * @return CreatureLootTemplate
     */
    public function setMincountOrRef($mincountOrRef)
    {
        $this->mincountOrRef = $mincountOrRef;

        return $this;
    }

    /**
     * Get mincountOrRef
     *
     * @return int
     */
    public function getMincountOrRef()
    {
        return $this->mincountOrRef;
    }

    /**
     * Set maxcount
     *
     * @param integer $maxcount
     *
     * @return CreatureLootTemplate
     */
    public function setMaxcount($maxcount)
    {
        $this->maxcount = $maxcount;

        return $this;
    }

    /**
     * Get maxcount
     *
     * @return int
     */
    public function getMaxcount()
    {
        return $this->maxcount;
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'item' => $this->getItem(),
            'ChanceOrQuestChance' => $this->getChanceOrQuestChance(),
            'lootmode' => $this->getLootmode(),
            'groupid' => $this->getGroupid(),
            'mincountOrRef' => $this->getMincountOrRef(),
            'maxCount' => $this->getMaxcount(),
        ];
    }
}

