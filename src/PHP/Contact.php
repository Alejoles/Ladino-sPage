<?php include('contactform.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactenos</title>
    <link rel = "icon" href ="/assets/InfoLadino/LogoInecoEdit.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="Contact.css">
    <script src="https://use.fontawesome.com/e76b9894bd.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="/src/JS/Main.js" async></script>
</head>
<body>
    <div class="navcont">
        <ul class="nav-links" id="NavNeeds">
            <li>
                <a href="/src/HTML/Prueba.html">Inicio</a>
            </li>
            <li>
                <a href="/src/HTML/Nosotros.html">Nosotros</a>
            </li>
            <li>
                <a href="/src/PHP/Contact.php">Contactenos</a>
            </li>
            <li>
                <a href="/src/HTML/Brands.html">Marcas</a>
            </li>
            <li>
                <a href="/src/HTML/Servicios.html">Servicios</a>
            </li>
        </ul>
    </div>
    <div class="Body" id="Body">
        <div class="alltop"></div>
        <div class="top_mobile">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        
        <a class="Inicio top" href="/src/HTML/Prueba.html">
            <div class="Content_nav_in">
                <h2>Inicio</h2>
            </div>
        </a>
        <a class="Nosotros top" href="/src/HTML/Nosotros.html">
            <div class="Content_nav_in">
                <h2>Nosotros</h2>
            </div>
        </a>
        <a class="Prods top" href="/src/HTML/Productos.html">
            <div class="Content_nav_in">
                <h2>Productos</h2>
            </div>
        </a>
        <a class="Marcas top" href="/src/HTML/Brands.html">
            <div class="Content_nav_in">
                <h2>Marcas</h2>
            </div>
        </a>
        <div class="Logo_inicio">
            <a href="/src/HTML/Prueba.html">
                <div class="Content_nav_logo">
                    <img src="/assets/InfoLadino/LogoInecoEdit.png">
                </div>
            </a>
        </div>
        <a class="Contactenos top"  href="/src/PHP/Contact.php">
            <div class="Content_nav_in">
                <h2>Contactenos</h2>
            </div>
        </a>
        <a class="Servicios top"  href="/src/HTML/Servicios.html">
            <div class="Content_nav_in">
                <h2>Servicios</h2>
            </div>
        </a>
        <iframe class="ImageContainer" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1988.1313866513478!2d-74.04989424196597!3d4.724356172239971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8541924362e5%3A0x5640eb99ef35c4d3!2sCl.%20142%20%2320-71%2C%20Bogot%C3%A1!5e0!3m2!1sen!2sco!4v1593387002310!5m2!1sen!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="ContactoPal">
            <h1>Contactenos</h1>
        </div>
        <div class="LineCont"></div>
        <main>
            <p>Envíanos un correo</p>
            <p class="error">Campos con * son requeridos</p>
            <form class="contact-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input value="<?= $name ?>" type="text" name="name" placeholder="* Nombre" id="NombreForm" require><span class="error"><?= $nameErr ?></span>
                <input value="<?= $empresa ?>" type="text" name="empresa" placeholder="Empresa" id="EmpresaForm" require>
                <input value="<?= $nit ?>" type="text" name="nit" placeholder="NIT" id="NitForm">
                <input value="<?= $phone ?>" type="text" name="phone" placeholder="Teléfono">
                <input value="<?= $mailFrom ?>" type="text" name="mail" placeholder="* E-mail">
                <span class="error"><?= $mailErr ?></span>
                <input value="<?= $subject ?>" type="text" name="subject" placeholder="* Asunto"> <span class="error"><?= $subjectErr ?></span>
                <textarea value="<?= $message ?>" name="message" placeholder="* Brinde una breve descripción de lo que necesita"></textarea> <span class="error"><?= $textErr ?></span>
                <button type="submit" name="submit">Enviar</button>
            </form>
        </main>

        <footer>
            <div class="section">
                <div class="f-logoin">
                    <a href="/src/HTML/Prueba.html" class="f-logo"><img src="/assets/InfoLadino/LogoInecoEdit.png" alt=""></a>
                    <h2 class="Copy">© All Rights Reserved</h2>
                </div>
                <ul>
                    <h1>Links</h1>
                    <li><a href="/src/HTML/Prueba.html">Inicio</a></li>
                    <li><a href="/src/HTML/Nosotros.html">Nosotros</a></li>
                    <li><a href="/src/PHP/Contact.php">Contactenos</a></li>
                    <li><a href="/src/HTML/Productos.html">Productos</a></li>
                    <li><a href="/src/HTML/Brands.html">Marcas</a></li>
                    <li><a href="/src/HTML/Servicios.html">Servicios</a></li>
                </ul>
                <ul>
                    <h1>Contactenos</h1>
                    <li><p><i class="fa fa-phone"></i>+57 3105794960</p></li>
                    <li><p><i class="fa fa-phone"></i>+57 3114404617</p></li>
                    <li><p><i class="fa fa-map-marker"></i> Calle 142 #20-71</p></li>
                    <li><p><i class="fa fa-map"></i> Bogotá D.C - Colombia</p></li>
                    <li><a href="/src/PHP/Contact.php" class="ContactFooter"><i class="fa fa-envelope"></i> Envíanos un correo</a></li>
                </ul>
                <div class="social">
                    <h1>Social</h1>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
            </div>
        </footer>
    </div>    
</body>
<script>
    document.getElementById('Body').style.overflow = 'hidden';
</script>
</html>