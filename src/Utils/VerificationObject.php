<?php

namespace JulienV\Openbadge;

use JulienV\Openbadge\AbstractOpenBadge;

class VerificationObject extends AbstractOpenBadge
{
    /**
     * Supported values for single assertion verification are HostedBadge and SignedBadge
     * @var string */
    private $type;

    /** @var string */
    private $startsWith;

    /** @var string */
    private $verificationProperty;

    /** @var string */
    private $allowedOrigins;

    /** @var mixed TODO: CryptographicKey */
    private $creator;


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
     * Get the value of startsWith
     */
    public function getStartsWith(): string
    {
        return $this->startsWith;
    }

    /**
     * Set the value of startsWith
     */
    public function setStartsWith(string $startsWith): self
    {
        $this->startsWith = $startsWith;

        return $this;
    }

    /**
     * Get the value of allowedOrigins
     */
    public function getAllowedOrigins(): string
    {
        return $this->allowedOrigins;
    }

    /**
     * Set the value of allowedOrigins
     */
    public function setAllowedOrigins(string $allowedOrigins): self
    {
        $this->allowedOrigins = $allowedOrigins;

        return $this;
    }

    /**
     * Get the value of verificationProperty
     */
    public function getVerificationProperty(): string
    {
        return $this->verificationProperty;
    }

    /**
     * Set the value of verificationProperty
     */
    public function setVerificationProperty(string $verificationProperty): self
    {
        $this->verificationProperty = $verificationProperty;

        return $this;
    }
}
