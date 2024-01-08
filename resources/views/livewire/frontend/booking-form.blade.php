<div class="max-w-screen-md p-8 mx-auto bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <form wire:submit.prevent="submitForm">
        <h1 class="mb-8 text-4xl font-bold text-center text-white">Book Your Slot</h1>

        <div class="mb-8">
            <p class="mb-4 text-xl font-bold">Select Sport</p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                @foreach ($sports as $sport)
                    <label for="{{ $sport->id }}" class="cursor-pointer">
                        <div
                            class="py-2 px-4 rounded-full
                        {{ $selectedSport == $sport->id ? 'bg-blue-500 text-white' : 'bg-white text-blue-500' }}
                        dark:{{ $selectedSport == $sport->id ? 'bg-blue-600 text-white' : 'bg-gray-700 text-white' }}
                        hover:bg-blue-700 hover:text-white border border-blue-500 transition duration-300">
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
                    {{ $selectedSlot == $availableSlot->id ? 'bg-blue-500 text-white' : 'bg-white text-blue-500' }}
                    dark:{{ $selectedSlot == $availableSlot->id ? 'bg-blue-600 text-white' : 'bg-gray-700 text-white' }}
                    hover:bg-blue-700 hover:text-white border border-blue-500 transition duration-300 cursor-pointer"
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
                @if ($slot)
                    @php
                        $minPlayers = $slot->min_players;
                        $maxPlayers = $slot->max_players;
                    @endphp
                @endif
                <label for="numberOfPlayers" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Select No of Players</label>
                <input type="number" wire:model.live='numberOfPlayers' name="numberOfPlayers" id="numberOfPlayers"
                    wire:change='updatePrice'
                    @if ($slot) min='{{ $minPlayers }}' max="{{ $maxPlayers }}" @endif
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                @if ($slot)
                    <span>Min. Players: {{ $minPlayers }} | Max. Players {{ $maxPlayers }}</span>
                @endif
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
                                {{ isset($selectedTimes[$item]) && $selectedTimes[$item] ? 'bg-blue-500 text-white' : 'bg-white text-blue-500' }}
                        dark:{{ isset($selectedTimes[$item]) && $selectedTimes[$item] ? 'bg-blue-600 text-white' : 'bg-gray-700 text-white' }}
                        hover:bg-blue-700 hover:text-white border border-blue-500 transition duration-300"
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

        @guest('customer')
            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Type of User</h3>
            <ul
                class="items-center w-full mb-8 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-license" type="radio" value="('customer')" name="typeOfUser"
                            wire:model.live='typeOfUser'
                            class="w-4 h-4 text-blue-600 bg-blue-600 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-license"
                            class="w-full py-3 text-sm font-medium text-gray-900 cursor-pointer ms-2 dark:text-gray-300">
                            Guest User
                        </label>
                    </div>
                </li>
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-passport" type="radio" value="login" name="typeOfUser"
                            wire:model.live='typeOfUser'
                            class="w-4 h-4 text-blue-600 bg-blue-600 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-passport"
                            class="w-full py-3 text-sm font-medium text-gray-900 cursor-pointer ms-2 dark:text-gray-300">
                            Login / Register
                        </label>
                    </div>
                </li>
            </ul>

            @if ($typeOfUser == 'guest')
                <div class="grid grid-cols-1 mb-8 md:grid-cols-2 md:gap-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Name:
                        </label>
                        <input type="text" id="name" wire:model='name'
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="contactNo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Contact No.:
                        </label>
                        <input type="number" id="contactNo" wire:model='contactNo'
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                </div>
            @endif
        @endguest

        <button type="submit"
            class="w-full px-4 py-3 font-bold text-white transition duration-300 bg-blue-500 rounded-lg hover:bg-blue-700">Book
            Now</button>
    </form>
</div>
