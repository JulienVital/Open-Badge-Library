<?php

namespace JulienV\Openbadge;

/**
 * See https://www.imsglobal.org/sites/default/files/Badges/OBv2p0Final/index.html#Assertion
 * For
 */
use DateTime;
use JulienV\Openbadge\AbstractOpenBadge;

class AssertionModel extends AbstractOpenBadge
{
    /**
     *@var string Unique IRI for the Assertion. If using hosted verification, this should be the URI where the assertion is accessible. For signed Assertions, it is recommended to use a UUID in the urn:uuid namespace.
     */
    protected $id;

    protected $type = 'Assertion';

    /**
     *@var Datetime indicate when the badge was obtained
     */
    protected $issuedOn ;

    /**
     *@var Identity The recipient of the achievement.
     */
    protected $recipient = [
        "type" => "email",
        "hashed"=> false,
        "identity"=>''
    ];

    /**
     *@var string
    */
    protected $badge;

    /**
     * @var Verification
     */
    protected $verification = [
        "type" => "HostedBadge"
    ];

    /**
     * @var string uri of image baked
     */
    protected $image;


    /**
     * @return Datetime
     */
    public function getIssuedOn(): DateTime
    {
        return $this->issuedOn;
    }

    /**
     * Set Issued indicate when the badge was obtained
     *@param Datetime $issuedOn
     */
    public function setIssuedOn(DateTime $issuedOn): self
    {
        $this->issuedOn = $issuedOn;

        return $this;
    }

    /**
     * Get the value of badge
     */
    public function getBadge(): string
    {
        return $this->badge;
    }

    /**
     * Set Badge of this assertion
     */
    public function setBadge(string $badge): self
    {
        $this->badge = $badge;

        return $this;
    }


    /**
     * Get the value of recipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Set recipient of this assertion
     * This is an identity
     */
    public function setRecipient(array $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get the value of verification
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Instructions for third parties to verify this assertion.
     * (Alias “verify” may be used in context.)
     */
    public function setVerification(array $verification): self
    {
        $this->verification = $verification;

        return $this;
    }

    /**
     * Get URI for badge baked
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the URI of image baked
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Email for recipient
     *@param string $email
     */
    public function setEmailRecipient(string $email): self
    {
        $this->recipient['identity'] = $email;
        return $this;
    }
}
