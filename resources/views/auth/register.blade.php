@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="src-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="input your name"
                        class="bg-gray-200 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="src-only">User Name</label>
                    <input type="text" name="username" id="username" placeholder="input your user name"
                        class="bg-gray-200 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}">
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="src-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="input your name"
                        class="bg-gray-200 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="src-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="input your name"
                        class="bg-gray-200 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                        value="{{ old('password') }}">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="src-only">Password Confirm</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="repeat your password"
                        class="bg-gray-200 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                        value="">
                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                        class="bg bg-blue-500 text-white px-4  py-3 rounded font-mediun w-full">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
@endsection
