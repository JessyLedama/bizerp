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
                    @if(isset($users))
                    <ul class="nav nav-pills mb-3 justify-content-end" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-list-tab" data-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="true">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-grid-tab" data-toggle="pill" href="#pills-grid" role="tab" aria-controls="pills-grid" aria-selected="false">Grid</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- LIST VIEW -->
                        <div class="tab-pane fade show active" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
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
                        </div>

                        <!-- GRID VIEW -->
                        <div class="tab-pane fade" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
                            Grid
                        </div>

                        <!-- GRAPH VIEW -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            GRAPH
                        </div>
                    </div>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
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
