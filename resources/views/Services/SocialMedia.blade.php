<!-- في ملف home.blade.php -->
@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    @include('service.SocialMedia')
    @include('layouts.translat')
                @include('layouts.footer')
                @include('layouts.qutition_buttun')
    @include('layouts.gotoup')
@endsection
