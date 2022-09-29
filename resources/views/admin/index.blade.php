<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h1>Hello Griffins</h1>
                  <p>Welcome Back</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
<!-- @extends('admin.layouts.admin-dash')
@section('title','Dashboard')

@section('content')

<h1>hello world</h1>

@endsection -->