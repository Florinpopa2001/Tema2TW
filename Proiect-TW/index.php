<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/8cb10c4a30.js" crossorigin="anonymous"></script>
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

<body>

<!--Header-->
  <header>
    <nav>
      <div class="menu-icon"><span class="fas fa-bars"></span></div>
      <div class="logo"><span class="fa-solid fa-bowl-food"></span>Food festival</div>
      <div class="nav-items">
        <li><a href="interactive.html">Interactive</a></li>
        <li><a href="contact.html">Contact</a></li>
      </div>

      <div class="search-icon"><span class="fa-solid fa-utensils"></span></div>
      <div class="cancel-icon"><span class="fas fa-times"></span></div>
    </nav>
  </header>

<!--Content -->
  <section class="hero-section">
    <div class="hero-content">
      <section class="image-section">
        <img src="da1.png" data-speed = "7" class="layer">
        <img src="da.png" data-speed = "8" class="layer"> 
        <img src="da2.png" data-speed = "6" class="layer"> 
        <img src="da3.png" data-speed = "7" class="layer"> 
        <img src="da4.png" data-speed = "7" class="layer"> 
        <img src="da5.png" data-speed = "4" class="layer"> 
      </section>
    </div>
  </section>

  <div class="program-section">
    <div class="col-sm-4 textLeft">
      <p>În cadrul festivalului, încurajam participanții să descopere noi gusturi și să exploreze bucătării exotice și tradiționale.Se crează o atmosferă plăcută și relaxantă cu ajutorul artiștilor locali si internaționali.De asemenea în cadrul acestui festival se organizează activități și jocuri pentru copii astfel încât întreaga familie să se poată bucura de eveniment.Încurajam oamenii interacționeze ,să împărtășească experiențe culinare și să se distreze împreună.</p>
    </div>

    <div class="col-sm-4 program1">
      <h2>Ziua 1</h2>
      <ul>
        <li>10:00 - Deschiderea festivalului</li>
        <li>11:00 - Demonstratii de gatit</li>
        <li>12:00 - Concursul de preparare a celor mai bune burgeri</li>
        <li>13:00 - Prezentarea premiilor pentru concursul de burgeri</li>
        <li>14:00 - Degustari gratuite ale celor mai bune produse alimentare</li>
        <li>15:00 - Cooking Challenge - Maestrii bucatari din oraș se vor confrunta in pregatirea unui preparat surpriza.</li>
      </ul>
    </div>

    <div class="col-sm-4 program2">
      <h2>Ziua 2</h2>
      <ul>
        <li>10:00 - Deschiderea festivalului</li>
        <li>11:00 - Demonstratii de cofetarie</li>
        <li>12:00 - Concursul pentru cel mai bun desert</li>
        <li>13:00 - Prezentarea premiilor pentru concursul de deserturi</li>
        <li>14:00 - Degustari gratuite ale celor mai bune produse alimentare</li>
        <li>15:00 - Cursuri de gatit pentru copii</li>
      </ul>
    </div>
    
  </div>


<!--Footer -->
  <footer>
    <div class="main-content">
      <div class="center box">
        <h2>Adresă</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Slatina,Olt</span>
          </div>

          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">0723 474 192</span>
          </div>

          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">food.festival@gmail.com</span>
          </div>
          <div class="social">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>

          </div>
        </div>

      </div>

      <div class="center2 box">
        <h2>Hartă</h2>
        <div class="content">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.2926710995243!2d24.380251915741393!3d44.42715841005595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40ad39e61e556db1%3A0x63fc411cd2321544!2sParc%20Mc!5e0!3m2!1sen!2sro!4v1678956971004!5m2!1sen!2sro" width="300" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="right box">
        <h2>înscrie-te</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text">Nume *</div>
              <input type="text" required>
            </div>
            <div class="email">
              <div class="text">Adresa de email *</div>
              <input type="email" required>
            </div>
            <div class="email">
              <div class="text">Numar de telefon *</div>
              <input type="email" required>
            </div>

            <div class="btn">
              <button type="button" class="btn btn-success">Success</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>


  <script src="app.js"></script>
</body>

</html>