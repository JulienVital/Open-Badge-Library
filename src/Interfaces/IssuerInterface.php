<?php

namespace JulienV\Openbadge\Interfaces;

interface IssuerInterface
{
    public function getId(): string;
    public function getType(): string;
    public function getName(): string;
    public function getUrl(): string;
    public function getEmail(): string;
}
