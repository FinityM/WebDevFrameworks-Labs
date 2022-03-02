<?php

class Phone
{
    public string $make;

    /**
     * @return String
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @param String $make
     */
    public function setMake(string $make): void
    {
        $this->make = $make;
    }

}