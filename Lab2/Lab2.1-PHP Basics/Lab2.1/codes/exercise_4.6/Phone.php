<?php

class Phone
{
    private string $make;

    /**
     * @param string $make
     */
    public function __construct(string $make)
    {
        $this->make = $make;
    }

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
        return $this->make . " is a popular make of phone";
    }
}
