<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Arriesgado College Foundation, Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #FF30A6 0%, #FF69B4 50%, #FFB6C1 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .login-container {
            background: white;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(255, 48, 166, 0.3);
            width: 100%;
            max-width: 450px;
            animation: fadeIn 0.5s ease;
            border: 3px solid rgba(255, 255, 255, 0.5);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .logo-section {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-section img {
            max-width: 100px;
            max-height: 100px;
            width: auto;
            height: auto;
            margin-bottom: 10px;
            filter: drop-shadow(0 5px 10px rgba(255, 48, 166, 0.3));
            border-radius: 15px;
        }
        .school-name {
            color: #FF30A6;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .subtitle {
            color: #666;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1rem;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
            display: block;
            font-size: 0.95rem;
        }
        .input-group {
            position: relative;
        }
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #FF30A6;
            z-index: 10;
        }
        .form-control {
            border-radius: 50px;
            padding: 14px 20px 14px 45px;
            border: 2px solid #ffe0f0;
            transition: all 0.3s;
            width: 100%;
            font-size: 1rem;
            box-sizing: border-box;
            background-color: #fff9fc;
        }
        .form-control:focus {
            border-color: #FF30A6;
            box-shadow: 0 0 0 3px rgba(255, 48, 166, 0.2);
            outline: none;
            background-color: white;
        }
        .form-control::placeholder {
            color: #ffb6d9;
            font-size: 0.9rem;
        }
        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        .form-check-input {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            cursor: pointer;
            border: 2px solid #FF30A6;
        }
        .form-check-input:checked {
            background-color: #FF30A6;
            border-color: #FF30A6;
        }
        .form-check-label {
            color: #666;
            cursor: pointer;
            user-select: none;
            font-size: 0.95rem;
        }
        .btn-login {
            background: linear-gradient(135deg, #FF30A6 0%, #FF69B4 100%);
            border: none;
            border-radius: 50px;
            padding: 14px;
            color: white;
            font-weight: bold;
            width: 100%;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 48, 166, 0.4);
        }
        .btn-login:active {
            transform: translateY(0);
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #ffe0f0;
        }
        .register-link p {
            color: #666;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
        .register-link a {
            color: #FF30A6;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            transition: color 0.3s;
            display: inline-block;
            padding: 8px 25px;
            border: 2px solid #FF30A6;
            border-radius: 50px;
        }
        .register-link a:hover {
            background-color: #FF30A6;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 48, 166, 0.3);
        }
        .back-home {
            text-align: center;
            margin-top: 20px;
        }
        .back-home a {
            color: #999;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .back-home a:hover {
            color: #FF30A6;
        }
        .error-message {
            background-color: #fff0f5;
            color: #FF30A6;
            padding: 12px;
            border-radius: 50px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px solid #FF30A6;
            font-weight: 500;
        }
        .success-message {
            background-color: #f0fff0;
            color: #28a745;
            padding: 12px;
            border-radius: 50px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px solid #28a745;
        }
        .forgot-password {
            text-align: right;
            margin-top: 5px;
        }
        .forgot-password a {
            color: #FF30A6;
            text-decoration: none;
            font-size: 0.85rem;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo and School Name -->
        <div class="logo-section">
            <img src="{{ asset('acfi.png') }}" 
                 alt="ACFI Logo" 
                 onerror="this.style.display='none'; document.getElementById('logo-fallback').style.display='block';">
            <div id="logo-fallback" style="display: none; font-size: 3rem; color: #FF30A6;">
                <i class="fas fa-university"></i>
            </div>
            <div class="school-name">Arriesgado College Foundation, Inc.</div>
            <div class="subtitle">Login to your account</div>
        </div>
        
        <!-- Error Messages -->
        @if($errors->any())
            <div class="error-message">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ $errors->first() }}
            </div>
        @endif
        
        @if(session('success'))
            <div class="success-message">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="error-message">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Email Field -->
            <div class="form-group">
                <label for="email" class="form-label">
                    <i class="fas fa-envelope me-2" style="color: #FF30A6;"></i>
                    Email Address
                </label>
                <div class="input-group">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           autofocus 
                           placeholder="Enter your email">
                </div>
            </div>
            
            <!-- Password Field -->
            <div class="form-group">
                <label for="password" class="form-label">
                    <i class="fas fa-lock me-2" style="color: #FF30A6;"></i>
                    Password
                </label>
                <div class="input-group">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           id="password" 
                           name="password" 
                           required 
                           placeholder="Enter your password">
                </div>
                <div class="forgot-password">
                    <a href="#"><i class="fas fa-question-circle me-1"></i>Forgot Password?</a>
                </div>
            </div>
            
            <!-- Remember Me Checkbox -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">
                    <i class="far fa-check-square me-1" style="color: #FF30A6;"></i>
                    Remember me
                </label>
            </div>
            
            <!-- Login Button -->
            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt me-2"></i>
                Login
            </button>
            
            <!-- Register Link -->
            <div class="register-link">
                <p>Don't have an account?</p>
                <a href="{{ route('register') }}">
                    <i class="fas fa-user-plus me-2"></i>
                    Create Account
                </a>
            </div>
            
            <!-- Back to Home -->
            <div class="back-home">
                <a href="{{ url('/') }}">
                    <i class="fas fa-arrow-left me-1"></i>
                    Back to Home
                </a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>