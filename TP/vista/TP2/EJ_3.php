<!-- En este ejercicio validamos con JSquery -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 3 TP2</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
    crossorigin="anonymous" />

  <link rel="stylesheet" href="../css/style_header.css" />
  <link rel="stylesheet" href="../css/style_footer.css" />
  <link rel="stylesheet" href="../css/style3.css" />
</head>

<body>
  <?php
  echo <<<HTML
    <main class='main-content'> 
    <div class="login-card">
      <h2>Login</h2>
      <form
        id="formulario"
        class="form g3"
        method="post"
        action="../../control/TP2/control_EJ3.php"
        novalidate
      >
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input
            type="text"
            class="form-control"
            name="username"
            id="username"
            placeholder="Username"
          />
          <div class="invalid-feedback" id="username-feedback"></div>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            name="password"
            id="password"
            placeholder="Password"
          />
          <div class="invalid-feedback" id="password-feedback"></div>
        </div>

        <button type="submit" class="btn btn-custom-green">Login</button>
      </form>
    </div>
      </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
      crossorigin="anonymous"
    ></script>
    <!-- Validaciones con JSquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="../../vista/js/validar_Jquery.js"></script>
    <script src="../js/cargarFyH.js"></script>
  </body>
  HTML;
  ?>

</html>