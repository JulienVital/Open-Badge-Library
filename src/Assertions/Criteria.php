<?php

namespace JulienV\Openbadge\Assertions;

use JulienV\Openbadge\AbstractOpenBadge;

class Criteria extends AbstractOpenBadge
{
    /**
     * The URI of a webpage that describes in a human-readable format the criteria for the BadgeClass.
     *
     * @var string
     */
    protected $id ;

    /**
     * A narrative of what is needed to earn the badge.
     * @var string text or Markdown Text
     */
    protected $narrative ;



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
     * Get the value of narrative
     */
    public function getNarrative(): string
    {
        return $this->narrative;
    }

    /**
     * Set the value of narrative
     */
    public function setNarrative(string $narrative): self
    {
        $this->narrative = $narrative;

        return $this;
    }
}
