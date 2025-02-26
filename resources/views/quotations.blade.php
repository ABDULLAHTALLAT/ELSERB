@extends('layouts.app')

@section('content')
        @include('layouts.NAV')

    @include('layouts.translat')

        @include('layouts.qut')

        <div class="mb-5"></div> {{-- مسافة بين الأقسام --}}

        @include('layouts.footer')

        <div class="mb-5"></div> {{-- مسافة بين الأقسام --}}

                @include('layouts.gotoup')

@endsection
