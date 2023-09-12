@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="data-container bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <a href="{{ route('products.create') }}" class="new-record dashboard font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('New') }}
                    </a>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form action="{{ route('company.update') }}" method="post">
                            @csrf
                            <label for="Name"> Company Name </label>
                            <input type="text" name="name" id="" placeholder="Company Name" value="{{ $company->name }}">

                            <label for=""></label></br />

                            <input class="btn btn-default" type="submit" name="" id="" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
