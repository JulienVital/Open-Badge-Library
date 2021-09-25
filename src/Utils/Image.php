<?php

namespace JulienV\Openbadge\Utils;

use JulienV\Openbadge\AbstractOpenBadge;

class Image extends AbstractOpenBadge
{
    /**
     * IRI	The URI or Data URI of the image.
     *
     * @var string
     */
    protected $id ;


    /**
     * Text	The caption for the image.
     *
     * @var string
     */
    protected $caption ;


    /**
     * @id: Profile	The author of the image, if desired.
     *
     * @var string
     */
    protected $author ;


    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of caption
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * Set the value of caption
     */
    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function jsonSerialize()
    {
        $array = get_object_vars($this);

        if ($this->getId() && count(array_filter($array))==1){
            return $this->getId();
        }
        $array = array_filter(['@context'=> "https://w3id.org/openbadges/v2"] + $array);

        return $array ;
    }
}
