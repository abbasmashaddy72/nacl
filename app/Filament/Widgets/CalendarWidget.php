<?php

namespace App\Filament\Widgets;

use App\Models\LaneBooking;
use App\Filament\Resources\LaneBookingResource;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    /**
     * FullCalendar will call this function whenever it needs new event data.
     * This is triggered when the user clicks prev/next or switches views on the calendar.
     */
    public function fetchEvents(array $fetchInfo): array
    {
        // You can use $fetchInfo to filter events by date.
        // This method should return an array of event-like objects. See: https://github.com/saade/filament-fullcalendar/blob/3.x/#returning-events
        // You can also return an array of EventData objects. See: https://github.com/saade/filament-fullcalendar/blob/3.x/#the-eventdata-class
        return LaneBooking::query()
            ->where('start_date_time', '>=', $fetchInfo['start'])
            ->where('end_date_time', '<=', $fetchInfo['end'])
            ->get()
            ->map(
                fn (LaneBooking $laneBooking) => [
                    'title' => $laneBooking->name,
                    'start' => $laneBooking->start_date_time,
                    'end' => $laneBooking->end_date_time,
                    'url' => LaneBookingResource::getUrl(name: 'edit', parameters: ['record' => $laneBooking]),
                    'shouldOpenUrlInNewTab' => true
                ]
            )
            ->all();
    }
}
