<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dispar Video</title>
  @include('layouts.backend.style')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('layouts.backend.navbar')
      @include('layouts.backend.sidebar')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('content')
        </section>
        @include('layouts.backend.setting')
      </div>
        @include('layouts.backend.footer')
      
    </div>
  </div>
  <!-- General JS Scripts -->
  @include('layouts.backend.script')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>