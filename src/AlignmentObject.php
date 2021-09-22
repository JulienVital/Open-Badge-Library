<?php

namespace JulienV\Openbadge;

use JulienV\Openbadge\AbstractOpenBadge;

class AlignmentObject extends AbstractOpenBadge
{
    /** @var string	Name of the alignment. **/
    private $targetName ;

    /** @var string	URL linking to the official description of the alignment target, for example an individual standard within an educational framework. **/
    private $targetUrl ;

    /** @var string	Short description of the alignment target. **/
    private $targetDescription ;

    /** @var string	Name of the framework the alignment target. **/
    private $targetFramework ;

    /** @var string	If applicable, a locally unique string identifier that identifies the alignment target within its framework and/or targetUrl. **/
    private $targetCode ;

    /**
     * Get the value of targetName
     */
    public function getTargetName(): string
    {
        return $this->targetName;
    }

    /**
     * Set the value of targetName
     */
    public function setTargetName(string $targetName): self
    {
        $this->targetName = $targetName;

        return $this;
    }

    /**
     * Get the value of targetUrl
     */
    public function getTargetUrl(): string
    {
        return $this->targetUrl;
    }

    /**
     * Set the value of targetUrl
     */
    public function setTargetUrl(string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;

        return $this;
    }

    /**
     * Get the value of targetDescription
     */
    public function getTargetDescription(): string
    {
        return $this->targetDescription;
    }

    /**
     * Set the value of targetDescription
     */
    public function setTargetDescription(string $targetDescription): self
    {
        $this->targetDescription = $targetDescription;

        return $this;
    }

    /**
     * Get the value of targetFramework
     */
    public function getTargetFramework(): string
    {
        return $this->targetFramework;
    }

    /**
     * Set the value of targetFramework
     */
    public function setTargetFramework(string $targetFramework): self
    {
        $this->targetFramework = $targetFramework;

        return $this;
    }

    /**
     * Get the value of targetCode
     */
    public function getTargetCode(): string
    {
        return $this->targetCode;
    }

    /**
     * Set the value of targetCode
     */
    public function setTargetCode(string $targetCode): self
    {
        $this->targetCode = $targetCode;

        return $this;
    }
}
