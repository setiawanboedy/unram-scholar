@extends('frontend.layouts.app', [
    'title'=>'Unram Scholar',
    'bgWhite'=>'bg-[#E9F1FB]',
    ])
@section('content')
<!-- Centered Search Section -->
    @livewire('frontend.search', ['query'=>$query])

    <section class="container mx-auto bg-white rounded-xl py-8 px-4 mt-10">
        @livewire('frontend.search-result', ['query'=>$query])
    </section>
@endsection