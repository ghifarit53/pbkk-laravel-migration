@extends('layout.main')

@section('container')
<div class="flex flex-col items-center">
    <h1 class="text-3xl font-bold mb-8">Register for a new account</h1>

    <form method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="mr-4">Username (2-15 characters)</label>
            @error('username')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="text" name="username" class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. carthecat" value="{{ old('username') }}">
        </div>

        <div class="mb-4">
            <label class="mr-4">Name (2-64 characters)</label>
            @error('fullname')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="text" name="fullname" class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. Car the Cat" value="{{ old('fullname') }}">
        </div>

        <div class="mb-4">
            <label class="mr-4">Email</label>
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="text" name="email" step=0.01 class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. cat@mail.com" value="{{ old('email') }}">
        </div>

        <div class="mb-4">
            <label class="mr-4">Profile picture (Max. 2MB)</label>
            @error('profile_img')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="file" name="profile_img" class="py-1 w-full">
        </div>

        <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded-md">
            Register
        </button>
    </form>
</div>
@endsection