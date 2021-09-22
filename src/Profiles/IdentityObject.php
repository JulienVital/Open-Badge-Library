<?php

namespace JulienV\Openbadge\Profiles;

use JulienV\Openbadge\AbstractOpenBadge;

class IdentityObject extends AbstractOpenBadge
{
    /**
     * Either the hash of the identity or the plaintext value.
     * If it’s possible that the plaintext transmission and storage
     * of the identity value would leak personally identifiable information
     * where there is an expectation of privacy, it is strongly recommended
     * that an IdentityHash be used.
     *
     * @var string
     */
    private $identity;

    /**
     * The property by which the recipient of a badge is identified.
     * This value should be an IRI mapped in the present context.
     * For example, email maps to http://schema.org/email and
     * indicates that the identity of the IdentityObject will
     * represent a value of a Profile’s email property
     *
     * @var string
     */
    private $type = 'email';

    /**
     * Whether or not the identity value is hashed.
     *
     * @var bool
     */
    private $hashed;

    /**
     * If the recipient is hashed, this should contain the string used to salt the hash.
     *  If this value is not provided, it should be assumed that the hash was not salted.
     *
     * @var string
     */
    private $salt;


    /**
     * Get the value of identity
     */
    public function getIdentity(): string
    {
        return $this->identity;
    }

    /**
     * Set the value of identity
     */
    public function setIdentity(string $identity): self
    {
        $this->identity = $identity;

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
     * Set the value of type
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of hashed
     */
    public function getHashed(): bool
    {
        return $this->hashed;
    }

    /**
     * Set the value of hashed
     */
    public function setHashed(bool $hashed): self
    {
        $this->hashed = $hashed;

        return $this;
    }
}
