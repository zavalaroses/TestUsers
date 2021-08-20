<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('super.store')}}" method="post">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name">
                    @error('name')
                        {{$message}}
                    @enderror
                    <label>Rol</label>
                    <input type="text" name="rol">
                    @error('rol')
                        {{$message}}
                    @enderror
                    <label>email</label>
                    <input type="email" name="email">
                    @error('email')
                        {{$message}}
                    @enderror
                    <label>password</label>
                    <input type="password" name="password">
                    @error('password')
                        {{$message}}
                    @enderror
                    <label>password-confirm</label>
                    <input type="password" name="password_confirmation">
                    <button type="submit">Create</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
