<?php

namespace JulienV\Openbadge;

abstract class AbstractOpenBadge implements \JsonSerializable
{
    public function jsonSerialize()
    {
        $array = get_object_vars($this);
        $array = ['@context'=> "https://w3id.org/openbadges/v2"] + $array;
        return $array ;
    }
}
