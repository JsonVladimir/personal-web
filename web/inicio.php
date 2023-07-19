<!DOCTYPE html>
<html>

<head>
    <?php
    include_once "utils/head.php";
    ?>
    <title>Jheyson Aburto | Home</title>
</head>

<body class="github-style">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand disabled" href="#">
                    <img src="images/VladINC.png" alt="Logo" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active disabled" href="#"><i class="fas fa-home "></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"><i class="fas fa-user "></i> About me
                                <span class="badge rounded-pill text-bg-danger disabled">OFF</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"><i class="fas fa-archive"></i> Project Gallery
                                <span class="badge rounded-pill text-bg-danger disabled">OFF</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#"><i class="fas fa-terminal"></i> Services
                                <span class="badge rounded-pill text-bg-warning disabled">COMING SOON!</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Contact me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="row"><!--iMAGEN PERFIL-->
            <div class="col-lg-4">
                <div class="my-5 px-5 py-5 ">
                    <img src="images/json.pn" alt="Foto de perfil"
                        class="border border-danger-subtle img-fluid rounded-circle profile-img ">
                </div>
            </div>
            <div class="col-lg-8 mb-5">
                <div class="profile-info mx-auto my-5 px-5 py-4 border border-secondary">
                    <h1 class="profile-name"><i class="fas fa-user-circle "></i> JsonVladimir</h1>
                    <p class="profile-location"><i class="fas fa-map-marker-alt"></i> Lima, Perú</p>
                    <p class="profile-email"><i class="far fa-envelope "></i> contacto@vladimiraburto.com</p>
                    <p class="profile-college"><i class="fas fa-university "></i> Universidad Nacional Del Callao</p>
                    <p class="profile-college"><i class="fas fa-graduation-cap "></i> Systems Engineer</p>
                    <p class="profile-college"><i class="fas fa-building "></i> Osiptel</p>
                    <!--   <p class="profile-college"><i class="fab fa-github"></i> JsonVladimir</p>-->
                    <p class="profile-college"><i class="fas fa-birthday-cake "></i> 06/05/2000</p>
                    <p class="profile-bio"><i class="fas fa-bullhorn "></i> ¡Hola! Soy Jheyson, un joven apasionado por
                        la tecnología y con un gran interés en el mundo de la Ingeniería de Datos. Actualmente trabajo
                        en OSIPTEL, pero estoy abierto de nuevas oportunidades en este fascinante campo. Si estás
                        buscando un profesional comprometido y entusiasta, ¡estaré encantado de conversar contigo!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-12 ">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="text-light mt-3 ms-3"><i class="fas fa-tasks"></i> Mis proyectos</h2>
                <div class="card bg-dark text-light mt-3 border-secondary mx-2">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-code"></i> NumSoft | Calculadora Algebráica polinomial.
                        </h5>
                        <p class="card-text">En la universidad, desarrollé una calculadora como proyecto personal y como
                            herramienta de apoyo en un curso, para la resolución de diferentes ejercicios de Análisis
                            numérico.</p>
                        <!-- Aquí poner el proyecto BI-->
                        <a href="https://github.com/DeVladINC/NumSoft" class="btn btn-primary btn-github"
                            target="_blank">Ver más</a>
                    </div>
                </div>
                <div class="card bg-dark text-light mt-3 border-secondary mx-2">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-code-branch"></i> Plugins para servidores de
                            videojuegos.</h5>
                        <p class="card-text">Desarrollé plugins en en Java los cuales vendía en la web de Spigot para
                            que sean implementados en servidores multijugador, esto con fines comerciales. </p>
                        <a href="#" class="btn btn-primary btn-github">Ver más</a>
                    </div>
                </div>
                <div class="card bg-dark text-light mt-3 border-secondary mx-2">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-code"></i> Dashboard en PowerBI para la vitivinícola "El
                            Paso".</h5>
                        <p class="card-text">Diseñé e implementé un Datamart para la optimización y visualización de
                            datos de la vitivinícola “Viña el paso”. </p>
                        <a href="#" class="btn btn-primary btn-github">Ver más</a>
                    </div>
                </div>

                <div class="card bg-dark text-light mt-3 border-secondary mx-2">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-code-branch"></i> Web e-commerce para ventas de
                            artículos digitales.</h5>
                        <p class="card-text">En tiempos pandémicos desplegué una web E-commerce para la venta de
                            artículos digitales, con fines de aprendizajes y económicos.</p>
                        <a href="" class="btn btn-primary btn-github">Ver más</a>
                    </div>
                </div>
                <!-- Agrega más tarjetas de repositorios según sea necesario -->
            </div>
            <div class="col-lg-8 custom-frame-style mb-5">
                <h2 class="text-light text ms-3"><i class="fas fa-briefcase"></i> Mi exp</h2>
                <iframe
                    src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1I5NMZKE6FEaOZRWHCVwK-XCJamF5AVBAHwiio3HzkvA&font=Medula-Lato&lang=es&start_at_end=true&initial_zoom=5&height=650'
                    width='100%' height='645' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'>
                </iframe>
            </div>
        </div>
    </div>
    <!-- Aquí puedes agregar más secciones o contenido según tus necesidades -->
</body>
<footer class="bg-dark text-light py-4">
    <?php
    include_once "utils/footer.php";
    ?>
</footer>

</html>