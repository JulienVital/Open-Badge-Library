<?php

namespace JulienV\Openbadge\Interfaces;

use DateTime;
use JulienV\Openbadge\Profiles\IdentityObject;

interface AssertionInterface
{
    public function getId(): string;
    public function getIssuedOn(): DateTime;
    public function getType(): string;

    public function getRecipient(): IdentityObject;

    public function getBadge(): BadgeClassInterface;

    /** @return array<mixed>*/
    public function getVerification(): array;
}
