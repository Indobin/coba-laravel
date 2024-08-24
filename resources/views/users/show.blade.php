<x-app-layout title="Show User">
    <x-slot name="heading" >
        {{ $user->name }}
    </x-slot>
    <ul>
        <li>Email: {{ $user->email }}</li>
        <li>Created At: {{ $user->created_at }}</li>
    </ul>
    <form action="/users/{{ $user->id}}" method="POST">
        @method('delete')
        @csrf
        <x-button class="mt-5">
            Delete 
        </x-button>
    </form>
</x-app-layout>