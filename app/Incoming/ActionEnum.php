<?php

namespace App\Incoming;

enum ActionEnum: string
{
    case CREATE_USER = 'create_user';
    case UPDATE_USER = 'update_user';

    case CREATE_USER_STORE = 'create_user_store';
    case DELETE_USER_STORE = 'delete_user_store';
}
