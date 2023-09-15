@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
        @include('layouts.side-nav')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="nav-headings">
                        <a href="{{ route('sales.index') }}" class="menu-item font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Back To List') }}
                        </a>
                    </div>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form class="product-form" action="{{ route('status.store') }}" method="post">
                            @csrf 

                            <label for="name"> Customer Name </label> <br />
                            <select name="customerId" id="">
                                <option value=""> Select Customer </option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->firstName }} {{ $customer->lastName }}"> 
                                        {{ $customer->firstName }} 
                                        {{ $customer->lastName }} 
                                    </option>
                                @endforeach
                            </select>
                            <input class="text-input" type="text" name="name" placeholder="Status Name"><br />

                            <input class="btn btn-primary create-btn" type="submit" value="Create Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
