@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
        @include('layouts.side-nav')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> 

                    <a href="{{ route('users.create') }}" class="dashboard font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('New') }}
                    </a>

                    

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if(isset($users))
                                <table class="table">
                                    <thead class="thead">
                                        <tr>
                                            <!-- <th scope="col">#</th> -->
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">User Type</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>

                                    <?php
                                        $counter = 1;
                                    ?>

                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td> 
                                                    {{ $user->firstName }} 
                                                    {{ $user->lastName }} 
                                                </td>
                                                
                                                <td> 
                                                    {{ $user->phone }} 
                                                </td>
                                                
                                                <td> 
                                                    {{ $user->email }} 
                                                </td>
                                                
                                                <td> 
                                                    {{ $user->orderTotal }} 
                                                </td>
                                                
                                                <td> 
                                                    {{ $user->Status->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        @else
                            <div>
                                No Users, <a href="{{ route('users.create') }}"> Create </a> new!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
