<?php

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Profiles\IdentityObject;
use PHPUnit\Framework\TestCase;
use TypeError;

class IdentityObjectTest extends TestCase
{
    public function testIdentity()
    {
        $identityObject = new IdentityObject();
        $identityObject->setIdentity('test Identity');

        $this->assertTrue($identityObject->getIdentity()==='test Identity');

        $this->expectException(TypeError::class);
        $identityObject->setIdentity(array());
    }

    public function testType()
    {
        $identityObject = new IdentityObject();
        $identityObject->setType('test type');

        $this->assertTrue($identityObject->getType()==='test type');

        $this->expectException(TypeError::class);
        $identityObject->setType(array());
    }

    public function testHashed()
    {
        $identityObject = new IdentityObject();
        $identityObject->setHashed(true);

        $this->assertTrue($identityObject->getHashed()===true);

        $identityObject->setHashed(false);

        $this->assertTrue($identityObject->getHashed()===false);

        $this->expectException(TypeError::class);
        $identityObject->setHashed(array());
    }
}
