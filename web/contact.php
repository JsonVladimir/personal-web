<!DOCTYPE html>
<html>

<head>
    
    <?php
    include_once "utils/head.php";
    ?>
    <title>Jheyson Aburto | Contact</title>
</head>

<body class="github-style">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="inicio.php">
                    <img src="images/VladINC.png" alt="Logo" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="inicio.php"><i class="fas fa-home "></i> Home</a>
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
                            <a class="nav-link active disabled" aria-current="page" href="#"><i
                                    class="fas fa-envelope"></i> Contacto</a>
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
                <form method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label text-ligh">Nombre:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-light border-secondary"><i
                                    class="fas fa-user"></i></span>
                            <input type="text" class="form-control bg-dark text-light border-secondary" id="name"
                                name="name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Email:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-light border-secondary"><i
                                    class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control bg-dark text-light border-secondary" id="email"
                                name="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-light">Mensaje:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-light border-secondary"><i
                                    class="fas fa-comment"></i></span>
                            <textarea class="form-control bg-dark text-light border-secondary" id="message"
                                name="message" rows="5" required></textarea>
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
    <?php
    include_once "utils/footer.php"
        ?>
</footer>

</html>