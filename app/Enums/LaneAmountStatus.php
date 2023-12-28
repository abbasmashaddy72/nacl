<?php

namespace App\Enums;

use App\Traits\HasEnumAccessors;

enum LaneAmountStatus: string
{
    use HasEnumAccessors;

    case Paid = 'paid';
    case PartialPaid = 'partialPaid';
    case Due = 'due';
    case Refund = 'refund';
    case PartialRefund = 'partialRefund';
}
