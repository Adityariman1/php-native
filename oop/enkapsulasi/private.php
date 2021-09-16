<?php
class komputer
{
    private $jenisProcessor = "Intel core I7";

    public function tampilkanJenis()
    {
        return $this->jenisProcessor;
    }
}

class laptop extends komputer
{
    public function getprocessor()
    {
        return $this->jenisProcessor();
    }
}

$komputer = new komputer();
$laptop = new laptop();

echo $komputer->tampilkanJenis();
echo $laptop->getprocessor();
