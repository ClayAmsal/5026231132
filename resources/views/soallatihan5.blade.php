<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
            crossorigin="anonymous">
        <link rel="stylesheet"
            href="{{ asset('soallatihan5.css') }}">

        <script>
                function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    sidebar.classList.toggle('active');

    if (sidebar.classList.contains('active')) {
        mainContent.style.marginLeft = "0"; // Sidebar tertutup, geser ke kiri
    } else {
        mainContent.style.marginLeft = "260px"; // Sidebar terbuka, geser ke kanan
    }
}
            </script>
    </head>
    <body>
        <!-- Tombol toggle sidebar -->
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>

        <div class="sidebar">
            <div class="profile">
                <img src="images/Frame40792-3.png" alt="User Avatar">
                <div class="profile-info">
                    <h5>User</h5>
                    <p>user@mail.com</p>
                </div>
            </div>
            <div class="menu">
                <a href="#" class="active"><i class="fas fa-clipboard-list"></i>
                    Helperlog</a>
                <a href="#"><i class="fas fa-search"></i> Helperfind</a>
                <a href="#"><i class="fas fa-comments"></i> Helperassist</a>
            </div>
            <div class="logout">
                <a href="#" class="btn btn-outline-light"><i
                        class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
        </div>

        <div class="main-content">
            <h2 class="page-title">Pengajuan Kontrak</h2>

            <div class="contract-container">
                <!-- Profile Container -->
                <div class="profile-container">
                    <div class="profile-card">
                        <img src="images/image-4.png" alt="Profile Picture"
                            class="profile-img">
                    </div>

                    <div class="profile-info">
                        <h4>Nagisa Natsumi</h4>
                        <p>Perawat Lansia</p>
                        <div class="experience-rating">
                            <div class="experience">
                                <h3>4</h3>
                                <p>Tahun Pengalaman</p>
                            </div>
                            <div class="rating">
                                <h3>⭐ 4.6</h3>
                                <p>Rating</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contract Form -->
                <div class="contract-form">
                    <h3>Form Pengajuan Kontrak</h3>

                    <label for="name">Nama Pengaju</label>
                    <input type="text" id="name"
                        placeholder="Masukkan nama pengaju">

                    <label for="address">Alamat Pengaju</label>
                    <textarea id="address"
                        placeholder="Masukkan alamat lengkap anda"></textarea>

                    <label for="placement">Penempatan Kerja</label>
                    <input type="text" id="placement" value="Surabaya" disabled>

                    <div class="checkbox-container">
                        <input type="checkbox" id="outside-placement">
                        <label for="outside-placement">Ajukan Penempatan di luar
                            domisili</label>
                    </div>

                    <label for="contract-duration">Rencana Masa Kontrak</label>
                    <select id="contract-duration">
                        <option>1 bulan</option>
                        <option>3 bulan</option>
                        <option>6 bulan</option>
                    </select>

                    <button class="submit-btn">Ajukan Kontrak</button>
                </div>
            </div>
        </div>

    </body>
</html>
