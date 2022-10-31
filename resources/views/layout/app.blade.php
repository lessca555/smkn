<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('parts/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <!-- CSS Libraries -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('parts/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('parts/css/wizard.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('partial.navbar')
      @include('partial.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <main class="pt-3 mt-5">
                @yield('content')
            </main>
        </section>
      </div>
    </div>
  </div>



    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    {{-- js --}}
    <script src="{{ url('parts/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{{ url('parts/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('parts/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('parts/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ url('parts/js/script.js') }}"></script>
</body>
</html>
