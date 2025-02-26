<!-- في ملف home.blade.php -->
@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    @include('layouts.translat')
    @include('service.WebSolutions')
                @include('layouts.footer')
                @include('layouts.qutition_buttun')
    @include('layouts.gotoup')
@endsection
