<?php

declare(strict_types=1);

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Utils\Image;
use PHPUnit\Framework\TestCase;


class ImageTest extends TestCase
{
    function testReturnStringIFOnlyID(){

        $image = new Image();
        $image->setId('http://www.test.com/image.png');

        $this->assertEquals(\json_encode($image,JSON_UNESCAPED_SLASHES),'"http://www.test.com/image.png"');
    }
    
}
