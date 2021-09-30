<?php

declare(strict_types=1);

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Assertions\Criteria;
use PHPUnit\Framework\TestCase;
use TypeError;

class CriteriaTest extends TestCase
{
    public function testJsonserialize()
    {
        $criteria = new Criteria();
        $criteria->setId('http://www.test.com/image.png');
        $criteria->setNarrative('Narrative of Criteria');

        $this->assertEquals(
            \json_encode($criteria, JSON_UNESCAPED_SLASHES),
            '{"@context":"https://w3id.org/openbadges/v2","id":"http://www.test.com/image.png","narrative":"Narrative of Criteria"}'
        );
    }

    public function testNarrative()
    {
        $criteria = new Criteria();
        $criteria->setNarrative('test Narrative');

        $this->assertTrue($criteria->getNarrative()==='test Narrative');

        $this->expectException(TypeError::class);
        $criteria->setNarrative(false);
    }

    public function testId()
    {
        $criteria = new Criteria();
        $criteria->setId('test Id');

        $this->assertTrue($criteria->getId()==='test Id');

        $this->expectException(TypeError::class);
        $criteria->setId(false);
    }
}
