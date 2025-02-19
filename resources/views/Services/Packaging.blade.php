<!-- في ملف home.blade.php -->
@extends('layouts.app')

@section('content')
@include('layouts.navbar')
@include('service.Packaging')
            @include('layouts.footer')
            @include('layouts.qutition_buttun')

@endsection
