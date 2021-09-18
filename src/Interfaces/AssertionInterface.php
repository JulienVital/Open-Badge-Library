<?php

namespace JulienV\Openbadge\Interfaces;

interface AssertionInterface 
{
    public function getId();
    public function getIssuedOn();
    public function getType();
    public function getRecipient();
    public function getBadge();
    public function getVerification();

}
