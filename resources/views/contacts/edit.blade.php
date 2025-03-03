@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Edit Contact</h1>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block text-gray-700 font-medium">Name</label>
                <input type="text" name="name" value="{{ $contact->name }}" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Phone</label>
                <input type="text" name="phone" value="{{ $contact->phone }}" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Address</label>
                <textarea name="address" required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400">{{ $contact->address }}</textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded-lg font-medium hover:bg-blue-600 transition duration-200">
                Update
            </button>
        </form>
    </div>
@endsection
