<?php
declare(strict_types=1);
namespace JulienV\Openbadge\Tests;

use DateTime;
use JulienV\Openbadge\AssertionModel;
use JulienV\Openbadge\BadgeModel;
use PHPUnit\Framework\TestCase;
use TypeError;

class AssertionModelTest extends TestCase
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
        $this->assertion->setIssuedOn(array());
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
        $badgeTest = new BadgeModel();
        $this->assertion->setBadge($badgeTest);

        $this->assertTrue($this->assertion->getBadge()=== $badgeTest);
        $this->expectException(TypeError::class);
        $this->assertion->setBadge('badgetest');
    }

    public function testVerification()
    {
        $verification = ["type" => "tested"];
        $this->assertion->setVerification($verification);
        
        $this->assertTrue($this->assertion->getVerification()=== $verification);
        $this->expectException(TypeError::class);
        
        /**
         * @return \TypeError
         */
        $this->assertion->setVerification('false');
    }

    public function testImage()
    {
        $this->assertion->setImage('genere/image.png');
        $this->assertTrue($this->assertion->getImage()=== 'genere/image.png');
        
        $this->expectException(TypeError::class);
        $this->assertion->setImage(false);
    }

    public function testId()
    {
        $this->assertion->setId('test Id');
        $this->assertTrue($this->assertion->getId()=== 'test Id');
        
        $this->expectException(TypeError::class);
        $this->assertion->setImage(array());
    }

    public function testEvidence()
    {
        $exampleObject = new DateTime(); 
        $this->assertion->setEvidence('test evidence');
        $this->assertTrue($this->assertion->getEvidence()=== 'test evidence');

        $this->assertion->setEvidence($exampleObject);
        $this->assertTrue($this->assertion->getEvidence()=== $exampleObject);

    }

    public function testNarrative()
    {
        
        $this->assertion->setNarrative('test narrative');
        $this->assertTrue($this->assertion->getNarrative()=== 'test narrative');

        $this->expectException(TypeError::class);
        $this->assertion->setNarrative(array());

    }

    public function testExpirse()
    {
        $date = new DateTime();
        $this->assertion->setExpires($date);
        $this->assertTrue($this->assertion->getExpires()=== $date);

        $this->expectException(TypeError::class);
        $this->assertion->setExpires('date');

    }

    public function testRevoked()
    {
        $this->assertion->setRevoked(true);
        $this->assertTrue($this->assertion->getRevoked()=== true);

        $this->assertion->setRevoked(false);
        $this->assertTrue($this->assertion->getRevoked()=== false);

        $this->expectException(TypeError::class);
        $this->assertion->setRevoked('true');

    }

    public function testRevocationReason()
    {
        $this->assertion->setRevocationReason('RevocationReason');
        $this->assertTrue($this->assertion->getRevocationReason()=== 'RevocationReason');

        $this->expectException(TypeError::class);
        $this->assertion->setRevocationReason(array());

    }
}