<x-app-layout title="Show User">
    <x-slot name="heading" >
        Show User
    </x-slot>
    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>Created At: {{ $user->created_at }}</li>
    </ul>
</x-app-layout>