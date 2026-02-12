<?php

namespace App\Enum;

enum VoucherStatus: string
{
    case DRAFT = 'draft';
    case SUBMITTED = 'submitted';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
    case USED = 'used';
}
