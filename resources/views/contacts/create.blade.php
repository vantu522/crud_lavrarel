@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Add Contact</h1>

        <form action="{{ route('contacts.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-medium">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter name" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="phone" class="block text-gray-700 font-medium">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Enter phone number" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="address" class="block text-gray-700 font-medium">Address</label>
                <textarea id="address" name="address" rows="3" placeholder="Enter address" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg font-medium hover:bg-blue-600 transition duration-200">
                Save
            </button>
        </form>
    </div>
@endsection
