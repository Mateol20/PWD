<!-- En este ejercicio validamos con Javascript puro -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/style_header.css" />
  <link rel="stylesheet" href="../css/style_footer.css" />
  <link rel="stylesheet" href="../css/styleEj4.css">
  <title> Ejercicio 4 </title>
</head>

<body>

  <?php
  echo '
  <main class="main-content">
    <div class="form-container">
<form method="post" action="./accion/formAccion_EJ4.php">
    <div class="row">
      <div class="col-md-2">
        <label>Titulo</label><br/>
        <input type="text" name="titulo" id="titulo" placeholder="Titulo">
      </div>
      <div class="col-md-2">
        <label>Actores</label><br/>
        <input type="text" name="actores" id="actores" placeholder="Actores">
      </div>
    </div>
      
    <div class="row">
      <div class="col-md-2">
        <label>Director</label><br/>
        <input type="text" name="director" id="director" placeholder="Director">
      </div>
      <div class="col-md-2">
        <label>Guion</label><br/>
        <input type="text" name="guion" id="guion" placeholder="Guion">
      </div>
    </div>

    <div class="row">
      <div class="col-md-2">
        <label>Produccion</label><br/>
        <input type="text" name="produccion" id="produccion" placeholder="Produccion">
      </div>
      <div class="col-md-2">
        <label>Año</label><br/>
        <input type="number" name="anio" id="anio" placeholder="Año">
      </div>
    </div>


    <div class="row">
      <div class="col-md-2">
        <label>Nacionalidad</label><br/>
        <input type="text" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad">
      </div>
      <div class="col-md-2">
        <label>Genero</label><br/>
          <select name="genero" id="genero" placeholder="Genero">
          <option>Seleccionar Genero</option>
          <option>Comedia</option>
          <option>Drama</option>
          <option>Terror</option>
          <option>Romance</option>
          <option>Suspenso</option>
          <option>Otras</option>
          </select>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2">
        <label>Duracion</label><br/>
        <input type="number" name="duracion" id="duracion" placeholder="Duracion">
      </div>
      <div class="col-md-2">
        <label>Restricciones de edad</label><br/>
        <input type="radio" name="rest_edad" id="rest_edad_tp" value="todoPublico" checked> Todo publico
        <input type="radio" name="rest_edad" id="rest_edad_7" value="+7">  + 7 
        <input type="radio" name="rest_edad" id="rest_edad_18" value="+18"> + 18 
      </div>
    </div>

    <br/>

    <div class="row">
      <div class="col-md-8">
      <label>Sinopsis</label> 
        <br/>
        <textarea id="textarea" class="col-md-8">
        </textarea>
      </div>
    </div>

    <br/>

    <div class="botones">
      <div class="col-md-5 d-flex">
        <button type="submit" class="ms-auto" id="botonEnviar" onclick="return ejecutar();">Enviar</button>
        <button type="reset" class="m-1" id="botonBorrar">Borrar</button>
      </div>
    </div>
     
    </form>
    </main>
    </div>
';

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script src="../../control//TP2/validar_JS.js"></script>
  <script src="../js/cargarFyH.js"></script>
</body>

</html>