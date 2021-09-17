<?php

namespace JulienV\Openbadge;

abstract class AbstractOpenBadge implements \JsonSerializable
{
    protected $id;
    protected $type;
    protected $image;

    public function jsonSerialize()
    {
        $array = get_object_vars($this);
        $array = ['@context'=> "https://w3id.org/openbadges/v2"] + $array;
        return $array ;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}
