<?php

namespace JulienV\Openbadge\Assertions;

use JulienV\Openbadge\AbstractOpenBadge;

class Evidence extends AbstractOpenBadge
{
    /**
     * The URI of a webpage presenting evidence of achievement.
     *  @var string
     **/
    protected $id ;

    /**
     * A narrative that describes the evidence and process of achievement that led to an Assertion.
     * Text or Markdown Text
     *  @var string
     */
    protected $narrative;

    /**
     * 	A descriptive title of the evidence.
     *  @var string
     */
    protected $name ;

    /**
    * A longer description of the evidence.
    *  @var string
    */
    protected $description ;

    /**
     * A string that describes the type of evidence. For example, Poetry, Prose, Film.
     *  @var string
     */
    protected $genre ;

    /**
     * 	A description of the intended audience for a piece of evidence.
     *
     * @var string
     */
    protected $audience ;


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

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get the value of genre
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * Get the value of audience
     */
    public function getAudience(): string
    {
        return $this->audience;
    }


    /**
     * Set the value of audience
     */
    public function setAudience(string $audience): self
    {
        $this->audience = $audience;

        return $this;
    }


    /**
     * Set the value of genre
     */
    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }


    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

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
