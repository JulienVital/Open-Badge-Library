<?php

namespace JulienV\Openbadge\BadgeClasses;

use JulienV\Openbadge\AbstractOpenBadge;
use JulienV\Openbadge\Utils\AlignmentObject;
use JulienV\Openbadge\Interfaces\BadgeClassInterface;
use JulienV\Openbadge\Profiles\IssuerModel;
use JulienV\Openbadge\Assertions\Criteria;

class BadgeModel extends AbstractOpenBadge implements BadgeClassInterface
{
    /**
     * @var string Unique IRI for the BadgeClass.
     */
    protected $id ;

    /**
     * @var string Simply the string 'BadgeClass'.
     */
    protected $type = 'BadgeClass';

    /**
     * @var string The name of the achievement.
     */
    protected $name ;

    /**
     * @var string A short description of the achievement.
     */
    protected $description;

    /**
     * PNG JPG or ImageObject
     * @var mixed IRI or document representing an image of the achievement. This must be a PNG or SVG image.
     */
    protected $image ;

    /**
     * @var Criteria URI or embedded criteria document describing how to earn the achievement.
     * */
    protected $criteria ;

    /**
     *TODO ProfileObject
     * @var IssuerModel IRI or document describing the individual, entity, or organization that issued the badge.
     */
    protected $issuer ;



    /** @var AlignmentObject An object describing which objectives or educational standards this badge aligns to, if any.*/
    protected $alignment ;

    /**
     * @var string[] A tag that describes the type of achievement.
     * */
    protected $tags ;

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
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return AlignmentObject
     */
    public function getAlignment(): alignmentObject
    {
        return $this->alignment;
    }

    /**
     * Set the value of alignment
     * @param AlignmentObject $alignment
     */
    public function setAlignment(AlignmentObject $alignment): self
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Criteria
     */
    public function getCriteria(): Criteria
    {
        return $this->criteria;
    }

    /**
     * @param Criteria $criteria
     */
    public function setCriteria(Criteria $criteria): self
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of issuer
     *
     * @return IssuerModel
     */
    public function getIssuer(): IssuerModel
    {
        return $this->issuer;
    }

    /**
     * Set the value of issuer
     *
     * @param IssuerModel $issuer
     *
     * @return self
     */
    public function setIssuer(IssuerModel $issuer): self
    {
        $this->issuer = $issuer;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
