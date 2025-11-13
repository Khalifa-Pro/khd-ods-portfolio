@extends('layouts.app')

@section('content')
<!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="">

      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h2>Khalifa Ababacar DIADHIOU</h2>
            <p>Je suis <span class="typed" data-typed-items="Développeur Full Stack, Graphiste">Informaticien-Développeur</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            <div class="social-links">
              <a href="https://www.facebook.com/share/1YZ1jNSEos/"><i class="bi bi-facebook"></i></a>
              <a href="https://www.linkedin.com/in/khalifa-ababacar-diadhiou-986ab3362?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.instagram.com/ya_khalifa15?igsh=MWpiYjMydmpmYTdnZw=="><i class="bi bi-instagram"></i></a>

            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>A propos</h2>
        <p>Je suis Khalifa Ababacar Diadhiou, développeur Full Stack et entrepreneur basé au Sénégal. <br>
            Spécialisé en Java/Spring Boot, Angular, Laravel, ASP.NET MVC, ainsi qu’en Cloud & DevOps <br>(AWS, Docker, Kubernetes, Terraform, CI/CD), <br> je conçois des applications web robustes, performantes et évolutives. <br>
            À travers mon entreprise individuelle ODS (Omega Digital Service), <br> j’accompagne les PME et startups africaines dans leur transformation digitale : <br> développement web, applications sur mesure, e-commerce, systèmes financiers,  <br>mais aussi design graphique (logos, affiches) et montage vidéo. <br>
            Mes valeurs : <strong>Innovation – Fiabilité – Performance – Simplicité.</strong>
        </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img style="border-radius: 15px;" src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Informaticien &amp; Développeur Full Stack</h2>
            <p class="fst-italic py-3">
            Passionné par le digital, je conçois des applications web modernes et performantes avec Java/Spring Boot, Angular, Laravel et ASP.NET MVC.
            J’accompagne les PME et startups dans leur transformation numérique grâce au Cloud & DevOps (AWS, Docker, Kubernetes, Terraform).
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Date de Naissance:</strong> <span>14 Décembre 1996</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Site web:</strong> <span>www.ods.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Téléphone:</strong> <span>+221781498476</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Adresse:</strong> <span>SENEGAL, Dakar/Guédiawaye-Gadaye</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>28 ans</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Niveau d'étude:</strong> <span>Master II</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>diadhiouababacarpro@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Disponible</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients Satisfaits</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projets</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="96" data-purecounter-duration="1" class="purecounter"></span>
              <p>Heures d'assistance</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p>Travailleurs acharnés</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Compétences</h2>
        <p>
        Développement Full Stack (Java/Spring Boot, Angular, Laravel, ASP.NET MVC) •
        Cloud &amp; DevOps (AWS, Docker, Kubernetes, Terraform, CI/CD) •
        Conception UI/UX, logos, affiches et montage vidéo.
        </p>

      </div><!-- End Section Title -->
<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row skills-content skills-animation">

        <!-- 🌐 Développement -->
        <div class="col-lg-6">
        <h4 class="mb-3">🌐 Développement</h4>

        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-html5 me-2"></i> HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="100"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-css3-alt me-2"></i> CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="90"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-js me-2"></i> JavaScript <i class="val">45%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="45"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-php me-2"></i> PHP <i class="val">60%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="60"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-java me-2"></i> Java <i class="val">75%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="75"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-code me-2"></i> C <i class="val">100%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="100"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-code me-2"></i> C++ <i class="val">75%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="75"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-microsoft me-2"></i> C# <i class="val">50%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="50"></div></div>
        </div>
        </div>

        <!-- ⚙️ Frameworks & Librairies -->
        <div class="col-lg-6">
        <h4 class="mb-3">⚙️ Frameworks, CMS & Librairies</h4>

        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-laravel me-2"></i> Laravel <i class="val">75%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="75"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-code me-2"></i> ASP.NET MVC <i class="val">80%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="80"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-java me-2"></i> JEE / Spring Boot <i class="val">80%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="80"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-bootstrap me-2"></i> Bootstrap <i class="val">90%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="90"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-wordpress me-2"></i> Wordpress <i class="val">70%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="70"></div></div>
        </div>
        </div>

        <!-- ☁️ Cloud, DevOps & Outils -->
        <div class="col-lg-6 mt-4">
        <h4 class="mb-3">☁️ Cloud, DevOps & Outils</h4>

        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-aws me-2"></i> AWS <i class="val">35%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="35"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fab fa-docker me-2"></i> Docker <i class="val">70%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="70"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-network-wired me-2"></i> Kubernetes <i class="val">30%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="30"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-code-branch me-2"></i> Terraform <i class="val">25%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="25"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-cogs me-2"></i> Jenkins <i class="val">50%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="50"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-search me-2"></i> SonarQube <i class="val">55%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="55"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-boxes me-2"></i> Nexus <i class="val">20%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="20"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-key me-2"></i> Keycloak <i class="val">65%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="65"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-stream me-2"></i> Kafka <i class="val">20%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="20"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-archive me-2"></i> ELK <i class="val">35%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="35"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-database me-2"></i> Redis <i class="val">20%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="20"></div></div>
        </div>
        </div>

        <!-- 🧪 QA Testing -->
        <div class="col-lg-6 mt-4">
        <h4 class="mb-3">🧪 QA Testing</h4>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-vial me-2"></i> Selenium <i class="val">50%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="50"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-mobile-alt me-2"></i> Appium <i class="val">50%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="50"></div></div>
        </div>
        </div>

        <!-- 🎨 Design & Vidéo -->
        <div class="col-lg-6 mt-4">
        <h4 class="mb-3">🎨 Design & Vidéo</h4>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-paint-brush me-2"></i> Adobe Illustrator <i class="val">75%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="75"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-video me-2"></i> DaVinci Resolve <i class="val">40%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="40"></div></div>
        </div>
        </div>

        <!-- 📊 Bases de données -->
        <div class="col-lg-6 mt-4">
        <h4 class="mb-3">📊 Bases de données</h4>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-database me-2"></i> MySQL <i class="val">80%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="80"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-database me-2"></i> PostgreSQL <i class="val">85%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="85"></div></div>
        </div>
        <div class="progress mb-2">
            <span class="skill"><i class="fas fa-database me-2"></i> MongoDB <i class="val">20%</i></span>
            <div class="progress-bar-wrap"><div class="progress-bar" role="progressbar" aria-valuenow="20"></div></div>
        </div>
        </div>

    </div>
    </div>
</div>

</div>


</div>


    </section><!-- /Skills Section -->

    <!-- Resume Section -->
<section id="resume" class="resume section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Resume</h2>
    <p>Développeur Full Stack et entrepreneur passionné, spécialisé en Java/JEE, Spring Boot, Angular, Laravel, ASP.NET MVC et technologies cloud. Je conçois des applications web robustes et évolutives et accompagne les PME et startups africaines dans leur transformation digitale.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Résumé</h3>

        <div class="resume-item pb-0">
          <h4>Khalifa Ababacar Diadhiou</h4>
          <p><em>Développeur Full Stack, spécialisé en développement web, avec expérience en gestion de projets et conception d'applications évolutives.</em></p>
          <ul>
            <li>Dakar, Sénégal</li>
            <li>+221 76 530 77 12</li>
            <li>diadhiouababacarpro@gmail.com</li>
          </ul>
        </div><!-- End Resume Item -->

        <h3 class="resume-title">Etudes Supérieures & Formation</h3>

        <div class="resume-item">
          <h4>Licence 3 - Génie Logiciel</h4>
          <h5>2023 - 2024</h5>
          <p><em>Institut Supérieure Informatique de Dakar - (ISI)</em></p>
          <p>Formation approfondie en développement logiciel, ingénierie des systèmes et gestion de projets informatiques.</p>
        </div><!-- End Resume Item -->

        <div class="resume-item">
          <h4>Licence 3 Maths Physiques Informatiques - Mention Informatiques</h4>
          <h5>2022 - 2023</h5>
          <p><em>Université Gaston Berger de Saint-Louis</em></p>
          <p>Approfondissement en informatique, mathématiques et physique, avec une orientation vers le développement et l’analyse numérique.</p>
        </div><!-- End Resume Item -->

        <div class="resume-item">
          <h4>Licence 2 Maths Physiques Informatiques</h4>
          <h5>2020 - 2022</h5>
          <p><em>Université Gaston Berger de Saint-Louis</em></p>
          <p>Acquisition des bases en mathématiques, physique et programmation informatique.</p>
        </div><!-- End Resume Item -->

        <div class="resume-item">
          <h4>Licence 1 Maths Physiques Informatiques</h4>
          <h5>2018 - 2020</h5>
          <p><em>Université Gaston Berger de Saint-Louis</em></p>
          <p>Introduction aux fondamentaux des mathématiques, de la physique et de l’informatique.</p>
        </div><!-- End Resume Item -->

        <h3 class="resume-title">Etudes Secondaires</h3>
         <div class="resume-item">
          <h4>BACCALAUREAT - SERIE S2</h4>
          <h5>2017 - 2018</h5>
          <p><em>Lycée Seydina Limamoulaye - Guédiawaye</em></p>
          <p>Sciences expérimentales</p>
        </div><!-- End Resume Item -->

      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="resume-title">Expériences Professionnelles</h3>

        <div class="resume-item">
          <h4>Création d'une application de gestion immobilière</h4>
          <h5>2024 - 2025</h5>
          <p><em>Projet de Mémoire Licence 3</em></p>
          <ul>
            <li>Développement d'une application de gestion de ventes et locations de biens immobiliers avec Laravel (Backend) et Angular (Frontend).</li>
            <li>Conception d'une plateforme complète incluant gestion des annonces, contrats et paiements.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Développement d'application de Gestion de Comptabilité</h4>
          <h5>2024 - 2025</h5>
          <p><em>Projet d'une entreprise multifonction</em></p>
          <ul>
            <li>Développement d'une application de gestion de comptabilité avec Laravel (Backend) et Angular (Frontend).</li>
            <li>Conception d'une plateforme complète incluant gestion des frets, transactions et vente de tissus.</li>
          </ul>
        </div>
        <!-- End Resume Item -->

        <div class="resume-item">
          <h4>Développement d'APIs et BPM</h4>
          <h5>2023 - 2024</h5>
          <p><em>ENTREPRISE FINETECH - Fin@pps</em></p>
          <ul>
            <li>Conception et implémentation d'APIs robustes avec Spring Boot pour applications bancaires et financières.</li>
            <li>Développement d'un système BPM (Business Process Management) pour automatisation des flux de travail.</li>
          </ul>
        </div>

        <!-- End Resume Item -->

      </div>

    </div>

  </div>

</section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tous</li>
            <li data-filter=".filter-app">Applications</li>
            <li data-filter=".filter-product">Designs</li>
            <li data-filter=".filter-branding">Montages: Vidéos-affiches-carte de visite</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/works/work/work-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Gestion de vente de Burger</p>
                <a href="assets/img/works/work/work-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/works/work/ODS_LOGO.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Design 1</h4>
                <p>Charte Graphique Logo ODS <br> Omega Digital Service</p>
                <a href="assets/img/works/work/ODS_LOGO.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

           <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <img src="assets/img/works/work/depa.png" class="img-fluid" alt="Départ fret">
            <div class="portfolio-info">
                <h4>Montage 1</h4>
                <p>Publicité de l'entreprise White House Cargo</p>
                <a href="assets/img/works/work/depart_fret.mp4"
                title="Montage 1"
                data-gallery="portfolio-gallery-branding"
                class="glightbox preview-link">
                <i class="bi bi-play-circle"></i>
                </a>
            </div>
           </div>
        <!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/works/work/work-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Gestion de vente d'accessoires</p>
                <a href="assets/img/works/work/work-3.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/works/work/WH_logo.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Design 2</h4>
                <p>Logo White House</p>
                <a href="assets/img/works/work/WH_logo.png" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/works/work/pub_white_house_cargo_Plan de travail 1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Montage 2</h4>
                <p>Affiche publicitaire White House Cargo</p>
                <a href="assets/img/works/work/pub_white_house_cargo_Plan de travail 1.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/works/work/work-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Gestion de comptabilité</p>
                <a href="assets/img/works/work/work-4.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/works/work/Minide Shop.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Design 3</h4>
                <p>Logo Mini Mode Shop</p>
                <a href="assets/img/works/work/Minide Shop.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/works/work/ODS_1eP.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Montage 3</h4>
                <p>Affiche publicitaire cours informatique ODS</p>
                <a href="assets/img/works/work/ODS_1eP.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/works/work/graph.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Montage 4</h4>
                <p>Carte de visite White House Cargo</p>
                <a href="assets/img/works/work/graph.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/works/work/work-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Gestion de vente et location de biens immobiliers</p>
                <a href="assets/img/works/work/work-5.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/works/work/ods_affiche.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Design 3</h4>
                <p>Logo ODS - Omega Digital Service</p>
                <a href="assets/img/works/work/ods_affiche.png" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>



          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Nous vous accompagnons dans la création de solutions numériques innovantes et dans la valorisation de votre image en ligne. Nos services allient expertise technique et stratégie digitale pour répondre à vos besoins spécifiques.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4 justify-content-center">

        <!-- Service 1 : Développement d'application -->
        <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
            <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                </path>
                </svg>
                <i class="bi bi-laptop"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Développement d'application</h3>
            </a>
            <p>Conception et réalisation d’applications web et mobiles modernes adaptées aux besoins des entreprises et startups.</p>
            </div>
        </div><!-- End Service Item -->

        <!-- Service 2 : Communication digitale -->
        <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
            <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                    d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                </path>
                </svg>
                <i class="bi bi-megaphone"></i>
            </div>
            <a href="#" class="stretched-link">
                <h3>Communication digitale</h3>
            </a>
            <p>Accompagnement dans la gestion de l’image de marque en ligne : création de contenus, réseaux sociaux et stratégie digitale.</p>
            </div>
        </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    {{-- <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Vous souhaitez en savoir plus sur mes services ou discuter de votre projet ?
        Je suis à votre disposition pour échanger et trouver ensemble la meilleure solution adaptée à vos besoins.
        N’hésitez pas à me contacter directement !
        </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Adresse</h3>
                <p>Dakar/Guédiawaye - Gadaye</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Téléphone</h3>
                <p>+221 78 149 84 76</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Adresse Email</h3>
                <p>diadhiouababacarpro@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('contact.send') }}" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
                <div class="row gy-4">

                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Votre nom complet" required>
                    </div>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Votre Email" required>
                    </div>

                    <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Objet" required>
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit">Envoyer Message</button>
                    </div>

                </div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
@endsection
