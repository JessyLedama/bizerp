@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                    <a href="{{ route('products.create') }}" class="dashboard font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('New') }}
                    </a>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if(count($companies) > 0)
                            @foreach($companies as $company)
                                <div>
                                    {{ $company->name}}
                                </div>
                            @endforeach
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
