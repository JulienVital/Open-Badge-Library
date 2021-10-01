<?php

    /**
     * Function chunk
     * From leonbloy 13 января 2012
     * https://coderoad.ru/8842387/PHP-%D0%B4%D0%BE%D0%B1%D0%B0%D0%B2%D0%B8%D1%82%D1%8C-%D0%BA%D0%BE%D0%BC%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%B9-iTXt-%D0%BA-%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8E-PNG
     */

namespace JulienV\Openbadge\Baker;

use JulienV\Openbadge\Interfaces\AssertionInterface;

class BakerPng
{
    private $dataEncode;
    private $key = 'openbadges';
    private $targetPath;

    public function __construct(AssertionInterface $assertion)
    {
        $this->id=$assertion->getId();
        $this->freeBadge =$assertion->getbadge()->getImage();
        $this->dataEncode=json_encode($assertion);

    }

    public function makeBadge()
    {
        var_dump($this->targetPath);

        $chunk = $this->phpTextChunk();
        $png = file_get_contents($this->freeBadge);
        $png2 = $this->addPngChunk($chunk, $png);
        return $png2;
        //file_put_contents($this->targetPath, $png2);
    }

    private function phpTextChunk()
    {
        $chunktype = "tEXt";
        $chunkdata = $this->key . "\0" . $this->dataEncode;
        $crc = pack("N", crc32($chunktype . $chunkdata));
        $len = pack("N", strlen($chunkdata));
        return $len .  $chunktype  . $chunkdata . $crc;
    }

    private function addPngChunk($chunk, $png)
    {
        $len = strlen($png);
        return substr($png, 0, $len-12) . $chunk . substr($png, $len-12, 12);
    }

    /**
     * Set the value of targetPath
     */
    public function setTargetPath($targetPath): self
    {
        $this->targetPath = $targetPath;

        return $this;
    }

    /**
     * Get the value of targetPath
     */
    public function getTargetPath()
    {
        return $this->targetPath;
    }
}
