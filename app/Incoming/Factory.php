<?php

namespace App\Incoming;

class Factory
{
    public static function create(ActionEnum $action): ActionInterface
    {
        switch ($action) {
            case ActionEnum::CREATE_USER:
                return new CreateUser();
            default:
                throw new \Exception('Action not found');
        }
    }
}
