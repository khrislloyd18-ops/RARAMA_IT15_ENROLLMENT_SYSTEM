<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arriesgado College Foundation, Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #FF30A6 0%, #FF69B4 50%, #FFB6C1 100%);
            min-height: 100vh;
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .navbar {
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
            padding: 1rem 0;
        }
        
        .navbar-brand {
            color: #FF30A6;
            font-weight: bold;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img {
            height: 55px;  /* Increased height */
            width: auto;
            margin-right: 15px;
            border-radius: 15px;  /* Smooth rounded corners */
            border: 3px solid white;  /* 3px stroke border */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            object-fit: contain;
            background: white;
            padding: 3px;
            transition: transform 0.3s ease;
        }
        
        .navbar-brand img:hover {
            transform: scale(1.05);
        }
        
        .logo-fallback {
            height: 55px;
            width: 55px;
            background: linear-gradient(135deg, #FF30A6, #FF69B4);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            border: 3px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
        
        .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin: 0 10px;
        }
        
        .btn-login {
            border: 2px solid #FF30A6;
            color: #FF30A6 !important;
            border-radius: 50px;
            padding: 8px 25px !important;
        }
        
        .btn-register {
            background-color: #FF30A6;
            color: white !important;
            border-radius: 50px;
            padding: 8px 25px !important;
        }
        
        .hero-section {
            color: white;
            text-align: center;
            padding: 60px 0 80px;
        }
        
        .hero-logo {
            margin-bottom: 25px;
        }
        
        .hero-logo img {
            max-width: 180px;  /* Larger hero logo */
            max-height: 180px;
            border-radius: 25px;  /* More rounded corners */
            border: 3px solid white;  /* 3px stroke border */
            background: white;
            padding: 5px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        
        .hero-logo img:hover {
            transform: scale(1.05);
        }
        
        .hero-logo-fallback {
            width: 180px;
            height: 180px;
            background: linear-gradient(135deg, #FF30A6, #FF69B4);
            border-radius: 25px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            font-weight: bold;
            border: 3px solid white;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.95;
        }
        
        .menu-list {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .menu-list li {
            margin: 0;
        }
        
        .menu-list a {
            color: white;
            text-decoration: none;
            padding: 12px 40px;
            border: 2px solid white;
            border-radius: 50px;
            display: inline-block;
            min-width: 200px;
            font-weight: 600;
            transition: all 0.3s;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }
        
        .menu-list a:hover {
            background: white;
            color: #FF30A6;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 48, 166, 0.3);
        }
        
        /* Footer */
        .footer {
            background: linear-gradient(135deg, #005FFF 0%, #0047CC 100%);
            color: white;
            padding: 30px 0 20px;
            margin-top: 50px;
            border-top: 4px solid #003399;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .footer-logo img {
            height: 60px;  /* Larger footer logo */
            width: auto;
            border-radius: 15px;
            border: 3px solid white;  /* 3px stroke border */
            background: white;
            padding: 3px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            object-fit: contain;
        }
        
        .footer-logo-fallback {
            height: 60px;
            width: 60px;
            background: rgba(255,255,255,0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            border: 3px solid white;
        }
        
        .footer-logo-text h3 {
            margin: 0;
            font-size: 1.2rem;
        }
        
        .footer-logo-text p {
            margin: 5px 0 0;
            opacity: 0.9;
            font-size: 0.85rem;
        }
        
        .footer-info {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .footer-info-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .footer-info-item i {
            width: 20px;
        }
        
        .footer-social {
            display: flex;
            gap: 10px;
        }
        
        .footer-social a {
            color: white;
            width: 35px;
            height: 35px;
            background: rgba(255,255,255,0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s;
            border: 1px solid rgba(255,255,255,0.3);
        }
        
        .footer-social a:hover {
            background: white;
            color: #005FFF;
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- Try to load logo, show fallback if it fails -->
                <img src="{{ asset('acfi.png') }}" 
                     alt="ACFI Logo"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="logo-fallback" style="display: none;">ACFI</div>
                Arriesgado College Foundation, Inc.
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">View Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">View Courses</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn nav-link">Logout</button>
                            </form>
                        </li>
                    @else
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

    <!-- Hero Section with Logo -->
    <div class="hero-section">
        <div class="container">
            <div class="hero-logo">
                <!-- Try to load logo, show fallback if it fails -->
                <img src="{{ asset('acfi.png') }}" 
                     alt="ACFI Logo"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='inline-flex';">
                <div class="hero-logo-fallback" style="display: none;">ACFI</div>
            </div>
            <h1 class="hero-title">Arriesgado College Foundation, Inc.</h1>
            <p class="hero-subtitle">Your Academic Management System</p>
            
            <ul class="menu-list">
                <li><a href="{{ route('students.index') }}">View Students</a></li>
                <li><a href="{{ route('courses.index') }}">View Courses</a></li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{ asset('acfi.png') }}" 
                         alt="ACFI Logo"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="footer-logo-fallback" style="display: none;">ACFI</div>
                    <div class="footer-logo-text">
                        <h3>Arriesgado College Foundation, Inc.</h3>
                        <p>Excellence • Integrity • Service</p>
                    </div>
                </div>
                
                <div class="footer-info">
                    <div class="footer-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>201 Bonifacio St., Tagum City, 8100</span>
                    </div>
                    <div class="footer-info-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>(084) 216-1234</span>
                    </div>
                    <div class="footer-info-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@acfi.edu.ph</span>
                    </div>
                </div>
                
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <i class="fas fa-copyright"></i>
                {{ date('Y') }} Arriesgado College Foundation, Inc. 
                <i class="fas fa-heart" style="color: #FF30A6;"></i> 
                All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>