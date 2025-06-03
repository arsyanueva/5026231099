<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT. INDO BOGA SUKSES Tbk.</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
          function validasi() {
            var nama = document.getElementById("nama").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var pesan = document.getElementById("pesan").value;

            if (nama.length == 0) {
              swal("Pesan!", "Nama harus diisi", "error");
              document.getElementById("nama").focus();
              return false; // Menghentikan pengiriman form
            }
            if (email.length == 0) {
              swal("Pesan!", "Email harus diisi", "error");
              document.getElementById("email").focus();
              return false; // Menghentikan pengiriman form
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
              swal("Pesan!", "Email tidak valid", "error");
              document.getElementById("email").focus();
              return false; // Menghentikan pengiriman form
            }
            if (subject.length == 0) {
              swal("Pesan!", "Subject harus diisi", "error");
              document.getElementById("subject").focus();
              return false; // Menghentikan pengiriman form
            }
            if (pesan.length == 0) {
              swal("Pesan!", "Pesan harus diisi", "error");
              document.getElementById("pesan").focus();
              return false; // Menghentikan pengiriman form
            }
            else {
              // Jika semua validasi berhasil, kirim form
              swal("Pesan!", "Form berhasil dikirim", "success");
              return true;
            }
          }
        </script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">
                  <img src="assets/img/ibg_logo.png" alt="Logo" style="height: 30px; margin-left: 10px;">
                  PT. INDO BOGA SUKSES Tbk.</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">PT. INDO BOGA SUKSES Tbk.</h1>
                            <h2 class="mb-5">Industri Makanan, Minuman, & Perhotelan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/About_Us_Images.png'); size: 50%;"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h4>Tentang Kami</h4>
                        <h2>PT. INDO BOGA SUKSES TBK</h2>
                        <p class="lead mb-0">PT Indo Boga Sukses Tbk (“Perseroan”) berdiri pada tahun 2019 dan mulai beroperasi pada tahun yang sama. Kegiatan usaha utama Perseroan adalah bergerak dalam bidang Food and Beverage Industry dengan memiliki dan mengoperasikan D’Monaco Restaurant yang memiliki tema dan nuansa Eropa. Special Events yang ditawarkan oleh D’Monaco Restaurant antara lain: Wedding Reception, Birthday Celebration, Anniversary, Pre-wedding Photoshoot, Bridal Shower, Board and Corporate Meeting, Arisan, Fashion Show, Fine Dining, dan acara-acara sosial lainnya.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Berita</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/vaksin-news.jpg" alt="..." />
                            <h5>Vaksinasi</h5>
                            <p class="font-weight-light mb-0">Vaksinasi Dalam rangka mengikuti protocol Kesehatan yang diadakan oleh pemerintah, bahkan untuk melakukan vaksin juga dapat dilakukan di D’Monaco Restaurant. D’Monaco Restaurant mengadakan vaksin dalam rangka “Percepatan Vaksin” yang bekerjasama dengan pihak Puskesmas Sariharjo.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                          <img class="img-fluid rounded-circle mb-3" src="assets/img/Pembagian-Beras-Warga-Surabaya-1024x1013.jpg" alt="..." />
                          <h5>PT Indo Boga Sukses bagikan 1.708 sak beras untuk warga Surabaya terdampak</h5>
                          <p class="font-weight-light mb-0">PT Indo Boga Sukses bagikan 1.708 sak beras untuk warga Surabaya terdampak PT Indo Boga Sukses melalui anak perusahaan PT Kairos membagikan… </p>
                      </div>
                  </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/fashionnews.jpg" alt="..." />
                            <h5>Fashion Show</h5>
                            <p class="font-weight-light mb-0">Fashion Show Dengan bangunan dan area D’Monaco Restaurant yang mewah dan megah, seringkali diadakan event,salah satunya event Fashion show dengan tema White Party.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Our Product-->
        <section class="product text-center">
          <div class="container">
            <h2 class="mb-5">Produk Kami</h2>
              <div class="row">
                  <div class="col-lg-2">
                    <div class="product-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid mb-3" src="assets/img/Product01.png" alt="..." />
                      </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="product-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid mb-3" src="assets/img/Product02.png" alt="..." />
                      </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="product-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid mb-3" src="assets/img/Product03.png" alt="..." />
                      </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="product-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid mb-3" src="assets/img/Product04.png" alt="..." />
                      </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="product-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid mb-3" src="assets/img/Product05.png" alt="..." />
                      </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="product-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid mb-3" src="assets/img/Product06.png" alt="..." />
                      </div>
                  </div>
              </div>
          </div>
      </section>

        <!--Contact Form -->
        <main class="container bg-light justify-center p-6">
            <section class="p-10 md:w-2/3">
              <h2 class="font-normal mb-8">Kirim kami pesan!</h2>
              <form class="space-y-6 max-w-3xl" method="get" onsubmit="return validasi();">
                <div class="flex flex-col md:flex-row md:space-x-10 space-y-6 md:space-y-0">
                  <div class="flex-1 flex flex-col">
                    <label
                      for="nama"
                      class="text-xs font-extrabold mb-1 uppercase tracking-wide"
                      >Nama</label
                          >
                  <input
                    id="nama"
                    type="text"
                    placeholder="Nama"
                    class="form-control border-b border-gray-300 focus:border-[#1dd28a] text-gray-400 placeholder-gray-400 focus:outline-none"
                  />
                </div>
                <div class="flex-1 flex flex-col">
                  <label
                    for="email"
                    class="text-xs font-extrabold mb-1 uppercase tracking-wide"
                    >Email</label
                  >
                  <input
                    id="email"
                    type="email"
                    placeholder="Email"
                    class="form-control border-b border-gray-300 focus:border-[#1dd28a] text-gray-400 placeholder-gray-400 focus:outline-none"
                  />
                </div>
              </div>
              <div class="flex flex-col">
                <label
                  for="subject"
                  class="text-xs font-extrabold mb-1 uppercase tracking-wide"
                  >Subject</label
                >
                <input
                  id="subject"
                  type="text"
                  placeholder="Subject"
                  class="form-control border-gray-300 focus:border-[#1dd28a] text-gray-400 placeholder-gray-400 focus:outline-none"
                />
              </div>
              <div class="flex flex-col mb-3">
                <label
                  for="pesan"
                  class="text-xs font-extrabold mb-1 uppercase tracking-wide"
                  >Pesan</label
                >
                <textarea
                  id="pesan"
                  rows="3"
                  placeholder="Tuliskan pesan disini.."
                  class="form-control border-b border-gray-300 focus:border-[#1dd28a] text-gray-400 placeholder-gray-400 focus:outline-none resize-none"
                ></textarea>
              </div>
              <button
                type="submit"
                class="bg-[#1dd28a] text-black px-5 py-2 rounded-md shadow-md hover:shadow-lg transition-shadow duration-200 font-semibold"
                onsubmit="validasis();"
              >
                Kirim
              </button>
            </form>
          </section>
        </main>

        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; All Rights Reserved.</p>
                    </div>

                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
