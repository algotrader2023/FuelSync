<?php

namespace App\Enum;

enum StockMovementType: string
{
    case IN = 'in';
    case OUT = 'out';
    case TRANSFER = 'transfer';
    case ADJUSTMENT = "adjustment";
}
