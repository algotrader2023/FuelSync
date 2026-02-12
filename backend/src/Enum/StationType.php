<?php

namespace App\Enum;

enum StationType: string
{
    case TANK_STATION = 'tank_station';
    case BOWSER = "bowser";
    case BULK_FARM = "bulk_farm";
    case SMELTER = "smelter";
}
