<!-- في ملف home.blade.php -->
@extends('layouts.app')

@section('content')
@include('layouts.navbar')
             @include("slider")
             @include('layouts.our_services')
            @include('layouts.video')
            @include('layouts.about')
            {{-- @include('layouts.client') --}}
            @include('layouts.footer')
            @include('layouts.qutition_buttun')

@endsection
