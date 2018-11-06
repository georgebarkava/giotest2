@include('partials._head')

  <body>

    <!-- Navigation -->
    @include('partials._navigation')



    <!-- Page Header -->
    @include('partials._header')


    <div class="container">

    @include('partials._messages')

    </div>

    <!-- Main Content -->
    <div class="container">
      
    @yield('content')

    </div>

    <hr>

    <!-- Footer -->
    @include('partials._footer')


    <!-- all javascript -->
    <!-- Bootstrap core JavaScript -->
    <!-- Custom scripts for this template -->
    @include('partials._scripts')


  </body>

</html>
