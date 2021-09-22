<?php

namespace JulienV\Openbadge\Interfaces;

use JulienV\Openbadge\Criteria;
use JulienV\Openbadge\Profiles\IssuerModel;

interface BadgeClassInterface
{
    public function getId(): string;
    public function getType(): string;
    public function getName(): string;
    public function getDescription(): string;
    public function getImage(): string;
    /** @return Criteria $criteria */
    public function getCriteria(): Criteria;
    public function getIssuer(): IssuerInterface;
}
