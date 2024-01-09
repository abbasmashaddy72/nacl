<?php

namespace App\Enums;

use App\Traits\HasEnumAccessors;

enum LaneAmountStatus: string
{
    use HasEnumAccessors;

    case Paid = 'paid';
    case PartialPaid = 'partialPaid';
    case UnPaid = 'unPaid';
    case Refund = 'refund';
    case PartialRefund = 'partialRefund';
}
