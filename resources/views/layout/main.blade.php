<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dio Dashboard | {{$title}}</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <span class="me-2">Dio_18337</span>
            </div>

            <div class="list-group list-group-flush my-3">
                <a href="{{ route('sidebar.statistikBeranda') }}" class="list-group-item list-group-item-action bg-transparent second-text {{ ($title === "Beranda") ? 'active' : 'fw-bold' }}">
                    <i class="fas fa-house me-2"></i>Beranda
                </a>
                <a href="{{ route('pages.index') }}" class="list-group-item list-group-item-action bg-transparent second-text {{ ($title === "Data Barang") ? 'active' : 'fw-bold' }}">
                    <i class="fas fa-truck-fast me-2"></i>Data Barang
                </a>
                <a href="{{'/profil' }}" class="list-group-item list-group-item-action bg-transparent second-text {{ ($title === "Profil") ? 'active' : 'fw-bold' }}">
                    <i class="fas fa-user-gear me-2"></i>Profil
                </a>
            </div>

        </div>  
        <!-- Sidebar End -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item-dropdown">
                            <a href="" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Dio Saputra
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="" class="dropdown-item">Setting</a></li>
                                <li><a href="" class="dropdown-item">LogOut</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-4 " style="padding-top: 20px">
                @yield('container')
            </div>
        </div>
    </div>
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton =  document.getElementById("menu-toggle")

        toggleButton.onclick = function(){
            el.classList.toggle("toggled")
        }
    </script>
</body>
</html>