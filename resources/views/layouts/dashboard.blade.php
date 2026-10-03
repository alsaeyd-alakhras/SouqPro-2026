{{-- head --}}
@include('layouts.partials.head', [
    // 'title' => env('APP_NAME'),
    'title' => config('app.name'),
])
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

    <ul>
        @section('list')
            <li>Home</li>
        @show
    </ul>
    {{-- content --}}
    @yield('content')
</main>
<!--end::App Main-->
{{-- footer --}}
@include('layouts.partials.footer')
