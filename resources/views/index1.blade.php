<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>PT Aspirasi Hidup Indonesia Tbk</title>
    <link rel="icon" type="image/x-icon" href="https://ahi.id/assets/img/ahi-icon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round"
      rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('styles.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      function validasi() {
        var namaDepan = document.getElementById("namaDepan").value;
        var namaBelakang = document.getElementById("namaBelakang").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        if(namaDepan.length == 0 && namaBelakang == 0 && email == 0 && message == 0){
          Swal.fire({
              title: "Kesalahan Input",
              text: "Form harus diisi",
              icon: "error"
          });
          return false;
        }

        if(namaDepan.length == 0){
          Swal.fire({
              title: "Kesalahan Input",
              text: "Nama depan harus diisi",
              icon: "error"
          });
          return false;
        }

        if(namaBelakang.length == 0){
          Swal.fire({
              title: "Kesalahan Input",
              text: "Nama belakang harus diisi",
              icon: "error"
          });
          return false;
        }
      }
    </script>

  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">PT Aspirasi Hidup Indonesia
          Tbk</a>
        <button class="navbar-toggler navbar-toggler-right" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="https://ahi.id/en/tentang-kami">About
                Us</a></li>
            <li class="nav-item"><a class="nav-link"
                href="https://ahi.id/en/investor">Investor</a></li>
            <li class="nav-item"><a class="nav-link"
                href="https://ahi.id/en/keberlanjutan">Sustainability</a></li>
                <li class="nav-item"><a class="nav-link"
                  href="https://ahi.id/en/berita">News</a></li>
                  <li class="nav-item"><a class="nav-link"
                    href="https://ahi.id/en/karir">Careers</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
      <div
        class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
          <div class="text-center">
            <h1 class="mx-auto my-0 text-uppercase">Welcome</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Let's share inspirations
              with PT Aspirasi Hidup Indonesia Tbk for a better life</h2>
            <a class="btn btn-primary" href="https://ahi.id/en/tentang-kami">About us</a>
          </div>
        </div>
      </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8">
            <h2 class="text-white mb-4">Always Inspiring and Fulfilling Customer
              Aspirations</h2>
            <p class="text-white-50">
              Comitted to profoundly inspire and provide various needs for every
              household.
            </p>
          </div>
        </div>
        <img class="img-fluid" src="images/image.png" alt="..." />
      </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
      <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
          <div style="padding-left: 5px; padding-right: 5px" class="col-xl-3 col-lg-7" ><img class="img-fluid mb-3 mb-lg-0"
              src="images/people.jpg" alt="..." />
            <a style="padding-left: 5px; padding-right: 5px" href="https://ahi.id/en/keberlanjutan/people"> <img
                src="images/people_button.jpg" width="296px" alt> </a>
          </div>
          <div style="padding-left: 5px; padding-right: 5px" class="col-xl-3 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
              src="images/environment.jpg" alt="..." />
            <a style="padding-left: 5px; padding-right: 5px" href="https://ahi.id/en/keberlanjutan/planet"> <img
                src="images/environment_button.jpg" width="296px" alt> </a></div>
          <div style="padding-left: 5px; padding-right: 5px" class="col-xl-3 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
              src="images/business.jpg" alt="..." />
            <a style="padding-left: 5px; padding-right: 5px" href="https://ahi.id/en/keberlanjutan/community"> <img
                src="images/business_button.jpg" width="296px" alt> </a></div>
          <div class="col-xl-3 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Sustainability Commitments</h4>
            </div>
          </div>
        </div>
        <!-- Project One Row-->
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
          <div class="col-lg-6"><img class="img-fluid"
              src="images/investor_image.jpg" alt="..." /></div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div
                  class="project-text w-100 my-auto text-center text-lg-left">
                  <h6 class="text-white">Investor</h6>
                  <h4 class="text-white">Our Responsibility</h4>
                  <p class="mb-0 text-white-50">Maintain relations with
                    stakeholders through transparency as a public company. Find
                    out more about our corporate activities</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Project Two Row-->
        <div class="row gx-0 justify-content-center">
          <div class="col-lg-6"><img class="img-fluid"
              src="images/karier_image.jpg" alt="..." /></div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div
                  class="project-text w-100 my-auto text-center text-lg-right">
                  <h6 class="text-white">Be part of</h6>
                  <h4 class="text-white">PT Aspirasi Hidup Indonesia Tbk</h4>
                  <p class="mb-0 text-white-50">Let's share values and
                    inspiration and grow to become professionals.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- Contact Form-->
      <section>
        <div class="container py-4">
          <div class="row">
            <div
              class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
              <h3 class="text-center">Contact us</h3>
              <form id="contactForm" onsubmit="return validasi();">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-dynamic mb-4">
                        <label class="form-label">First Name:  </label>
                        <input class="form-control" aria-label="First Name..."
                          type="text" id="namaDepan">
                      </div>
                    </div>
                    <div class="col-md-6 ps-2">
                      <div class="input-group input-group-dynamic">
                        <label class="form-label">Last Name:  </label>
                        <input type="text" class="form-control" placeholder
                          aria-label="Last Name..." id="namaBelakang">
                      </div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <div class="input-group input-group-dynamic">
                      <label class="form-label">Email Address:  </label>
                      <input type="email" class="form-control" id="email">
                    </div>
                  </div>
                  <div class="input-group mb-4 input-group-static">
                    <label>Your message:  </label>
                    <textarea name="message" class="form-control" id="message"
                      rows="4"></textarea>
                  </div>
                  <div class="row">

                    <div class="col-md-12">
                      <button type="submit"
                        class="btn bg-gradient-dark w-100">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer-->
      <footer class="footer bg-black small text-center text-white-50"><div
          class="container px-4 px-lg-5">Copyright &copy; Your Website
          2023</div></footer>
      <!-- Bootstrap core JS-->
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="{{ asset('scripts.js') }}"></script>
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <!-- * *                               SB Forms JS                               * *-->
      <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
  </html>
