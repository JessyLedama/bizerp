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
                        @if(count($companies) > 0)
                            <table class="table">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Website</th>
                                        <th scope="col">Country</th>
                                    </tr>
                                </thead>

                                <?php
                                    $counter = 1;
                                ?>

                                <tbody>
                                    @foreach($companies as $company)
                                    <tr>
                                        @for($i = $counter; $i == count($companies); $i++)
                                            <th scope="row">{{ $i }}</th>
                                        @endfor

                                        <td> {{ $company->name }} </td>
                                        <td> {{ $company->cityId }} </td>
                                        <td> {{ $company->phone }} </td>
                                        <td> {{ $company->email }} </td>
                                        <td> {{ $company->website }} </td>
                                        <td> {{ $company->countryId }} </td>

                                        <td>
                                            <a href="{{ route('company.edit', $company->slug) }}">
                                                <span> Edit </span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div>
                                No Companies, create some!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
