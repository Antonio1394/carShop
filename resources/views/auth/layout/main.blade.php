@include('templates.login.components.head')
<body>
<div id="element" class="introLoading"></div>

@include('templates.administrator.components.alertErrors')
@include('templates.administrator.components.alertSuccess')

@yield('content')

@include('templates.login.components.scripts')
</body>
</html>