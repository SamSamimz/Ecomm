@extends('layouts.main')

@section('content')
    <div style="height: 100vh" class="container d-flex align-items-center">
        <div class="mx-auto d-flex p-3 rounded w-50 align-items-center justify-content-center bg-white">
            <div class="w-75">
                <h2 class="text-center py-3">Register for free</h2>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                   <x-input type="text" name="name" placeholder="Username" label="Name"/>
                   @error('name')
                       <li class="text-danger">{{ $message }}</li>
                   @enderror
                   <x-input type="email" name="email" placeholder="example@gmail.com" label="Email"/>
                    @error('email')
                       <li class="text-danger">{{ $message }}</li>
                   @enderror
                   <x-input type="password" name="password" placeholder="*******" label="Password"/>
                    @error('password')
                       <li class="text-danger">{{ $message }}</li>
                   @enderror
                   <x-input type="password" name="password_confirmation" placeholder="*******" label="Confirm_Password"/>
                   <div class="d-flex justify-content-between">
                       <button type="submit" class="btn btn-info text-white mb-3">Register</button>
                        <a href="{{ route('login') }}" class="mt-2">already have an account?</a>
                   </div>
                </form>
            </div>
        </div>
    </div>
@endsection