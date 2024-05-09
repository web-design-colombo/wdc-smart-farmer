<x-shop-layout>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">

        <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
            Edite Your Appointment
        </div>
        <div class="flex items-center justify-center mt-4">
            <a href="{{url('seeallappoinment')}}" class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline">All Appointments</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                @if (session('freeTimeSlotMessage'))
                    <br>{{ session('freeTimeSlotMessage') }}
                @endif
            </div>
        @endif
        <form class="py-4 px-6" action="{{ url('update/' .$bookedSlots->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" name="name" placeholder="{{ Auth::user()->name }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" name="email" placeholder="{{ Auth::user()->email }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">Phone Number</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="phone" type="tel" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="date">Date</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="date" type="date" name="date" placeholder="Select a date" required>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    var dtToday = new Date();

                    var month = dtToday.getMonth() + 1;
                    var day = dtToday.getDate();
                    var year = dtToday.getFullYear();

                    if (month < 10)
                        month = '0' + month.toString();

                    if (day < 10)
                        day = '0' + day.toString();

                    var maxDate = year + '-' + month + '-' + day;
                    $('#date').attr('min', maxDate);
                });
            </script>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="time">Time</label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="time" name="time" required>
                    <option value="">Select a time</option>
                    <option value="10:00 AM to 10:30 AM">10:00 AM to 10:30 AM</option>
                    <option value="10:30 AM to 11:00 AM">10:30 AM to 11:00 AM</option>
                    <option value="11:00 AM to 11:30 AM">11:00 AM to 11:30 AM</option>
                    <option value="11:30 AM to 12:00 PM">11:30 AM to 12:00 PM</option>
                    <option value="12:00 PM to 12:30 PM">12:00 PM to 12:30 PM</option>
                    <option value="12:30 PM to 01:00 PM">12:30 PM to 01:00 PM</option>
                    <option value="01:00 PM to 01:30 PM">01:00 PM to 01:30 PM</option>
                    <option value="01:30 PM to 02:00 PM">01:30 PM to 02:00 PM</option>
                </select>

            </div>
            <script>
                const bookedSlots =
                    @json($bookedSlots); // This should be an array of booked slots with date and time from your controller
                const dateInput = document.getElementById('date');
                const timeSelect = document.getElementById('time');

                // Function to color booked time slots
                function colorBookedSlots(selectedDate) {
                    timeSelect.querySelectorAll('option').forEach(option => {
                        const slot = option.value;
                        const isBooked = bookedSlots.some(bookedSlot => bookedSlot.date === selectedDate && bookedSlot
                            .time === parseInt(slot));
                        if (isBooked) {
                            option.style.color = 'red'; // Change the color for booked slots
                        } else {
                            option.style.color = ''; // Reset color for available slots
                        }
                    });
                }

                dateInput.addEventListener('change', function() {
                    const selectedDate = this.value;
                    colorBookedSlots(selectedDate);
                });

                timeSelect.addEventListener('change', function() {
                    const selectedDate = dateInput.value;
                    const selectedSlot = this.value;

                    if (bookedSlots.some(slot => slot.date === selectedDate && slot.time === parseInt(selectedSlot))) {
                        alert('This time slot is already booked. Please choose a different time.');
                        this.value = ''; // Reset the selected value
                    }
                });

                // Initial color booked slots based on selected date
                colorBookedSlots(dateInput.value);
            </script>


            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="message">Message</label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="message" name="message" rows="4" placeholder="Enter any additional information" required></textarea>
            </div>
            <div class="flex items-center justify-center mb-4">
                <button
                    class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                    type="submit">Book Appointment</button>
            </div>
        </form>




    </div>

</x-shop-layout>
