@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
        @include('layouts.side-nav')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="nav-headings">
                        <a href="{{ route('users.index') }}" class="menu-item font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ __('Back To List') }}
                        </a>
                    </div>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form class="product-form" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf 

                            <!-- <label for="name"> First Name </label> <br /> -->
                            <input type="file" name="photo" id=""> <br />
                            <input class="text-input" type="text" name="firstName" placeholder="First Name">

                            <!-- <label for="name"> First Name </label> -->
                            <input class="text-input" type="text" name="lastName" placeholder="Last Name"><br />

                            <input class="text-input" type="text" name="identificationNumber" id="" placeholder="ID Number">

                            <input class="text-input" type="email" name="email" id="" placeholder="Email">

                            <input class="text-input" type="text" name="phone" id="" placeholder="Phone"> <br />

                            <select name="roleId" id="">
                                <option value="select"> Select a Role </option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}"> 
                                        {{ $role->name }} 
                                    </option>
                                @endforeach
                            </select>

                            <select name="typeId" id="">
                                <option value="select"> Select a Type </option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}"> 
                                        {{ $type->name }} 
                                    </option>
                                @endforeach
                            </select> <br />

                            <input class="text-input" type="text" name="kraPin" id="" placeholder="KRA Pin">

                            <input class="text-input" type="password" name="password" id="" placeholder="Password"> <br />

                            <input class="btn btn-primary create-btn" type="submit" value="Create Product">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
