<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .header-section{background:#4361ee;padding:.8rem 0}
        .system-title{font-size:2.4rem;font-weight:600;color:#fff;margin:0}
        .auth-buttons .btn{font-size:.8rem;padding:.3rem .8rem}
        .navbar{background:rgba(0,0,0,.1)!important;border-radius:8px;margin-top:1rem;padding:.5rem}
        .navbar-nav{gap:8px}
        .nav-link{color:#fff!important;padding:.6rem 1.2rem!important;position:relative;overflow:hidden;border-radius:6px;font-weight:500}
        .nav-link:before{content:'';position:absolute;inset:0;background:#fff;opacity:0;transition:.3s ease}
        .nav-link:hover:before,.nav-link.active:before{opacity:.2}
        .nav-link i{position:relative;font-size:1rem;width:20px;text-align:center}
        .nav-link span{position:relative;margin-left:8px;letter-spacing:.2px}
        .nav-link:hover{transform:translateY(-1px)}
        .navbar-toggler{padding:.4rem .6rem}
        @media (max-width:768px){
            .system-title{font-size:1.1rem}
            .navbar-nav{gap:4px}
            .nav-link{padding:.4rem 1rem!important}
        }
    </style>
</head>
<header class="header-section">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1 class="system-title">Vides monitoringa un analīzes sistēma</h1>
            <div class="auth-buttons">
                @if(!isset($is_logged) || !$is_logged)
                    <a href="/login" class="btn btn-light btn-sm"><i class="fas fa-sign-in-alt"> Login</i></a>
                    <a href="/register" class="btn btn-light btn-sm"><i class="fas fa-user-plus"> Register</i></a>
                @endif
                @if(isset($is_logged) && $is_logged)
                    <a href="/logout" class="btn btn-light btn-sm"><i class="fas fa-sign-out-alt"> Logout</i></a>
                @endif
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid p-0">
                <button class="navbar-toggler border-0 text-white p-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav gap-2">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">
                                <i class="fas fa-home"></i>
                                <span class="ms-2">Mājaslapa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->is('kontakti') ? 'active' : '' }}" href="/kontakti">
                                <i class="fas fa-envelope"></i>
                                <span class="ms-2">Kontakti</span>
                            </a>
                        </li>
                        @if(isset($is_logged) && $is_logged && session('admin', false))
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->is('allData/vietas') ? 'active' : '' }}" href="/allData/vietas">
                                <i class="fas fa-map-marker-alt"></i>
                                <span class="ms-2">Vietas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->is('allData/gaisakvalitate') ? 'active' : '' }}" href="/allData/gaisakvalitate">
                                <i class="fas fa-wind"></i>
                                <span class="ms-2">Gaisa Kvalitāte</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->is('allData/udenskvalitate') ? 'active' : '' }}" href="/allData/udenskvalitate">
                                <i class="fas fa-tint"></i>
                                <span class="ms-2">Ūdens Kvalitāte</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->is('allData/videspapildu') ? 'active' : '' }}" href="/allData/videspapildu">
                                <i class="fas fa-leaf"></i>
                                <span class="ms-2">Vīdes Papildus</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->is('allData/specialisti') ? 'active' : '' }}" href="/allData/specialisti">
                                <i class="fas fa-users"></i>
                                <span class="ms-2">Specialīsti</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />