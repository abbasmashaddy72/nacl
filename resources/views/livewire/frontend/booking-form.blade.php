<div class="max-w-screen-md p-8 mx-auto bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <form wire:submit.prevent="submitForm">
        <h1 class="mb-8 text-4xl font-bold text-center text-white">Book Your Slot</h1>

        <div class="mb-8">
            <p class="mb-4 text-xl font-bold">Select Sport</p>
            <div class="flex flex-wrap gap-4">
                @foreach ($sports as $sport)
                    <label for="{{ $sport->id }}" class="cursor-pointer">
                        <div
                            class="py-2 px-4 rounded-full
                        {{ $selectedSport == $sport->id ? 'bg-indigo-500 text-white' : 'bg-white text-indigo-500' }}
                        dark:{{ $selectedSport == $sport->id ? 'bg-indigo-600 text-white' : 'bg-gray-700 text-white' }}
                        hover:bg-indigo-700 hover:text-white border border-indigo-500 transition duration-300">
                            <input type="radio" id="{{ $sport->id }}" name="selectedSport"
                                value="{{ $sport->id }}" wire:model.live='selectedSport' wire:click='updateLane'
                                class="hidden">
                            {{ $sport->name }}
                        </div>
                    </label>
                @endforeach
            </div>
        </div>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <div class="mb-8">
            <p class="mb-4 text-xl font-bold">Select Lanes</p>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                @forelse ($availableSlots as $availableSlot)
                    <input class="hidden" id="radio_{{ $availableSlot->id }}" type="radio" name="radio"
                        wire:model.live="selectedSlot" wire:click="generateSlots" value="{{ $availableSlot->id }}">
                    <label
                        class="p-4 rounded-md
                    {{ $selectedSlot == $availableSlot->id ? 'bg-indigo-500 text-white' : 'bg-white text-indigo-500' }}
                    dark:{{ $selectedSlot == $availableSlot->id ? 'bg-indigo-600 text-white' : 'bg-gray-700 text-white' }}
                    hover:bg-indigo-700 hover:text-white border border-indigo-500 transition duration-300 cursor-pointer"
                        for="radio_{{ $availableSlot->id }}">
                        <span class="text-sm font-semibold uppercase">{{ $availableSlot->name }}</span>
                        <span class="mt-2 text-lg font-bold">
                            ${{ $availableSlot->base_price }} / {{ $availableSlot->base_time }} min
                        </span>
                        <ul class="mt-2 text-sm">
                            <p class="mb-2 text-lg font-semibold">Lanes</p>
                            @foreach ($availableSlot->lanes as $lane)
                                <li>{{ $lane->name }}</li>
                            @endforeach
                        </ul>
                    </label>
                @empty
                    <div class="col-span-3 text-lg font-bold text-center">
                        @if (empty($selectedSport))
                            Please Select Sport
                        @else
                            No Lanes Availble
                        @endif
                    </div>
                @endforelse
            </div>
        </div>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <div class="grid grid-cols-2 gap-4 mb-8">
            <div>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                    Date</label>
                <input type="date" id="date" wire:model.live='selectedDate'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="numberOfPlayers" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Select No of Players</label>
                <input type="number" wire:model.live='numberOfPlayers' name="numberOfPlayers" id="numberOfPlayers"
                    wire:change='updatePrice'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
        </div>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <div class="mb-8">
            <p class="mb-4 text-xl font-bold">Select a Time</p>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-4 lg:grid-cols-5">
                @forelse ($timeSlots as $item)
                    <label for="{{ $item }}" class="relative block cursor-pointer group">
                        <input type="checkbox" id="{{ $item }}" value="{{ $item }}"
                            wire:model="selectedTimes.{{ $item }}" class="hidden">
                        <button type="button"
                            class="p-3 rounded-lg
                                {{ isset($selectedTimes[$item]) && $selectedTimes[$item] ? 'bg-indigo-500 text-white' : 'bg-white text-indigo-500' }}
                        dark:{{ isset($selectedTimes[$item]) && $selectedTimes[$item] ? 'bg-indigo-600 text-white' : 'bg-gray-700 text-white' }}
                        hover:bg-indigo-700 hover:text-white border border-indigo-500 transition duration-300"
                            wire:click="$toggle('selectedTimes.{{ $item }}')">
                            {{ $item }}
                        </button>
                    </label>
                @empty
                    <div class="col-span-3 text-lg font-bold text-center">
                        No Slots Availble
                    </div>
                @endforelse
            </div>
        </div>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <div class="mb-8">
            <p class="mb-2 text-xl font-bold">Current Price: <span class="ml-2">$ {{ $currentPrice ?? 0 }}</span></p>
        </div>

        <div id="card-element" class="h-8 my-4">
            <!-- A Stripe Element will be inserted here. -->
        </div>

        <button type="submit"
            class="w-full px-4 py-3 font-bold text-white transition duration-300 bg-indigo-500 rounded-lg hover:bg-indigo-700">Book
            Now</button>
    </form>
</div>

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
@endpush
