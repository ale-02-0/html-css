<nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page =="home") {echo 'active';}?>" href="home.php" >Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php if($page =="sobre mi") {echo 'active';}?>" href="sobre_mi.php">Sobre mi<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page =="proyecto") {echo 'active';}?>" href="proyecto.php">Proyectos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php if($page =="contacto") {echo 'active';}?>" href="contacto.php">Contacto<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>