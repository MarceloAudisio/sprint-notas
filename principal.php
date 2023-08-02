<?php
        require "protect.php";
        require "conexion.php";
        $usuario_id=$_SESSION["usuario_id"];
        $usuario=$_SESSION["usuario"];
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
    <div class="offset-md-3 col-md-6">
      <br>
      <h3>MIS NOTAS
        <span class="float-right">
        <div class="btn-group">
          <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle"></i> <?php echo ucfirst($usuario); ?>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="salir.php" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Salir</a>
          </div>
        </div>
        </span>
      </h3>
      <br>
      <form method="post" action="agregar.php">
        
        <div class="form-row">
          <div class="form-group col-md-9">
              <label class="sr-only" for="nota">Nota</label>
              <input type="text" class="form-control mb-2 col-12" id="nota" name="nota" placeholder="Ej: Comprar Tomates">
          </div>
           
            <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary btn-block mb-2"><i class="bi bi-plus-circle-fill"></i> Agregar</button>
            </div>
        </div>
        

        
      </form>
    </div>
  </div> <!-- fin row 1 -->  

  <div class="row"> <!-- principio row 2 -->  
    <div class="offset-md-3 col-md-6"> <br>
    <?php
    $sql="SELECT *,DATE_FORMAT(fecha,'%d/%m/%Y %H:%i:%s') as fecha_h FROM notas WHERE usuario_id=$usuario_id ORDER BY nota_id DESC";
    $rec=mysqli_query($link,$sql);
    if(@mysqli_num_rows($rec)){
    ?>
    <div class="table-responsive"> 
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NOTA</th>
            <th scope="col">FECHA</th>
            <th scope="col">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php while($n=mysqli_fetch_array($rec)){ 
                    if($n["estado"]==1){
                        $antes="<s>";
                        $despues="</s>";

                        $btn_color="btn-warning";
                        $btn_icono="bi-arrow-counterclockwise";
                    }else{
                        $antes="";
                        $despues="";
                        
                        $btn_color="btn-success";
                        $btn_icono="bi-check2-circle";
                    }  
          ?>
          <tr>
            <td><?php echo $antes.$n["texto"].$despues; ?></td>
            <td><?php echo $antes.$n["fecha_h"].$despues; ?></td>
            <td class="text-right"> 
              <a href="marcalista.php?id=<?php echo $n["nota_id"]; ?>" class="btn <?php echo $btn_color; ?> btn-sm" title="Marcar como Lista"><i class="bi <?php echo $btn_icono; ?>"></i></a>
              <a href="borrar.php?id=<?php echo $n["nota_id"]; ?>" class="btn btn-danger btn-sm" title="Borrar"><i class="bi bi-trash"></i></a>
          </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <?php }else{ ?>
        <div class="alert alert-info" role="alert">
        <b><i class="bi bi-emoji-laughing"></i> hurra!</b> No hay Notas!
        </div>
    <?php } ?>
    </div>
  </div> <!-- fin row 2 -->  
</div> <!-- fin de container -->

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>