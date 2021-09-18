<?php

namespace JulienV\Openbadge;

/**
 * See https://www.imsglobal.org/sites/default/files/Badges/OBv2p0Final/index.html#Assertion
 * For
 */
use DateTime;
use JulienV\Openbadge\AbstractOpenBadge;
use JulienV\Openbadge\Interfaces\AssertionInterface;

class AssertionModel extends AbstractOpenBadge implements AssertionInterface
{
    /**
     * If using hosted verification, this should be the URI where the assertion is accessible.
     * For signed Assertions, it is recommended to use a UUID in the urn:uuid namespace.
     * 
     * @var string Unique IRI for the Assertion.
     */
    protected $id;

    /**
     * Simply the string 'Assertion'.
     *
     * @var string
     */
    protected $type = 'Assertion';

    /** TODO: use 	IdentityObject
     * The recipient of the achievement.
     * IdentityObject
     * 
     * @var array<mixed>
     */
    protected $recipient = [
        "type" => "email",
        "hashed"=> false,
        "identity"=>''
    ];

    /**
     * TODO: Badgeclass
     * IRI or document that describes the type of badge being awarded.
     * If an HTTP/HTTPS IRI The endpoint should be a BadgeClass.
     * 
     * @var string
     */
    protected $badge;

    /**
     * TODO: switch VerificationObject Document
     * Instructions for third parties to verify this assertion.
     * (Alias “verify” may be used in context.)
     * @var array<mixed>
     */
    protected $verification = [
        "type" => "HostedBadge"
    ];

    /**
     * Open Badges v2.0 requires string ISO 8601 values with time zone indicators.
     * For example, 2016-12-31T23:59:59+00:00 is a valid ISO 8601
     * @var Datetime indicate when the badge was obtained
     */
    protected $issuedOn ;


    /**
     * TODO: image Object
     * IRI or document representing an image representing this user’s achievement.
     * This must be a PNG or SVG image, and should be prepared via the Baking specification.
     * @var mixed uri of image baked
     */
    protected $image;

    /**
     * TODO: Evidence Object
     * IRI or document describing the work that the recipient did to earn the achievement.
     * This can be a page that links out to other pages if linking directly to the work is infeasible.
     * @var mixed uri of image baked
     */
    protected $evidence;

    /**
     * Text or Markdown Text
     * A narrative that connects multiple pieces of evidence.
     * Likely only present at this location if evidence is a multi-value array.
     * @var string uri of image baked
     */
    protected $narrative;

    /**
     * If the achievement has some notion of expiry, this indicates a timestamp when a badge should no longer be considered valid.
     * After this time, the badge should be considered expired.
     * @var DateTime
     */
    protected $expires;

    /**
     * Defaults to false if Assertion is not referenced from a revokedAssertions list and may be omitted.
     * @var bool
     */
    protected $revoked;

    /**
     * Optional published reason for revocation, if revoked.
     * @var string
     */
    protected $revocationReason;


    /**
     * @return Datetime
     */
    public function getIssuedOn(): DateTime
    {
        return $this->issuedOn;
    }

    /**
     * Set Issued indicate when the badge was obtained
     * @param Datetime $issuedOn
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
     * @return array<mixed>
     */
    public function getRecipient(): array
    {
        return $this->recipient;
    }

    /**
     * @param array<mixed> $recipient
     */
    public function setRecipient(array $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @return array<mixed>
     */
    public function getVerification(): array
    {
        return $this->verification;
    }

    /**
     * Instructions for third parties to verify this assertion.
     * (Alias “verify” may be used in context.)
     * @param array<mixed> $verification
     *
     */
    public function setVerification(array $verification): self
    {
        $this->verification = $verification;

        return $this;
    }

    /**
     * Get URI for badge baked
     */
    public function getImage(): string
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set Email for recipient
     * @param string $email
     */
    public function setEmailRecipient(string $email): self
    {
        $this->recipient['identity'] = $email;
        return $this;
    }
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
     * @return mixed
     * Get the value of evidence
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Set the value of evidence
     */
    public function setEvidence(mixed $evidence): self
    {
        $this->evidence = $evidence;

        return $this;
    }

    /**
     * Get the value of narrative
     */
    public function getNarrative()
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
     * Get the value of expires
     * @return \DateTime
     */
    public function getExpires(): DateTime
    {
        return $this->expires;
    }

    /**
     * Set the value of expires
     */
    public function setExpires(DateTime $expires): self
    {
        $this->expires = $expires;

        return $this;
    }


    /**
     * Get the value of revoked
     */
    public function getRevoked(): bool
    {
        return $this->revoked;
    }

    /**
     * Set the value of revoked
     */
    public function setRevoked(bool $isRevoked): self
    {
        $this->revoked = $isRevoked;

        return $this;
    }

    /**
     * Get the value of revocationReason
     */
    public function getRevocationReason(): string
    {
        return $this->revocationReason;
    }

    /**
     *
     * Set the value of revocationReason
     */
    public function setRevocationReason(string $revocationReason): self
    {
        $this->revocationReason = $revocationReason;

        return $this;
    }
}
