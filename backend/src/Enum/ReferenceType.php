<?php

namespace App\Enum;

enum ReferenceType: string
{
    case DISPATCH = 'dispatch';
    case VOUCHER = 'voucher';
    case TRANSFER = 'transfer';
    case MANUAL = 'manual';
}
