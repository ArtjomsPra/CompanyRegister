<?php declare(strict_types=1);

namespace App;

class CompanyInfo {
    private string $name;
    private string $type;
    private string $typeText;
    private string $address;
    private int $regcode;

    public function __construct (string $name, string $type, string $typeText, string $address, int $regcode) {
        $this->name = $name;
        $this->type = $type;
        $this->typeText = $typeText;
        $this->address = $address;
        $this->regcode = $regcode;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTypeText(): string
    {
        return $this->typeText;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getRegcode(): int
    {
        return $this->regcode;
    }
};