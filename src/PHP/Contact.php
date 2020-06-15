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
    <script src="Contact.js" async></script>
    <script src="/src/JS/Main.js" async></script>
</head>
<body>
    <div class="navcont">
        <ul class="nav-links" id="NavNeeds">
            <li>
                <a href="/src/HTML/Prueba.html">Inicio</a>
            </li>
            <li>
                <a href="#">Nosotros</a>
            </li>
            <li>
                <a href="/src/HTML/Contact.html">Contactenos</a>
            </li>
            <li>
                <a href="/src/HTML/Brands.html">Marcas</a>
            </li>
            <li>
                <a href="#">Servicios</a>
            </li>
        </ul>
    </div>
    <div class="Body" id="Body">
        <div class="alltop"></div>
        <div class="top_mobile">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        
        <a class="Nosotros top" href="/src/Servicios.html">
            <div class="Content_nav_in">
                <h2>Nosotros</h2>
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
        <a class="Contactenos top"  href="/src/HTML/Contact.html">
            <div class="Content_nav_in">
                <h2>Contactenos</h2>
            </div>
        </a>
        <a class="Servicios top"  href="/src/Servicios.html">
            <div class="Content_nav_in">
                <h2>Servicios</h2>
            </div>
        </a>
        <div class="ContactoPal">
            <h1>Contactenos</h1>
        </div>
        <div class="LineCont"></div>
        <main>
            <p>Envíanos un correo</p>
            <form class="contact-form" action="contactform.php" method="post">
                <select name="type" id="typeSelect">
                    <option value="persona" class="opciones">Individuo</option>
                    <option value="empresa" class="opciones">Empresa</option>
                </select>
                <input type="text" name="name" placeholder="Nombre" id="NombreForm">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="text" name="subject" placeholder="Asunto">
                <textarea name="message" placeholder="Brinde una breve descripción de lo que necesita"></textarea>
                <button type="submit" name="submit">Enviar</button>
            </form>
        </main>

        <footer>
            <div class="Footer">
                <div class="left-col">
                    <img src="/assets/InfoLadino/LogoInecoEdit.png" alt="" class="logof">
                    <div class="social-media">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <p class="rights-text">© 2020 All Rights Reserved</p>
                </div>
                <div class="right-col">
                    <h1>Our Newsletter</h1>
                    <div class="border"></div>
                    <form action="" class="newsletter-form">
                        <input type="text" class="txtb" placeholder="Enter Your Email">
                        <input type="submit" class="btn" value="Submit">
                    </form>
                </div>
            </div>
        </footer>
    </div>    
</body>
<script>
    document.getElementById('Body').style.overflow = 'hidden';
</script>
</html>