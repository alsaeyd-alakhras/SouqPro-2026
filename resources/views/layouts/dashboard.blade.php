{{-- head --}}
@include('layouts.partials.head')
<!--begin::Header-->
{{-- nav --}}
@include('layouts.partials.nav')

<!--end::Header-->
<!--begin::Sidebar-->
{{-- aside --}}
@include('layouts.partials.aside')

<!--end::Sidebar-->
<!--begin::App Main-->
<main class="app-main">
    {{-- content --}}
    @yield('content')
</main>
<!--end::App Main-->
{{-- footer --}}
@include('layouts.partials.footer')

