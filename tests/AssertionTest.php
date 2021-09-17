<?php
declare(strict_types=1);
namespace JulienV\Openbadge\Tests;

use DateTime;
use JulienV\Openbadge\AssertionModel;
use PHPUnit\Framework\TestCase;
use TypeError;

class AssertionTest extends TestCase
{
    private AssertionModel $assertion;

    protected function setUp(): void
    {
        $this->assertion = new AssertionModel();
    }

    public function testIssuedOn()
    {
        $this->assertion->setIssuedOn($dateTime = new DateTime());

        $this->assertTrue($this->assertion->getIssuedOn()=== $dateTime);
        $this->expectException(TypeError::class);
        $this->assertion->setEmailRecipient(false);
    }
    public function testType()
    {
        $this->assertTrue($this->assertion->getType()==='Assertion');
    }

    public function testRecipient()
    {
        $recipient = [
            "type" => "email",
            "hashed"=> false,
            "identity"=>''
        ];
        $this->assertion->setRecipient($recipient);

        $this->assertTrue($this->assertion->getRecipient()===$recipient);

        $this->assertion->setEmailRecipient('test@email.com');
        $this->assertTrue($this->assertion->getRecipient()===[
            "type" => "email",
            "hashed"=> false,
            "identity"=>'test@email.com'
        ]);

        $this->expectException(TypeError::class);
        $this->assertion->setEmailRecipient(false);
    }

    public function testBadge()
    {
        $this->assertion->setBadge('badgeTest');

        $this->assertTrue($this->assertion->getBadge()=== 'badgeTest');
        $this->expectException(TypeError::class);
        $this->assertion->setBadge(false);
    }

    public function testVerification()
    {
        $verification = ["type" => "tested"];
        $this->assertion->setVerification($verification);
        
        $this->assertTrue($this->assertion->getVerification()=== $verification);
        $this->expectException(TypeError::class);
        $this->assertion->setVerification('false');
    }

    public function testImage()
    {
        $this->assertion->setImage('genere/image.png');
        $this->assertTrue($this->assertion->getImage()=== 'genere/image.png');
        
        $this->expectException(TypeError::class);
        $this->assertion->setImage(false);
    }
}