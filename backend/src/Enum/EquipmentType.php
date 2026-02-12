<?php

namespace App\Enum;

enum EquipmentType: string
{
    case PUMP = 'pump';
    case GENERATOR = 'generator';
    case VALVE = "valve";
    case GAUGE = "gauge";
}
