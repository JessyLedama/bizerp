@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="data-container bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <a href="{{ route('currency.create') }}" class="new-record dashboard font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('New') }}
                    </a>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if(isset($currencies))
                            <table class="table">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Sign</th>
                                    </tr>
                                </thead>

                                <?php
                                    $counter = 1;
                                ?>

                                <tbody>
                                    @foreach($currencies as $currency)
                                        <tr>
                                            @for($i = $counter; $i == count($currencies); $i++)
                                                <th scope="row">
                                                    {{ $counter }}
                                                </th>
                                            @endfor

                                            <td scope="row"> 
                                                {{ $currency->name }} 
                                            </td>

                                            <td scope="row"> 
                                                {{ $currency->sign}} 
                                            </td>

                                            <td scope="row">
                                                <a href="{{ route('currency.edit', $currency->slug) }}">
                                                    <span> Edit </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div>
                                No Currencies, create some!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
