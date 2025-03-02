@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Contact List</h1>
    <a href="{{ route('contacts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4 inline-block">Add Contact</a>

    <table class="w-full border-collapse border border-gray-300 mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Name</th>
                <th class="border border-gray-300 px-4 py-2">Phone Number</th>
                <th class="border border-gray-300 px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $contact->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $contact->phone_number }}</td>
                    <td class="border border-gray-300 px-4 py-2 flex gap-2">
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
