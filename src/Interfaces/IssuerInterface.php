<?php

namespace JulienV\Openbadge\Interfaces;

interface IssuerInterface
{
    public function getId();
    public function getType();
    public function getName();
    public function getUrl();
    public function getEmail();
}
