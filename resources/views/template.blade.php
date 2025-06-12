<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clay Amsal Sebastian Hutabarat : 5026231132</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        /* Jumbotron pink gradien dan rounded */
        .jumbotron {
            background: linear-gradient(135deg, #d3181e, #232222);
            color: white;
            padding: 3rem 1rem;
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
            margin-bottom: 1.5rem;
        }

        /* Navbar center and animation */
        .navbar {
            justify-content: center;
            border-radius: 0.75rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav {
            flex-direction: row;
            gap: 10px;
        }

        .nav-link {
            margin: 0 10px;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }

        .nav-link:hover {
            background-color: #d3181e;
            color: #f9f9f9;
            transform: scale(1.05);
        }

        .nav-link:active {
            transform: scale(0.95);
            background-color: #f5c6cb;
        }

        /* Outline for content */
        .content-wrapper {
            padding: 2rem;
            border-radius: 1rem;
            background-color: #ffffff;
        }
    </style>
</head>

<body class="bg-light">

    <div class="jumbotron text-center">
        <h1 class="display-5 fw-bold">5026231132 : Clay Amsal Sebastian Hutabarat</h1>
    </div>

    <div class="container mt-3">

        <nav class="navbar navbar-expand-sm bg-white">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bis">Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">Latihan 3</a>
                </li>
            </ul>
        </nav>

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

</body>

</html>
