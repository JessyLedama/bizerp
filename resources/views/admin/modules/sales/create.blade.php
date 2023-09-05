@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="nav-headings">
                        <a href="#" class="menu-item font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Menu 1') }}
                        </a>

                        <a href="#" class="menu-item font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Menu 2') }}
                        </a>
                    </div>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form action="{{ route('sales.store') }}" method="post">
                            @csrf 

                            <label for="customer"> Customer </label> <br />

                            <select name="customerId" id="">
                                <option value="select"> 
                                    Choose a customer 
                                </option>
                                @foreach($customers as $customer)
                                    <option class="" type="text" name="customerId">
                                        {{ $customer->firstName }}  
                                        {{ $customer->lastName }}  
                                    </option> <br />
                                @endforeach
                            </select><br/>
                            

                            <label for="products"> Products </label><br />

                            <input class="button btn btn-primary" type="submit" value="Create Sale">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
