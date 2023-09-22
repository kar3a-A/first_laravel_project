@include('layout_theme.admin_theme.html_admin_header')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

@include('layout_theme.partial_theme.preloader')

<div class="wrapper">

@include('layout_theme.admin_theme.header')
@include('layout_theme.admin_theme.content')
@yield('content')

@include('layout_theme.admin_theme.footer')

</div>

@include('layout_theme.admin_theme.script')

</body>
</html>
