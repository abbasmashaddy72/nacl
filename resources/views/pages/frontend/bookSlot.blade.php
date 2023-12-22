<x-guest-layout>
    @include('layouts.fePartials.inner-top-section')
    <div class="container p-6 mx-auto">
        <div class="max-w-screen-md mx-auto">
            <h1 class="mb-6 text-3xl font-bold">Book an Appointment</h1>

            <!-- Service Selection -->
            <div class="mb-8">
                <p class="mb-2 text-xl font-bold">Select a service</p>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="p-4 border rounded-lg cursor-pointer hover:bg-gray-100">
                        <input type="radio" id="service1" name="service" value="service1">
                        <label for="service1" class="block font-medium">Financial Planning</label>
                    </div>
                    <div class="p-4 border rounded-lg cursor-pointer hover:bg-gray-100">
                        <input type="radio" id="service2" name="service" value="service2">
                        <label for="service2" class="block font-medium">Retirement Planning</label>
                    </div>
                    <div class="p-4 border rounded-lg cursor-pointer hover:bg-gray-100">
                        <input type="radio" id="service3" name="service" value="service3">
                        <label for="service3" class="block font-medium">Investment Advice</label>
                    </div>
                </div>
            </div>

            <!-- Date Selection -->
            <div class="mb-8">
                <p class="mb-2 text-xl font-bold">Select a date</p>
                <input type="text" id="datepicker" class="w-full p-3 border rounded-lg" placeholder="Select date">
            </div>

            <!-- Time Slot Selection -->
            <div class="mb-8">
                <p class="mb-2 text-xl font-bold">Select a time</p>
                <div class="grid grid-cols-2 gap-4">
                    <button class="p-3 border rounded-lg cursor-pointer hover:bg-gray-100">09:00 AM</button>
                    <button class="p-3 border rounded-lg cursor-pointer hover:bg-gray-100">11:00 AM</button>
                    <button class="p-3 border rounded-lg cursor-pointer hover:bg-gray-100">01:00 PM</button>
                    <button class="p-3 border rounded-lg cursor-pointer hover:bg-gray-100">03:00 PM</button>
                </div>
            </div>

            <!-- Book Now Button -->
            <button class="w-full px-4 py-3 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700">Book
                Now</button>
        </div>
    </div>
</x-guest-layout>
