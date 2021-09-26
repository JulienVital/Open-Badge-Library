<?php

declare(strict_types=1);

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Assertions\Evidence;
use PHPUnit\Framework\TestCase;
use TypeError;

class EvidenceTest extends TestCase
{
    function testReturnStringIFOnlyID(){

        $evidence = new Evidence();
        $evidence->setId('http://www.test.com/image.png');

        $this->assertEquals(\json_encode($evidence,JSON_UNESCAPED_SLASHES),'"http://www.test.com/image.png"');


    }

    function testJsonserialize(){

        $evidence = new Evidence();
        $evidence->setId('http://www.test.com/image.png');
        $evidence->setName('Name of Evidence');

        $this->assertEquals(\json_encode($evidence,JSON_UNESCAPED_SLASHES),
                '{"@context":"https://w3id.org/openbadges/v2","id":"http://www.test.com/image.png","name":"Name of Evidence"}'
            );


    }

    public function  testNarrative()
    {
        $evidence = new Evidence();
        $evidence->setNarrative('test Narrative');

        $this->assertTrue($evidence->getNarrative()==='test Narrative');

        $this->expectException(TypeError::class);
        $evidence->setNarrative(false);
    }

    public function  testName()
    {
        $evidence = new Evidence();
        $evidence->setName('test Name');

        $this->assertTrue($evidence->getName()==='test Name');

        $this->expectException(TypeError::class);
        $evidence->setName(false);
    }

    public function  testDescription()
    {
        $evidence = new Evidence();
        $evidence->setDescription('test Description');

        $this->assertTrue($evidence->getDescription()==='test Description');

        $this->expectException(TypeError::class);
        $evidence->setDescription(false);
    }

    public function  testGenre()
    {
        $evidence = new Evidence();
        $evidence->setGenre('test Genre');

        $this->assertTrue($evidence->getGenre()==='test Genre');

        $this->expectException(TypeError::class);
        $evidence->setGenre(false);
    }

    public function  testAudience()
    {
        $evidence = new Evidence();
        $evidence->setAudience('test Audience');

        $this->assertTrue($evidence->getAudience()==='test Audience');

        $this->expectException(TypeError::class);
        $evidence->setAudience(false);
    }
    
    
}
