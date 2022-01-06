</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>

<link rel="stylesheet" href="{{ asset('admin/css/shared/style.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/demo_1/style.css') }}">
</head>
<body>
  <div class="container-scroller">
    <!-- begin header -->
    @include('admin.inc.header')
    <!-- end header -->
    <div class="container-fluid page-body-wrapper">
      <!-- begin sidebar -->
      @include('admin.inc.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
               @yield('content')
            </div>
          </div>
        </div>
        @include('admin.inc.footer')
      </div>
    </div>
  </div>

  </body>
</html>
