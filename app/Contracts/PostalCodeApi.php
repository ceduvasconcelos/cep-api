<?php

namespace App\Contracts;

interface PostalCodeApi
{
    public function search(string $postalCode): array;
}
