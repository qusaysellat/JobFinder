@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Welcome {{ Auth::user()->username }}
            </header>
            <div class="w-full p-6">
                <h1>See info of user {{ $user->username }}</h1>
                <br>
                @php
                    $contact = $user->contact;
                @endphp
                @include('contact.showItem')
                @foreach ($user->studyPrograms as $program )
                    @include('studyprogram.showItem')
                @endforeach
            </div>
        </section>
    </div>
</main>
@endsection
