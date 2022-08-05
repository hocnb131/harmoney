
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Harmoney') }}</title> -->


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        

        <main class="py-4">
        <div class="content-wrapper" style="min-height: 2838.8px;">
   

   <!-- Main content -->
   <section class="content">
     <div class="error-page">
       <h2 class="headline text-warning"> 404</h2>

       <div class="error-content">
         <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
         <h3><i class="fas fa-exclamation-triangle text-warning"></i> What are you looking for?</h3>
         <h3><i class="fas fa-exclamation-triangle text-warning"></i> You are stupid. Ha Ha Ha!</h3>
         <h3><i class="fas fa-exclamation-triangle text-warning"></i> Please check again!.</h3>

         <p>
           We could not find the page you were looking for.
           Meanwhile, you may <a href="{{ route('home') }}">return to Home</a> or try using the search form.
         </p>

         
       </div>
       <!-- /.error-content -->
     </div>
     <!-- /.error-page -->
   </section>
   <!-- /.content -->
 </div>
        </main>
    </div>
</body>
</html>
