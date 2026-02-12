<?php

namespace App\Enum;

enum MaintenanceType: string
{
    case PREVENTIVE = 'preventive';
    case CORRECTIVE = "corrective";
}
