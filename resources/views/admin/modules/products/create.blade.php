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
                        <form class="product-form" action="{{ route('products.store') }}" method="post">
                            @csrf 

                            <label for="customer"> Product Image </label> <br />
                            <input type="file" name="photo" placeholder="Product Name"><br />

                            <label for="customer"> Product Name </label> <br />
                            <input type="text" name="name" placeholder="Product Name"><br />

                            <input type="checkbox" name="buyable" value="Can be bought">
                            <label for="buyable"> Can Be Bought </label></br />

                            <input type="checkbox" name="sellable" value="Can be sold">
                            <label for="buyable"> Can Be Sold </label></br />

                            <label for="customer"> Product Type </label> <br />
                            <select name="typeId" id="">
                                <option value="select"> Select Product Type </option>
                                @foreach($productTypes as $type)
                                <option value="{{ $type->name }}"> 
                                    {{ $type->name }} 
                                </option>
                                @endforeach
                            </select><br />

                            <label for="vendor"> Vendor </label> <br />
                            <select name="typeId" id="">
                                <option value="select"> Select Vendor </option>
                                @foreach($vendors as $vendor)
                                <option value="{{ $type->name }}"> 
                                    {{ $vendor->name }} 
                                </option>
                                @endforeach
                            </select><br />

                            <label for="price"> Price </label><br />
                            <input type="text" name="price" placeholder="Price"><br />

                            <label for="Description"> Description </label><br />
                            <input type="text" name="description" placeholder="Description"><br />

                            <input class="button btn btn-primary" type="submit" value="Create Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
