<!doctype html>
<html class="no-js" lang="zxx">

<?php include("assets/shared/head.php"); ?>

<body>

   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
         </div>
      </div>
   </div>

   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>

   <?php include("assets/shared/header.php"); ?>


   <main>

      <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" data-background="assets/img/breadcrumb/slider-contactos.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title mb-20">Contactos</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index">Inicio</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        <span class="sub-page-black">Contactos</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="location-area pt-120 pb-85">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-md-6">
                  <div class="location-item text-center mb-30">
                     <div class="location-icon mb-25">
                        <i class="fa-light fa-phone"></i>
                     </div>
                     <div class="location-content">
                        <h5 class=""><a href="tel:984749614">984-749-614</a></h5>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-md-6">
                  <div class="location-item text-center mb-30">
                     <div class="location-icon mb-25">
                        <i class="fa-light fa-location-dot"></i>
                     </div>
                     <div class="location-content">
                        <h5 class="">Av. Juan Pablo II, Trujillo 13011</h5>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-md-6">
                  <div class="location-item text-center mb-30">
                     <div class="location-icon mb-25">
                        <i class="fi fi-rr-envelope"></i>
                     </div>
                     <div class="location-content">
                        <h6><a href="mailto:fractalstudio.arquitectura@gmail.com">fractalstudio.arquitectura@gmail.com</a></h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="contact-area pb-60">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12 col-12">
                  <div class="contact-wrapper mr-65 mb-60">
                     <div class="sub-contact-title">
                        <h5 class="contact-title mb-30">Envianos un Mensaje</h5>
                     </div>
                     <div class="contact-form">
                        <form action="#">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="contact-form-input mb-25">
                                    <span>Nombre</span>
                                    <input type="text" placeholder="Nombre" name="name">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="contact-form-input mb-25">
                                    <span>Email</span>
                                    <input type="email" placeholder="Email" name="email">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="contact-form-input mb-40">
                                    <span>Mensaje</span>
                                    <textarea placeholder="Escribe tu mensaje" name="message"></textarea>
                                 </div>
                                 <a href="#" class="tp-btn">Enviar</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 col-12">
                  <div class="contact-bg mb-60">
                     <img src="assets/img/bg/contactos.png" alt="contact-bg">
                  </div>
               </div>
            </div>
         </div>
      </section>

      <div class="map-area">
         <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.7753042312092!2d-79.04685204964271!3d-8.124344994122803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d0cfa3b5c0b%3A0x20241834dce02596!2sAv.%20Juan%20Pablo%20II%2C%20Trujillo!5e0!3m2!1ses!2spe!4v1664292270311!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>


   </main>

   <?php include("assets/shared/footer.php"); ?>

   <!-- JS -->
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/parallax.js"></script>
   <script src="assets/js/backtotop.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>