<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>



  <!-- Custom styles for this template -->
  @include('client.layouts.css')  <!-- Bootstrap core CSS -->


</head>

<body>

  <!-- Navigation -->
  @include('client.layouts.navbar')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        
        <h1 class="my-4">Tin Tức
          <small>Công Nghệ</small>
        </h1>

        <!-- Blog Post -->
        @yield('content')

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      @include('client.layouts.sidebar')

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('client.layouts.footer')

  <!-- Bootstrap core JavaScript -->
  @include('client.layouts.js')

</body>

</html>
