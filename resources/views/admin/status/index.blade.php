@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
    @include('layouts.side-nav')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="data-container bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <a href="{{ route('products.create') }}" class="new-record dashboard font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('New') }}
                    </a>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if(count($statuses) > 0)
                            <table class="table">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col">Name</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($statuses as $status)
                                        <tr>
                                            <td> {{ $status->name }} </td>
                                    
                                            <td>
                                                <a href="{{ route('status.edit', $status->name) }}">
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
