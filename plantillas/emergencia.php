<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>PAS</title>
</head>
<body>
 <?php
   include "../plantillas/navbar.php"
   
   ?> 

 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form action="../plantillas/emergencia.php">
              
              <hr>
              <h6>Datos Personales</h6>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombres" id="nombre" placeholder="Nombre" class="form-control"  required>
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" placeholder="Apellido" class="form-control" required>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="email@sample.com" class="form-control" required>
              <label for="cell">Telefono</label>
              <input type="text" name="telefono" id="cell" placeholder="000-000-0000" class="form-control" required>
            </div>
            <div class="modal-footer">
          <button type="submit" class="btn btn-primary" onclick="agendar()">Agendar</button>
            </div>
          </form>


















    <?php
   include "../plantillas/footer.php"
   
   ?> 
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Alert de la agenda -->
<script src="../js/main.js"></script>
</body>
</html>