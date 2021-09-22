<?php

declare(strict_types=1);

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Profiles\IssuerModel;
use PHPUnit\Framework\TestCase;
use TypeError;

class IssuerModelTest extends TestCase
{
    private IssuerModel $IssuerModel;


    protected function setUp(): void
    {
        $this->IssuerModel = new IssuerModel();
    }

    public function testId()
    {
        $this->IssuerModel->setId('test Id');
        $this->assertTrue($this->IssuerModel->getId()=== 'test Id');
        $this->expectException(TypeError::class);
        $this->IssuerModel->setId(array());
    }

    public function testType()
    {
        $this->assertTrue($this->IssuerModel->getType()=== 'Issuer');
    }

    public function testName()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setName('testName');

        $this->assertTrue($IssuerModel->getName()=== 'testName');
        $this->expectException(TypeError::class);
        $IssuerModel->setName(array());
    }

    public function testImage()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setImage('testImage');

        $this->assertTrue($IssuerModel->getImage()=== 'testImage');
    }

    public function testDescription()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setDescription('testDescription');

        $this->assertTrue($IssuerModel->getDescription()=== 'testDescription');
        $this->expectException(TypeError::class);
        $IssuerModel->setDescription(array());
    }

    public function testVerification()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setVerification('testVerification');

        $this->assertTrue($IssuerModel->getVerification()=== 'testVerification');
    }

    public function testPublicKey()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setPublicKey('testPublicKey');

        $this->assertTrue($IssuerModel->getPublicKey()=== 'testPublicKey');
    }

    public function testRevocationList()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setRevocationList('testRevocationList');

        $this->assertTrue($IssuerModel->getRevocationList()=== 'testRevocationList');
        $this->expectException(TypeError::class);
        $IssuerModel->setRevocationList(array());
    }

    public function testEmail()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setEmail('testEmail');

        $this->assertTrue($IssuerModel->getEmail()=== 'testEmail');
        $this->expectException(TypeError::class);
        $IssuerModel->setEmail(array());
    }

    public function testUrl()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setUrl('testUrl');

        $this->assertTrue($IssuerModel->getUrl()=== 'testUrl');
        $this->expectException(TypeError::class);
        $IssuerModel->setUrl(array());
    }

    public function testTelephone()
    {
        $IssuerModel = new IssuerModel();
        $IssuerModel->setTelephone('testTelephone');

        $this->assertTrue($IssuerModel->getTelephone()=== 'testTelephone');
        $this->expectException(TypeError::class);
        $IssuerModel->setTelephone(array());
    }
}
