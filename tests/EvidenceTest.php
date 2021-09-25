<?php

declare(strict_types=1);

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Assertions\Evidence;
use PHPUnit\Framework\TestCase;


class EvidenceTest extends TestCase
{
    function testReturnStringIFOnlyID(){

        $image = new Evidence();
        $image->setId('http://www.test.com/image.png');

        $this->assertEquals(\json_encode($image,JSON_UNESCAPED_SLASHES),'"http://www.test.com/image.png"');
    }
    
}
