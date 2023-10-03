@extends('layout.main')

@section('container')
<div class="flex flex-col items-center">
    <h1 class="text-3xl font-bold mb-8">Register for a new account</h1>

    <form method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="mr-4">Name</label>
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="text" name="name" class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. Ghifari" value="{{ old('name') }}">
        </div>

        <div class="mb-4">
            <label class="mr-4">Age</label>
            @error('age')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="number" name="age" step=1 class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. 20" value="{{ old('age') }}">
        </div>
        
        <div class="mb-4">
            <label class="mr-4">Occupation</label>
            @error('occupation')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <select name="occupation" class="px-2 py-1 bg-gray-100 rounded-md w-full" value="{{ old('occupation') }}">
                <option value="Student">Student</option>
                <option value="Entrepreneur">Entrepreneur</option>
                <option value="Civil Servant">Civil Servant</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Private Employee">Private Employee</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="mr-4">Weight (kg)</label>
            @error('weight')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="number" name="weight" step=0.01 class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. 65.5" value="{{ old('weight') }}">
        </div>

        <div class="mb-4">
            <label class="mr-4">Email</label>
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="text" name="email" step=0.01 class="px-2 py-1 bg-gray-100 rounded-md w-full" placeholder="e.g. ghifari@mail.com" value="{{ old('email') }}">
        </div>

        <div class="mb-4">
            <label class="mr-4">Profile picture (Max. 2MB)</label>
            @error('profile_img')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <input type="file" name="profile_img" class="py-1 w-full">
        </div>

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md">
            Register
        </button>
    </form>
</div>
@endsection