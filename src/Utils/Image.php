<?php

namespace JulienV\Openbadge;

use JulienV\Openbadge\AbstractOpenBadge;

class Image extends AbstractOpenBadge
{
    /**
     * IRI	The URI or Data URI of the image.
     *
     * @var string
     */
    private $id ;


    /**
     * Text	The caption for the image.
     *
     * @var string
     */
    private $caption ;


    /**
     * @id: Profile	The author of the image, if desired.
     *
     * @var string
     */
    private $author ;


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
}
