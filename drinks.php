<?php

class Drinks
{

    public string $name;
    public float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function formatPrice()
    {
        return "E" . number_format($this->price,2);

    }

}