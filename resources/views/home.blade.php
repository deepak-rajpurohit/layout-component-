{{-- <x-layout>
    <x-slot name="title">Home page</x-slot>
    <x-slot name="main">
        <div>
            <h1 id="heading" class="heading">Home page heading</h1>
            <h3>Sub heading for home page </h3>
            <p>Dummy paragraph for home page </p>
        </div>
    </x-slot>
</x-layout> --}}

@extends('layout'); {{-- template inheritance --}}
@section('title','home')

@section('main')

<form action="" method="get">
    <h1>Home page</h1>
    <p>Dummy paragraph</p>
</form>
@endsection