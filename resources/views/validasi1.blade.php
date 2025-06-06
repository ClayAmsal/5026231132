<html>

<head>
    <title>
        Pendaftaran ISE
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function validasi1() {
            var nrp = document.getElementById("nrp").value;
            var nama = document.getElementById("nama").value;

            if (nrp.length == 0) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP tidak boleh kosong",
                    icon: "error"
                });
                return false;
            }
            if (nama.length == 0) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "Nama tidak boleh kosong",
                    icon: "error"
                });
                return false;
            }
            if (nama.length < 2) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "Nama terlalu pendek",
                    icon: "error"
                });
                return false;
            }

            if (/\d/.test(nama)) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "Nama tidak boleh angka",
                    icon: "error"
                });
                return false;
            }

            if (!/^\d+$/.test(nrp)) {
                Swal.fire({
                    title: "Kesalahan Input",
                    text: "NRP tidak boleh huruf",
                    icon: "error"
                });
                return false;
            }

        }
    </script>
</head>

<body>
    <div class="container">
        <form action="https://google.co.id" method="get" onsubmit="return validasi1();">
            <b3>Form Pendaftaran</b3>
            NRP:
            <input type="text" name id="nrp" class="form-control"
                placeholder="Silahkan diisi 10 digit NRP, harus angka, harus diisi">
            <br>
            Nama:
            <input type="text" name id="nama" class="form-control" placeholder="Isikan nama Peserta yang Valid">
            <br>
            <input type="submit" class="btn btn-success" value="daftar">
        </form>
    </div>
</body>

</html>
