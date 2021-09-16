<?php
class komputer
{
    protected $jenisProcessor = "Intel core I7";

    protected function tampilkanJenis()
    {
        return $this->jenisProcessor;
    }
}

class laptop extends komputer
{
    public function getprocessor()
    {
        return $this->tampilkanJenis();
    }
}

$laptop = new laptop();
echo $laptop->getprocessor();
