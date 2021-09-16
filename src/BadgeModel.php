<?php

namespace JulienV\Openbadge;

class BadgeModel extends AbstractOpenBadge
{
    protected $description;
    protected $tags ;
    protected $name ;
    protected $criteria ;
    protected $issuer ;


    public function jsonSerialize()
    {
        $array = get_object_vars($this);
        $array = array('@context'=> "https://w3id.org/openbadges/v2") + $array;
        return $array ;
    }

    /**
     * Get the value of tags
      */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
      */
    public function setTags($tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get the value of criteria
      */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Set the value of criteria
      */
    public function setCriteria($criteria): self
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * Get the value of alignment
      */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * Set the value of alignment
      */
    public function setAlignment($alignment): self
    {
        $this->alignment = $alignment;

        return $this;
    }
}
