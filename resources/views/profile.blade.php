@extends('layout.main')

@section('container')
<div class="flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold mb-8">&#64;{{ $user->username }}'s Profile</h1>

    <img src="{{ $user->profile_img }}" alt="Profile" class="object-scale-down h-48 w-48 rounded-full mb-8">

    <ul>
        <li><b>Name:</b> {{ $user->fullname }}</li>
        <li><b>Email:</b> {{ $user->email }}</li>
    </ul>
</div>
@endsection