@extends('layouts.main')

@section('content')
    <div style="height: 100vh" class="container d-flex align-items-center">
        <div class="mx-auto d-flex p-3 rounded w-50 align-items-center justify-content-center bg-white">
            <div class="w-75">
                <h2 class="text-center py-3">Login</h2>
                @if (session()->has('invalid'))
                <div class="alert alert-danger text-center">
                    {{session('invalid')}}
                </div>
                @endif
                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                   <x-input type="email" name="email" placeholder="example@gmail.com" label="Email"/>
                   @error('email')
                        <li class="text-danger">{{$message}}</li>
                   @enderror
                   <x-input type="password" name="password" placeholder="*****" label="Password"/>
                    @error('password')
                        <li class="text-danger">{{$message}}</li>
                    @enderror
                    <div class="d-flex justify-content-between">
                       <button type="submit" class="btn btn-info text-white mb-3">Login</button>
                        <a href="{{ route('register') }}" class="mt-2">don't have an account?</a>
                   </div>
                </form>
            </div>
        </div>
    </div>
@endsection