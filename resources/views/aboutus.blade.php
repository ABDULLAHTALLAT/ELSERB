@extends('layouts.app')

@section('content')
    <div id="page-top"></div> {{-- عنصر وهمي للتحقق من موضع الصفحة --}}

    @include('layouts.navbar')

    @include('layouts.aboutus')
    @include('layouts.footer')
    @include('layouts.qutition_buttun')
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var navbar = document.querySelector(".nav-section");

        if (!navbar) {
            console.error("⚠️ عنصر النافبار غير موجود!");
            return;
        }

        function updateNavbar() {
            if (window.scrollY > 50) {
                navbar.classList.add("bg-black");
            } else {
                navbar.classList.remove("bg-black");
            }
        }

        window.addEventListener("scroll", updateNavbar);
        updateNavbar(); // تأكد من ضبط الحالة عند تحميل الصفحة
    });
</script>
@endsection
