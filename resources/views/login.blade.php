{{-- <x-layout>
    <x-slot name="title">Login page</x-slot>
    <x-slot name="main">
        <h1 id="heading" class="heading">Login page</h1>
        <br><br>
       
            <input type="text" name="name" placeholder="Enter name"/>
            <br><br>
            <input type="password" name="password" placeholder="Enter password">
            <br><br>
            <button onclick="changeColor()">Login</button>
        
    </x-slot>
</x-layout> --}}

@extends('layout'); {{-- template inheritance --}}
@section('title','login')

@section('main')

<form action="" method="get">
    <input type="text" name="name" placeholder="Enter name">
    <br><br>
    <input type="password" name="password" placeholder="enter password">
    <br><br>
    <button>login</button>
</form>
@endsection