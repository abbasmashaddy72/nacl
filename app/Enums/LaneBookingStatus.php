<?php

namespace App\Enums;

use App\Traits\HasEnumAccessors;

enum LaneBookingStatus: string
{
    use HasEnumAccessors;

    case Open = 'open';
    case Booked = 'booked';
    case Closed = 'closed';
    case Canceled = 'canceled';
}
