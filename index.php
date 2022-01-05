<?php
require('function.php');

if (!isset($_SESSION['login'])) {
    echo '<script>
            alert("Anda belum login! Silahkan login terlebih dahulu."); 
            window.location.href="login.php";
    </script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bridge Organizer</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- ICONS-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- CSS-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="page-top">
    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <h3 class="logo">Bridge<span>Organizer</span></h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#crew">Crew</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <?php if (isset($_SESSION['login'])) : ?>
                        <button type="button" class="btn btn-outline-warning"><a href="logout.php"
                                style="text-decoration: none">Logout</a></button>
                        <?php else : ?>
                        <button type="button" class="btn btn-outline-warning"><a href="login.php"
                                style="text-decoration: none">Login/Sign Up</a></button>
                        <?php endif; ?>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR  -->


    <!-- HEADER-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading" data-aos="fade-left" data-aos-duration="1000">Welcome To Our Studio!</div>
            <div class=" masthead-heading text-uppercase" data-aos="fade-right" data-aos-duration="1000"
                data-aos-delay="200">Happy To See U
            </div>
            <a class=" btn btn-primary btn-xl text-uppercase" id="readMore" href="#portfolio" data-aos="fade-up"
                data-aos-delay="250" data-aos-duration="1500">See
                more</a>
        </div>
    </header>
    <!-- END HEADER -->


    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Bridge Organizer & Bridge Cinematography.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image" data-aos="flip-right" data-aos-offset="300"><img
                            class="rounded-circle img-fluid" src="assets/img/about/a.jpg" alt="..." /></div>
                    <div class="timeline-panel" data-aos="fade-right" data-aos-offset="300">
                        <div class="timeline-heading">
                            <h4 class="subheading">Our Vision</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Memberikan pelayanan terbaik kepada client dan berusaha untuk mengerti keinginan dan
                                tujuan client sehingga client bisa terpuaskan dalam bekerja sama dengan kami untuk
                                mencapai target client.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image" data-aos="flip-left" data-aos-offset="300"><img
                            class="rounded-circle img-fluid" src="assets/img/about/b.jpg" alt="..." /></div>
                    <div class="timeline-panel" data-aos="fade-left" data-aos-offset="300">
                        <div class="timeline-heading">
                            <h4 class="subheading">Our Services</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Wedding Organizer<br />Wedding Planner<br />Event Organizer<br />Event Planner
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image" data-aos="flip-right" data-aos-offset="300"><img
                            class="rounded-circle img-fluid" src="assets/img/about/c.jpg" alt="..." /></div>
                    <div class="timeline-panel" data-aos="fade-right" data-aos-offset="300">
                        <div class="timeline-heading">
                            <h4 class="subheading">We are ready in</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                📌 Bondowoso 📌 Jember 📌 Banyuwangi
                                📌 Situbondo
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image" data-aos="flip-left" data-aos-offset="250">
                        <h4 data-aos="fade-left" data-aos-offset="250">
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- END ABOUT -->


    <!-- PORTOFOLIO -->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">Some of our client happines.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item" data-aos="flip-up" data-aos-duration="500">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Reception</div>
                            <div class="portfolio-caption-subheading text-muted">Potret acara resepsi pernikahan</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item" data-aos="flip-up" data-aos-duration="500" data-aos-delay="100">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Wedding Reception</div>
                            <div class="portfolio-caption-subheading text-muted">Potret acara resepsi pernikahan</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item" data-aos="flip-up" data-aos-duration="500" data-aos-delay="250">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Decoration Wedding Reception</div>
                            <div class="portfolio-caption-subheading text-muted">Persiapan acara resepsi pernikahan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item" data-aos="flip-up" data-aos-duration="500" data-aos-delay="350">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Graduation Ceremony</div>
                            <div class="portfolio-caption-subheading text-muted">Upacara kelulusan siswa kelas 12 SMA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item" data-aos="flip-up" data-aos-duration="500" data-aos-delay="450">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Music Concerts</div>
                            <div class="portfolio-caption-subheading text-muted">Konser musik pada acara Disnatalis
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item" data-aos="flip-up" data-aos-duration="500" data-aos-delay="550">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Promise</div>
                            <div class="portfolio-caption-subheading text-muted">Janji Suci</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PORTOFOLIO -->


    <!-- TEAM-->
    <section class="page-section bg-light" id="crew">
        <div class="container" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1300">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Crew of Duty</h2>
                <h3 class="section-subheading text-muted">Nice to meet u !! it's us.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Parveen Anand</h4>
                        <p class="text-muted">Leader</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                        <h4>Diana Petersen</h4>
                        <p class="text-muted">Treasurer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Photographer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/4.jpg" alt="..." />
                        <h4>Harry Raknap</h4>
                        <p class="text-muted">Photographer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/5.jpg" alt="..." />
                        <h4>Gracia Oliv</h4>
                        <p class="text-muted">Public Relationer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/6.jpg" alt="..." />
                        <h4>Tom Marcus</h4>
                        <p class="text-muted">Editor</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END TEAM-->


    <!-- SERVICES-->
    <section class="page-section" id="services">
        <div class=" container" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1300">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Pricelist</h2>
                <h3 class="section-subheading text-muted">Best Offer for you.</h3>
            </div>
            <div class="pricing py-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0 ">
                            <div class=" card-body">
                                <h5 class="card-title text-muted text-uppercase text-center"></h5>
                                <h6 class="card-price text-center">Reception<span class="period"></span></h6>
                                <hr />
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li"></span>Photography &emsp;
                                        <h5>Rp.3.000.000.000</h5>
                                    </li>
                                    <li>
                                        <span class="fa-li"></span>Videography &emsp;
                                        <h5>Rp.3.000.000.000</h5>
                                    </li>
                                    <li>
                                        <span class="fa-li"></span>Cinematic Teaser &emsp;
                                        <h5>Rp.3.500.000.000</h5>
                                    </li>
                                    <li>
                                        <span class="fa-li"></span>Standard Album &emsp;
                                        <h5>Rp.3.500.000.000</h5>
                                    </li>
                                    <li>
                                        <span class="fa-li"></span>Premium Album &emsp;
                                        <h5>Rp.5.000.000.000</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">IDR 20.000.000</h5>
                                <h6 class="card-price text-center">Diamond<span class="period"></span></h6>
                                <hr />
                                <ul class="fa-ul">
                                    <li><span class="fa-li"></span>Engagement</li>
                                    <li><span class="fa-li"></span>Akad</li>
                                    <li><span class="fa-li"></span>Reception</li>
                                    <li><span class="fa-li"></span>Pre-Wedding</li>
                                    <li><span class="fa-li"></span>Siraman + Midodareni</li>
                                    <li><span class="fa-li"></span>free Maternity</li>
                                    <li><span class="fa-li"></span>dan Fasilitas lainnya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">IDR 25.000.000.000</h5>
                                <h6 class="card-price text-center">Exclusive<span class="period"></span></h6>
                                <hr />
                                <ul class="fa-ul">
                                    <li><span class="fa-li"></span>Bridge Organizer Full Handle Your.
                                    <li>Engagement</li>
                                    <li>Pre-Wedding</li>
                                    <li>Akad</li>
                                    <li>Siraman + Midodareni</li>
                                    <li>Reception</li>
                                    <li>free Maternity</li>
                                    </li>
                                    <li><span class="fa-li"></span>Bridge Cinematography Full Documents Your.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center my-5">
                    <a href="https://drive.google.com/drive/u/0/folders/1VVYvSNAa_p7Jgx9IjybvOYFSKufpCTd4"
                        target="_blank" class="display-5 text-dark link"
                        style="text-decoration: none; font-size: 24px;">See more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICES-->


    <!-- CONTACT-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Tell us your plan.</h3>
            </div>
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                <strong>Terimakasih!</strong> Pesan anda terkirim.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" name="contact-forms">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" name="nama" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" name="email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" name="nohp" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *"
                                data-sb-validations="required" name="pesan"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit Button-->
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase btn-kirim" id="submitButton" type="submit">Send
                        Message</button>
                    <button class="btn btn-warning  btn-loading d-none" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
                <div class="text-center mt-3">
                    <h6 style="color: white;">Or</h6>
                </div>
                <div class="text-center mt-3">
                    <a href="https://wa.link/qvdx3x" target="blank" style="text-decoration:none">Chat
                        via WhatsApp</a>
                </div>
            </form>
        </div>
    </section>
    <!-- END CONTACT-->

    <!-- FOOTER-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start" data-aos="fade-right" data-aos-offset="10" data-aos-delay="200">
                    Copyright &copy; Your
                    Website 2021</div>
                <div class="col-lg-4 my-3 my-lg-0" data-aos="fade-up" data-aos-offset="10" data-aos-delay="200">
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/bridgeorganizer__/"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@bridgeorganizer?"><i
                            class="fab fa-tiktok"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end" data-aos="fade-left" data-aos-offset="10" data-aos-delay="200">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="https://beacons.ai/teamdev">Created by Team</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER-->


    <!-- Portfolio Popup ketika di klik-->
    <!-- Portfolio item 1  popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Reception</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                <p>
                                    Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae
                                    cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        A❤️I
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Wedding Organizer
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2  popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Reception</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                <p>
                                    Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae
                                    cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        A❤️I
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Wedding Organizer
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3  popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Dekorasi Resepsi Pernikahan</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                <p>
                                    Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae
                                    cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Kevin&Kareen
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Wedding Planner, Wedding Organizer
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Upacara Kelulusan</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                <p>
                                    Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae
                                    cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        SMA
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Event Organizer
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5  popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Konser Musik Disnatalis</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                <p>
                                    Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae
                                    cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Universitas
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Event Organizer
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Reception</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                <p>
                                    Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae
                                    cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        A❤️I
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Wedding Planner, Wedding Organizer
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <!-- Detail GSAP -->
    <script>
    gsap.from('.navbar', {
        duration: 1.5,
        y: '-100%',
        opacity: 0,
        ease: 'bounce'
    });
    </script>


    <script src="assets/js/scripts.js"></script>


    <script>
    const scriptURL =
        'https://script.google.com/macros/s/AKfycbz2mfFWeF6qknx0RRVJI_dn0kzjvLCwa5rmlU_4LszFqfMWo91I0EtEFnxKuiGmgY6X/exec'
    const form = document.forms['contact-forms']
    const btnKirim = document.querySelector('.btn-kirim')
    const btnLoading = document.querySelector('.btn-loading')
    const myAlert = document.querySelector('.my-alert')

    form.addEventListener('submit', e => {
        e.preventDefault();
        // ketika tombol submit di klik
        // tampilkan tombol laoding, sembunyikan tombol kirim
        btnLoading.classList.toggle('d-none')
        btnKirim.classList.toggle('d-none')
        fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)
            })
            .then(response => {

                // tampilkan tombol kirim, sembunyikan tombol Loading
                btnLoading.classList.toggle('d-none')
                btnKirim.classList.toggle('d-none')
                //tampilkan alert
                myAlert.classList.toggle('d-none');
                //reset form
                form.reset();
                console.log('Success!', response)
            })
            .catch(error => console.error('Error!', error.message))
    })
    </script>
</body>

</html>