<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Arriesgado College Foundation, Inc.')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #FF30A6 0%, #FF69B4 50%, #FFB6C1 100%);
            min-height: 100vh;
            font-family: 'Nunito', sans-serif;
        }
        
        /* Top Header with Address */
        .top-header {
            background: #FF30A6;
            color: white;
            padding: 8px 0;
            font-size: 0.9rem;
            border-bottom: 3px solid #FF1493;
        }
        .top-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        .school-info {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .school-info span {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .school-info i {
            font-size: 1rem;
            color: white;
        }
        .social-links {
            display: flex;
            gap: 15px;
        }
        .social-links a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 1.1rem;
        }
        .social-links a:hover {
            transform: translateY(-2px);
            color: #FFB6C1;
        }
        
        /* Main Navigation */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 4px 6px rgba(0,0,0,.1);
            padding: 0.8rem 0;
        }
        .navbar-brand {
            color: #FF30A6;
            font-weight: bold;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            height: 45px;
            width: auto;
            margin-right: 10px;
            border-radius: 5px;
        }
        .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #FF30A6 !important;
        }
        .btn-login {
            border: 2px solid #FF30A6;
            color: #FF30A6 !important;
            border-radius: 50px;
            padding: 8px 25px !important;
            transition: all 0.3s;
        }
        .btn-login:hover {
            background-color: #FF30A6;
            color: white !important;
        }
        .btn-register {
            background-color: #FF30A6;
            color: white !important;
            border-radius: 50px;
            padding: 8px 25px !important;
            transition: all 0.3s;
        }
        .btn-register:hover {
            background-color: #FF1493;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 48, 166, 0.4);
        }
        .content-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin: 30px 0;
        }
        .table thead {
            background: linear-gradient(135deg, #FF30A6 0%, #FF69B4 100%);
            color: white;
        }
        .btn-primary {
            background: linear-gradient(135deg, #FF30A6 0%, #FF69B4 100%);
            border: none;
            border-radius: 50px;
            padding: 10px 25px;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 48, 166, 0.4);
        }
        
        /* Simple Footer */
        .simple-footer {
            background: rgba(255, 255, 255, 0.95);
            color: #666;
            padding: 15px 0;
            margin-top: 30px;
            border-top: 2px solid #FF30A6;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- TOP HEADER WITH ADDRESS (This is what you wanted) -->
    <div class="top-header">
        <div class="container">
            <div class="school-info">
                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    201 Bonifacio St., Tagum City, 8100
                </span>
                <span>
                    <i class="fas fa-phone"></i>
                    (084) 216-1234
                </span>
                <span>
                    <i class="fas fa-envelope"></i>
                    info@acfi.edu.ph
                </span>
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('acfi.png') }}" 
                     alt="ACFI Logo" 
                     onerror="this.style.display='none'">
                Arriesgado College Foundation, Inc.
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Public Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">View Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">View Courses</a>
                    </li>
                    
                    @auth
                        <!-- Admin Links (when logged in) -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('enrollments.create') }}">Enroll Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                Logout
                            </button>
                        </li>
                    @else
                        <!-- Guest Links (not logged in) -->
                        <li class="nav-item">
                            <a class="nav-link btn-login" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-register" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <i class="fas fa-question-circle me-2" style="color: #FF30A6;"></i>
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="py-4">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            <div class="content-card">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Simple Footer -->
    <div class="simple-footer">
        <div class="container text-center">
            <i class="fas fa-copyright"></i>
            {{ date('Y') }} Arriesgado College Foundation, Inc. 
            <i class="fas fa-heart" style="color: #FF30A6;"></i> 
            All rights reserved.
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>