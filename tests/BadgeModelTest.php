<?php

declare(strict_types=1);

namespace JulienV\Openbadge\Tests;

use JulienV\Openbadge\AlignmentObject;
use JulienV\Openbadge\BadgeClasses\BadgeModel;
use JulienV\Openbadge\Criteria;
use JulienV\Openbadge\Profiles\IssuerModel;
use PHPUnit\Framework\TestCase;
use TypeError;

class BadgeModelTest extends TestCase
{
    private BadgeModel $badgeModel;


    protected function setUp(): void
    {
        $this->badgeModel = new BadgeModel();
    }
    public function testId()
    {
        $this->badgeModel->setId('test Id');
        $this->assertTrue($this->badgeModel->getId()=== 'test Id');

        $this->expectException(TypeError::class);
        $this->badgeModel->setId(array());
    }

    public function testTag()
    {
        $badgeModel = new BadgeModel();
        $badgeModel->setTags(['test','array']);

        $this->assertTrue($badgeModel->getTags()=== ['test','array']);
        $this->expectException(TypeError::class);
        $badgeModel->setTags('string');
    }

    public function testType()
    {
        $this->assertTrue($this->badgeModel->getType()=== 'BadgeClass');
    }

    public function testCriteria()
    {
        $badgeModel = new BadgeModel();
        $criteria = new Criteria();
        $badgeModel->setCriteria($criteria);

        $this->assertTrue($badgeModel->getCriteria()=== $criteria);
        $this->expectException(TypeError::class);
        $badgeModel->setCriteria('string');
    }

    public function testAlignment()
    {
        $badgeModel = new BadgeModel();
        $alignment = new alignmentObject();
        $badgeModel->setAlignment($alignment);

        $this->assertTrue($badgeModel->getAlignment()=== $alignment);

    }

    public function testName()
    {
        $badgeModel = new BadgeModel();
        $badgeModel->setName('testName');

        $this->assertTrue($badgeModel->getName()=== 'testName');
        $this->expectException(TypeError::class);
        $badgeModel->setName(array());
    }


    public function testIssuer()
    {
        $badgeModel = new BadgeModel();
        $issuer = new IssuerModel();
        $badgeModel->setIssuer($issuer);

        $this->assertTrue($badgeModel->getIssuer()=== $issuer);
        $this->expectException(TypeError::class);
        $badgeModel->setIssuer(array());
    }


    public function testImage()
    {
        $badgeModel = new BadgeModel();
        $badgeModel->setImage('testImage');

        $this->assertTrue($badgeModel->getImage()=== 'testImage');
    }

    public function testDescription()
    {
        $badgeModel = new BadgeModel();
        $badgeModel->setDescription('testDescription');

        $this->assertTrue($badgeModel->getDescription()=== 'testDescription');
        $this->expectException(TypeError::class);
        $badgeModel->setDescription(array());
    }
}
