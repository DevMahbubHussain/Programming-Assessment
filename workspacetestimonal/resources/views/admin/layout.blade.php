@include('admin.includes.header')
<body>
<div id="app">
    <div class="main-wrapper">
  @include('admin.includes.navbar')
@include('admin.includes.sidebar')
        <div class="main-content">
           @yield('content')
        </div>
    </div>
</div>
@include('admin.includes.footer')
@include('admin.includes.toster-message')


