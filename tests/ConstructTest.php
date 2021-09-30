<?php

declare(strict_types=1);

namespace JulienV\OpenIssuer\Tests;

use JulienV\Openbadge\Assertions\AssertionModel;
use JulienV\Openbadge\BadgeClasses\BadgeModel;
use JulienV\Openbadge\Baker\Baker;
use JulienV\Openbadge\Baker\BakerPng;
use PHPUnit\Framework\TestCase;

class ConstructorBakerTest extends TestCase
{
    public function testInstanceOfBakerPng()
    {
        $badge = new BadgeModel();
        $badge->setImage('tests/badgeExample.png');
        $assertion = new AssertionModel();
        $assertion->setBadge($badge)
            ->setId('Test');
        $baker = Baker::getBaker($assertion);

        $this->assertInstanceOf(BakerPng::class, $baker);
    }
}
