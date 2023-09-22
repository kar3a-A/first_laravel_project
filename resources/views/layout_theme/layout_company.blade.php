@include('layout_theme.partial_theme.html_company_header')

<body>
{{-- @include('layout_theme.partial_theme.preloader') --}}

<div class="body_wrapper">

@include('layout_theme.partial_theme.header')
@include('layout_theme.partial_theme.company_section')
@yield('content')
@include('layout_theme.partial_theme.company_footer')

</div>
@include('layout_theme.partial_theme.script')

</body>

</html>
