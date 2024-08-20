<x-app-layout title="{{ $page_meta['title'] }}">
    <x-slot name="heading">
        {{ $page_meta['title'] }}
    </x-slot>
       {{-- @dump($errors); --}}
        <form action="{{ $page_meta['url'] }}" method="POST" class="space-y-6">
            {{-- {{ csrf_token() }} --}}
           @method($page_meta['method'])
            @csrf
            <div>
                <label for="name">Name</label>
                <input value="{{ old('name', $user->name) }}" class="border px-4 py-2 rounded block mt-1" type="text" name="name" id="name">
                @error('name')
                    <p class="text-red-500 mt-1 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input value="{{ old('email', $user->email) }}" class="border px-4 py-2 rounded block mt-1" type="email" name="email" id="email">
                @error('email')
                    <p class="text-red-500 mt-1 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input class="border px-4 py-2 rounded block mt-1" type="password" name="password" id="password">
                @error('password')
                    <p class="text-red-500 mt-1 text-sm">{{$message}}</p>
                @enderror
            </div>
            <x-button>
                {{$page_meta['submit_text']}}
            </x-button>
        </form>
    
</x-app-layout>