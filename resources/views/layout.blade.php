
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Traveltodo</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/css/main.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- Custom styles for this template -->
    
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        
      
      <a class="navbar-brand" href="#"><img style="height:50px" src="https://www.traveltodo.com/wp-content/themes/traveltodo/images/traveltodo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('all-categories')}}">Liste des catégories</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{route('add-category')}}">Ajouter une catégorie</a>
          </li>
         
         
        </ul>
       
      </div>
      </div>
    </nav>

    <main role="main">
<div class="container">
  
      @yield('container')
</div>
    

    </main>

    <!--<footer class="container">
      <p>Crawler Zied bouhejba Traveltodo</p>
    </footer>-->

  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  ></script>
    <script src="{{asset('/')}}/js/popper.min.js"></script>
    <script src="{{asset('/')}}/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        if($('table').length>0){
          
        $('table').DataTable();
        }
    } );
    </script>
  </body>
</html>
