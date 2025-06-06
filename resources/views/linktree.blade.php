a<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>EA SPORTS F1 | Linktree Clone</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
            rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('linktree.css') }}" />
    </head>
    <body>
        <div class="container">
            <div class="content-wrapper">
                <!-- BANNER -->
                <div class="position-relative w-100 banner">
                    <img src="images/F125-ProfilePic-AllPlatforms2.png"
                        class="img-fluid rounded" alt="Banner" />

                    <!-- Gradient + Content wrapper -->
                    <div
                        class="overlay-content d-flex flex-column justify-content-end text-center text-white">
                        <div class="fade-overlay"></div>

                        <!-- Profile Info -->
                        <div class="p-3 position-relative">
                            <h5 class="fw-bold mb-1">EA SPORTS F1 <i
                                    class="bi bi-patch-check-fill text-primary"></i></h5>
                            <p class="small mb-3">F1 25 • Out May 30 <span
                                    class="text-danger">●</span> ESRB: E • PEGI:
                                3</p>

                            <!-- Switch Tabs -->
                            <div class="btn-group custom-tab-group p-1"
                                role="group" id="tab-group">
                                <div class="tab-indicator"
                                    id="tab-indicator"></div>
                                <button onclick="switchTab('links')"
                                    class="btn rounded-pill active-tab">Links</button>
                                <button onclick="switchTab('shop')"
                                    class="btn rounded-pill">Shop</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- LINK SECTION -->
                <div id="links-section">
                    <a href="https://www.youtube.com/watch?v=xDzAUYH6I7A"
                        target="_blank" class="text-decoration-none text-dark">
                        <div class="card link-card mb-3">
                            <img
                                src="images/EAF125-DEEP-DIVE-THUMBNAILS-EPIC-SOCIAL.jpeg"
                                class="card-img-top" alt="Link Image">
                            <div class="card-body">
                                <p class="card-text"><i
                                        class="bi bi-play-btn-fill"></i> My Team
                                    & Career – Deep Dive</p>
                            </div>
                        </div>
                    </a>

                    <!-- Two Horizontal Cards -->
                    <a href="http://x.ea.com/83759" target="_blank"
                        class="text-decoration-none text-dark">
                        <div
                            class="card d-flex flex-row align-items-center p-2 mb-3 shadow-sm rounded-4">
                            <img src="images/F125-ICONIC-ProfilePic-1080x1080.png"
                                class="rounded-3 me-3"
                                style="width: 48px; height: 48px;"
                                alt="F1 25 Logo">
                            <div
                                class="flex-grow-1 d-flex align-items-center justify-content-center">
                                <p class="mb-0 fw-medium">My Team & Career – New
                                    Features</p>
                            </div>
                            <i class="bi bi-three-dots-vertical"></i>
                        </div>
                    </a>

                    <a href="http://x.ea.com/83698" target="_blank"
                        class="text-decoration-none text-dark">
                        <div
                            class="card d-flex flex-row align-items-center p-2 mb-3 shadow-sm rounded-4">
                            <img src="images/F125-ICONIC-ProfilePic-1080x1080.png"
                                class="rounded-3 me-3"
                                style="width: 48px; height: 48px;"
                                alt="F1 25 Logo">
                            <div
                                class="flex-grow-1 d-flex align-items-center justify-content-center">
                                <p class="mb-0 fw-medium">What's new in F1
                                    25?</p>
                            </div>
                            <i class="bi bi-three-dots-vertical"></i>
                        </div>
                    </a>
                </div>

                <!-- SHOP SECTION -->
                <div id="shop-section" class="d-none">
                    <div class="shop-row">
                        <div class="card shop-card position-relative">
                            <img src="images/f0_image.png" class="card-img-top"
                                alt="Iconic Edition">
                            <div class="card-body text-center">
                                <p class="card-text">Iconic Edition</p>
                            </div>
                            <a href="http://x.ea.com/83693" target="_blank"
                                rel="noopener noreferrer"
                                class="stretched-link"></a>
                        </div>

                        <div class="card shop-card">
                            <img src="images/f1fa_image.png" class="card-img-top"
                                alt="Standard Edition">
                            <div class="card-body text-center">
                                <p class="card-text">Standard Edition</p>
                            </div>
                            <a href="http://x.ea.com/83692" target="_blank"
                                rel="noopener noreferrer"
                                class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="https://facebook.com/EASPORTSF1" target="_blank" class="mx-2 text-white fs-4"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/EASPORTSF1" target="_blank" class="mx-2 text-white fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="https://tiktok.com/@EASPORTSF1" target="_blank" class="mx-2 text-white fs-4"><i class="bi bi-tiktok"></i></a>
                    <a href="https://twitter.com/EASPORTSF1" target="_blank" class="mx-2 text-white fs-4"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://youtube.com/@EASPORTSF1" target="_blank" class="mx-2 text-white fs-4"><i class="bi bi-youtube"></i></a>
                  </div>


            </div>
        </div>

        <script>
            function switchTab(tab) {
              const links = document.getElementById('links-section');
              const shop = document.getElementById('shop-section');
              const buttons = document.querySelectorAll('.btn-group .btn');
              const indicator = document.getElementById('tab-indicator');

              if (tab === 'links') {
                links.classList.remove('d-none');
                shop.classList.add('d-none');
                buttons[0].classList.add('active-tab');
                buttons[1].classList.remove('active-tab');
                indicator.style.transform = 'translateX(0%)';
              } else {
                shop.classList.remove('d-none');
                links.classList.add('d-none');
                buttons[1].classList.add('active-tab');
                buttons[0].classList.remove('active-tab');
                indicator.style.transform = 'translateX(100%)';
              }
            }
            </script>

    </body>
</html>
