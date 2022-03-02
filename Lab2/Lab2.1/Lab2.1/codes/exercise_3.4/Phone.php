<?php

class Phone extends TelecomDevice
{
    public string $make;

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @param string $make
     */
    public function setMake(string $make): void
    {
        $this->make = $make;
    }

    public function __toString() : string
    {
        return $this->make . " phones use frequency " . $this->getFrequency();
    }

}