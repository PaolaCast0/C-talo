<?php
    include "php/citar.php";

    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $year = $_POST['year'];
        $titulo = $_POST['titulo'];
        $editorial= $_POST['editorial'];
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Cítalo</title>
</head>
<body> 

    <div class="hero-head">
        
    <section>
    <nav class="navbar is-link" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a href="index.html">
            <img src="./iconos/Citalo-logo.png" width="112" height="28">
            </a>
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="index.html">
              Home
            </a>
      
            <a class="navbar-item">
              Aprende más
            </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Crea una cita 
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  APA
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Chicago
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  MLA
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Harvard
                </a>
              </div>
            </div>
          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a form action="registro.html"><button class="button is-ligth"></form>
                  Regístrate
                </button>
                <a class="button is-link">
                  Accede
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav><br>
    </section>

    </div>

    <div class="hero-body">

    <div class="columns">
    <div class="column is-half">

    <div class="box">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Nombre de tu autor" name="nombre">
                </div>
            </div>
        
            <div class="field">
                <label class="label">Apellido</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Apellido de tu autor" name="apellido">
                </div>
            </div>
        
            <div class="field">
                <label class="label">Año</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Año de publicacion" name="year">
                </div>
            </div>
        
            <div class="field">
                <label class="label">Titulo</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Titulo del libro" name="titulo">
                </div>
            </div>
        
            <div class="field">
                <label class="label">Editorial</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Editorial del libro" name="editorial">
                </div>
            </div>
        
            <div class="field is-grouped">
                <div class="control">
                    <input class="button orange" type="submit" value="Citalo!" name="enviar"></input>
                </div>
            <div class="control">
                <input class="button blanco-cita is-light" type="reset" value="Cancelar"></input>
            </div>
            </div>

        </form>

    </div>

    </div>

    <div class="column">
        <figure class="image is-128x128">
            <img src="iconos/Citalo-logo.png">
        </figure>
        <p class="title is-4">Cita bibliográfica en formato APA:</p>
    <?php
        if (isset($_POST['enviar'])) {
            echo crearReferenciaAPA($nombre, $apellido, $year, $titulo, $editorial);
        } 
    ?>
    </div>
    </div>

    </div>
    <div class="hero-foot">

    </div>
    

    <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Cítalo</strong> creado por <a href="https://jgthms.com">Paola Castillo</a> y <a href="https://jgthms.com">Carlos Jímenez</a>. <br>El código fuente cuenta con licencia
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. El contenido del sitio web tiene licencia <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
      </p>
    </div>
  </footer>

</body>
</html>