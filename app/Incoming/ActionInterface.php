<?php

namespace App\Incoming;

interface ActionInterface
{
    public function validate(array $data): bool;

    public function getErrors(): array;

    public function execute(array $data): bool;
}
