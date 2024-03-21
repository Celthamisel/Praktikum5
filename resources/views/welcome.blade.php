@extends('layouts.app')
 
@section('title', 'Halaman 1')
 
@section('content')
  <h1 class="text-3xl font-bold text-blue-500">
    👇👇👇
  </h1>

<br>

<a href="{{url('/halaman2')}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
 Tekan Bro
</a>
@endsection