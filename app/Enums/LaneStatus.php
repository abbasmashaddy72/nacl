<?php

namespace App\Enums;

use App\Traits\HasEnumAccessors;

enum LaneStatus: string
{
    use HasEnumAccessors;

    case Open = 'open';
    case Booked = 'booked';
    case Closed = 'closed';
    case Canceled = 'canceled';
}
