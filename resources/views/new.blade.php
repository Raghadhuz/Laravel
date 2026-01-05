@extends('layout.master')

@section('title','title page')

@section('css')
    {{-- Page-specific CSS (if needed) --}}
@endsection

@section()
    <div class="all-content-wrapper">
        @yield('content')
    </div>
@endsection

@section('script')
    {{-- Page-specific JavaScript (if needed) --}}
@endsection
