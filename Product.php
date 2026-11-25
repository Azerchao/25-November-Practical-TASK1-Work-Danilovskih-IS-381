<?php
class Product
{
    public function __construct(
        private string $title,
        private float $price,
    ) {}

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getInfo(): string
    {
        return "{$this->title} — " . number_format($this->price, 2, '.', ' ') . ' руб.';
    }
}
