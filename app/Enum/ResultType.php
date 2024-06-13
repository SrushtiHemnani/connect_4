<?php

namespace App\Enum;

enum ResultType: string
{
    case WIN = 'win';
    case LOSE = 'lose';
    case DRAW = 'draw';
}
