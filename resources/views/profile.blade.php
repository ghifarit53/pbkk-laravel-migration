@extends('layout.main')

@section('container')
<div class="flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold mb-8">Profile</h1>

    <img src="{{ $user->profile_img }}" alt="Profile" class="object-scale-down h-48 w-96 rounded-md">

    <ul>
        <li><b>Name:</b> {{ $user->name }}</li>
        <li><b>Age:</b> {{ $user->age }}</li>
        <li><b>Occupation:</b> {{ $user->occupation }}</li>
        <li><b>Weight:</b> {{ $user->weight }} kg</li>
        <li><b>Email:</b> {{ $user->email }}</li>
    </ul>
</div>
@endsection