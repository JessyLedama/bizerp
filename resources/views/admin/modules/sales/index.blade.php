@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
        @include('layouts.side-nav')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> 

                    <a href="{{ route('sales.create') }}" class="dashboard font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('New') }}
                    </a>

                    

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if(count($sales) > 0)
                                <table class="table">
                                    <thead class="thead">
                                        <tr>
                                            <!-- <th scope="col">#</th> -->
                                            <th scope="col">Number</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Salesperson</th>
                                            <th scope="col">Order Total</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>

                                    <?php
                                        $counter = 1;
                                    ?>

                                    <tbody>
                                        @foreach($sales as $sale)
                                            <tr>
                                                <td> 
                                                    {{ $sale->number }} 
                                                </td>
                                                
                                                <td> 
                                                    {{ $sale->Customer->firstName }} 

                                                    {{ $sale->Customer->lastName }} 
                                                </td>
                                                
                                                <td> 
                                                    {{ $sale->Salesperson->firstName }} 


                                                    {{ $sale->Salesperson->lastName }}  
                                                </td>
                                                
                                                <td> 
                                                    {{ $sale->orderTotal }} 
                                                </td>
                                                
                                                <td> 
                                                    {{ $sale->status->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        @else
                            <div>
                                No Sales records, <a href="{{ route('sales.create') }}"> Create </a> new!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
