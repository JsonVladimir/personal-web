<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jheyson Aburto | Inicio</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!--redes íconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/scripts.js"></script>
</head>

<body class="github-style">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="inicio.html">
                    <img src="images/VladINC.png" alt="Logo" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="inicio.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">About me 
                                <span class="badge rounded-pill text-bg-danger disabled">OFF</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Project Gallery
                                <span class="badge rounded-pill text-bg-danger disabled">OFF</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Services
                                <span class="badge rounded-pill text-bg-warning disabled">COMING SOON!</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active disabled" aria-current="page" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h2 class="text-light text-center ">Formulario de Contacto</h2>
                <form  method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label text-ligh">Nombre:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-light border-secondary"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control bg-dark text-light border-secondary" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Email:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-light border-secondary"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control bg-dark text-light border-secondary" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-light">Mensaje:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-light border-secondary"><i class="fas fa-comment"></i></span>
                            <textarea class="form-control bg-dark text-light border-secondary" id="message" name="message" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary btn-github border-secondary">Enviar</button>
                    </div>
                </form>
            </div>

            <div class="row">   
            <div class="col-sm-5 mx-auto">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $message = $_POST["message"];

                        // Configurar los detalles del correo electrónico
                        $to = "calaresni@gmail.com";
                        $subject = "Nuevo mensaje de contacto";
                        $body = "Nombre: " . $name . "\n";
                        $body .= "Email: " . $email . "\n";
                        $body .= "Mensaje: " . $message;

                        // Enviar el correo electrónico
                        $headers = "From: " . $email . "\r\n";
                        $headers .= "Reply-To: " . $email . "\r\n";
                        ini_set("SMTP", "smtp.gmail.com");
                        ini_set("smtp_port", "25");

                        echo "<div id='alert' class='alert alert-success alert-dismissible fade show' role='alert'> ¡El correo electrónico ha sido enviado exitosamente!";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
                        echo "</div>";
                    }
                ?>
                 <!-- Scripts JS -->
            <script>
                function showAlert() {
                    document.getElementById("alert").style.display = "block";
                }
            </script> 
                
            </div>
            </div>
        </div>
    </div>
</body>
<footer class="fixed-bottom bg-dark text-light py-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6">
                <p>&copy; 2023 Json Vladimir. All Right Reserved.</p>
            </div>
            <div class="col-lg-6 container mx-auto">
                <ul class="list-inline text-lg-end">
                    <li class="list-inline-item"><a href="#" class="text-decoration-none">Inicio</a></li>
                    <li class="list-inline-item"><a href="https://www.github.com/tuusuario" target="_blank" class="text-light"><i class="fab fa-github fa-lg github-icon"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/tuusuario" target="_blank" class="text-light"><i class="fab fa-instagram fa-lg instagram-icon"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/tuusuario" target="_blank" class="text-light"><i class="fab fa-linkedin fa-lg linkedin-icon"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/tuusuario" target="_blank" class="text-light "><i class="fab fa-facebook fa-lg facebook-icon"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.twitter.com/tuusuario" target="_blank" class="text-light"><i class="fab fa-twitter fa-lg twitter-icon"></i></a></li>                
                </ul>
            </div>
        </div>
    </div>
</footer>

</html>