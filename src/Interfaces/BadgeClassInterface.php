<?php

namespace JulienV\Openbadge\Interfaces;

interface BadgeClassInterface
{
    public function getId();
    public function getType();
    public function getName();
    public function getDescription();
    public function getImage();
    public function getCriteria();
    public function getIssuer();
}
