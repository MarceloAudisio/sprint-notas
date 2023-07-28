<?php
        require "protect.php";
        require "conexion.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <title>Mis Notas</title>
  </head>
  <body>
<div class="container"> <!-- principio de container -->
  <div class="row"> <!-- principio row 1 -->  
    <div class="col">
      <br>
      <h3>MIS NOTAS</h3>
      <form method="post" action="agregar.php">
        
        <div class="form-row">
          <div class="form-group col-md-10">
              <label class="sr-only" for="nota">Nota</label>
              <input type="text" class="form-control mb-2 col-12" id="nota" name="nota" placeholder="Ej: Comprar Tomates">
          </div>
           
            <div class="form-group col-md-2">
            <button type="submit" class="btn btn-primary btn-block mb-2"><i class="bi bi-plus-circle-fill"></i> Agregar</button>
            </div>
        </div>
        

        
      </form>
    </div>
  </div> <!-- fin row 1 -->  

  <div class="row"> <!-- principio row 2 -->  
    <div class="col"> <br> 
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NOTA</th>
            <th scope="col">FECHA</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nota Ej</td>
            <td>25/7/2023</td>
            <td class="text-right"> 
              <a href="#" class="btn btn-success btn-sm" title="Marcar como Lista"><i class="bi bi-check2-circle"></i></a>
              <a href="#" class="btn btn-danger btn-sm" title="Borrar"><i class="bi bi-trash"></i></a>
          </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div> <!-- fin row 2 -->  
</div> <!-- fin de container -->

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>