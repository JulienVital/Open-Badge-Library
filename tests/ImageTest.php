<?php

declare(strict_types=1);

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Utils\Image;
use PHPUnit\Framework\TestCase;
use TypeError;

class ImageTest extends TestCase
{
    public function testReturnStringIFOnlyID()
    {
        $image = new Image();
        $image->setId('http://www.test.com/image.png');

        $this->assertEquals(\json_encode($image, JSON_UNESCAPED_SLASHES), '"http://www.test.com/image.png"');
    }

    public function testJsonserialize()
    {
        $image = new Image();
        $image->setId('http://www.test.com/image.png');
        $image->setAuthor('Name of Author');

        $this->assertEquals(
            \json_encode($image, JSON_UNESCAPED_SLASHES),
            '{"@context":"https://w3id.org/openbadges/v2","id":"http://www.test.com/image.png","author":"Name of Author"}'
        );
    }

    public function testCaption()
    {
        $image = new Image();
        $image->setCaption('test Caption');

        $this->assertTrue($image->getCaption()==='test Caption');

        $this->expectException(TypeError::class);
        $image->setCaption(false);
    }
    
    public function testAuthor()
    {
        $image = new Image();
        $image->setAuthor('test Author');

        $this->assertTrue($image->getAuthor()==='test Author');

        $this->expectException(TypeError::class);
        $image->setAuthor(false);
    }
}
