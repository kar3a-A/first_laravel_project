@include('layout_theme.partial_theme.html_header')


<body>
@include('layout_theme.partial_theme.preloader')

<div class="body_wrapper">
@include('layout_theme.partial_theme.header')
@include('layout_theme.partial_theme.warper')
@yield('content')

@include('layout_theme.partial_theme.footer')
</div>

@include('layout_theme.partial_theme.script')
</body>

</html>
