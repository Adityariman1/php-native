<?php
class komputer
{
    protected function belikomputer()
    {
        return "Beli komputer baru";
    }
}

class laptop extends komputer
{
    protected function belilaptop()
    {
        return "Beli laptop baru";
    }
}

class chromebook extends laptop
{
    protected function belichromebook()
    {
        return "Beli chromebook baru";
    }

    public function belisemua()
    {
        $a = $this->belikomputer();
        $b = $this->belilaptop();
        $c = $this->belichromebook();
        return "$a <br> $b <br> $c";
    }
}

$gadget_baru = new chromebook();
echo $gadget_baru->belisemua();
