<?php

declare(strict_types=1);

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Utils\VerificationObject;
use PHPUnit\Framework\TestCase;
use TypeError;

class VerificationObjectTest extends TestCase
{
    private VerificationObject $verificationObject;


    protected function setUp(): void
    {
        $this->VerificationObject = new VerificationObject();
    }

    public function testType()
    {
        $this->VerificationObject->setType('test Type');
        $this->assertTrue($this->VerificationObject->getType()=== 'test Type');
        $this->expectException(TypeError::class);
        $this->VerificationObject->setType(array());
    }


    public function testStartsWith()
    {
        $VerificationObject = new VerificationObject();
        $VerificationObject->setStartsWith('testStartsWith');

        $this->assertTrue($VerificationObject->getStartsWith()=== 'testStartsWith');
        $this->expectException(TypeError::class);
        $VerificationObject->setStartsWith(array());
    }

    public function testAllowedOrigins()
    {
        $VerificationObject = new VerificationObject();
        $VerificationObject->setAllowedOrigins('testAllowedOrigins');

        $this->assertTrue($VerificationObject->getAllowedOrigins()=== 'testAllowedOrigins');
        $this->expectException(TypeError::class);
        $VerificationObject->setAllowedOrigins(array());
    }

    public function testVerificationProperty()
    {
        $VerificationObject = new VerificationObject();
        $VerificationObject->setVerificationProperty('testVerificationProperty');

        $this->assertTrue($VerificationObject->getVerificationProperty()=== 'testVerificationProperty');
        $this->expectException(TypeError::class);
        $VerificationObject->setVerificationProperty(array());
    }
}
