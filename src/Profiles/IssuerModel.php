<?php

namespace JulienV\Openbadge\Profiles;

use JulienV\Openbadge\AbstractOpenBadge;
use JulienV\Openbadge\Interfaces\IssuerInterface;

class IssuerModel extends AbstractOpenBadge implements IssuerInterface
{
    /** @var  string 	Unique IRI for the Issuer file*/
    protected $id ;

    /** @var  string */
    protected $type= 'Issuer' ;

    /** @var  string The name of the entity or organization. */
    protected $name ;

    /** @var  string The homepage or social media profile of the entity,
     * whether individual or institutional. Should be a URL/URI Accessible via HTTP
     */
    protected $url ;

    /** @var  string A phone number for the entity.
     *  For maximum compatibility, the value should be expressed as a + and country code followed by the number with no spaces or other punctuation,
     * like +16175551212 */
    protected $telephone ;

    /** @var  string A short description of the issuer entity or organization. */
    protected $description ;

    /**
     * TODO: Image Object
     * @var mixed
     */
    protected $image ;

    /** @var  string Contact address for the individual or organization. */
    protected $email ;

    /**
     * Todo: CryptographicKey Object
     *The key(s) an issuer uses to sign Assertions.
     * @var mixed
     */
    protected $publicKey ;

    /**
     * Todo: verification Object
     * Instructions for how to verify Assertions published by this Profile.
     * @var mixed
     */
    protected $verification;

    /**
     * Todo: HTTP URI of the Badge Revocation List used for marking revocation of signed badges.
     * @var string
     */
    protected $revocationList;


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
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of telephone
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     */
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of url
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set the value of url
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
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
     * Get the value of image
     */
    public function getImage(): mixed
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage(mixed $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of publicKey
     */
    public function getPublicKey(): mixed
    {
        return $this->publicKey;
    }

    /**
     * Set the value of publicKey
     */
    public function setPublicKey(mixed $publicKey): self
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * Get the value of verification
     */
    public function getVerification(): mixed
    {
        return $this->verification;
    }

    /**
     * Set the value of verification
     */
    public function setVerification(mixed $verification): self
    {
        $this->verification = $verification;

        return $this;
    }

    /**
     * Get the value of revocationList
     */
    public function getRevocationList(): string
    {
        return $this->revocationList;
    }

    /**
     * Set the value of revocationList
     */
    public function setRevocationList(string $revocationList): self
    {
        $this->revocationList = $revocationList;

        return $this;
    }
}
