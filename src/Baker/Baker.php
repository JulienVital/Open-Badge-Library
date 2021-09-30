<?php 

namespace JulienV\Openbadge\Baker;

use JulienV\Openbadge\Interfaces\AssertionInterface;

Class Baker{

    static public function getBaker(AssertionInterface $assertion){
        $freeBadge =$assertion->getBadge()->getImage();

        if (mime_content_type($freeBadge)){
            return new BakerPng($assertion);
        };

        return new BakerSvg($assertion);
    } 

}