<?php

namespace App\Enum;

enum WinnerType: string
{
    case USER = 'user';
    case AI = 'ai';
    case DRAW = 'draw';
}

