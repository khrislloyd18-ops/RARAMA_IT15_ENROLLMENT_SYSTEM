<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Arriesgado College Foundation, Inc.</title>
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
        .register-container {
            background: white;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(255, 48, 166, 0.3);
            width: 100%;
            max-width: 500px;
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
            margin-bottom: 20px;
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
        .btn-register {
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
            margin: 25px 0 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn-register:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 48, 166, 0.4);
        }
        .btn-register:active {
            transform: translateY(0);
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #ffe0f0;
        }
        .login-link p {
            color: #666;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }
        .login-link a {
            color: #FF30A6;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s;
            display: inline-block;
            padding: 8px 25px;
            border: 2px solid #FF30A6;
            border-radius: 50px;
        }
        .login-link a:hover {
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
        .error-message ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        .error-message li {
            padding: 3px 0;
        }
        .password-hint {
            font-size: 0.8rem;
            color: #FF30A6;
            margin-top: 5px;
            margin-left: 15px;
        }
        .terms {
            display: flex;
            align-items: center;
            margin: 15px 0;
            font-size: 0.9rem;
        }
        .terms input {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            border: 2px solid #FF30A6;
        }
        .terms a {
            color: #FF30A6;
            text-decoration: none;
            font-weight: 600;
        }
        .terms a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Logo and School Name -->
        <div class="logo-section">
            <img src="{{ asset('acfi.png') }}" 
                 alt="ACFI Logo" 
                 onerror="this.style.display='none'; document.getElementById('logo-fallback').style.display='block';">
            <div id="logo-fallback" style="display: none; font-size: 3rem; color: #FF30A6;">
                <i class="fas fa-university"></i>
            </div>
            <div class="school-name">Arriesgado College Foundation, Inc.</div>
            <div class="subtitle">Create your account</div>
        </div>
        
        <!-- Error Messages -->
        @if($errors->any())
            <div class="error-message">
                <i class="fas fa-exclamation-circle me-2"></i>
                <ul>
                    @foreach($errors->all() as $error)
                        <li><i class="fas fa-times me-2"></i>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        @if(session('error'))
            <div class="error-message">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
            </div>
        @endif

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- Full Name Field -->
            <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fas fa-user me-2" style="color: #FF30A6;"></i>
                    Full Name
                </label>
                <div class="input-group">
                    <i class="fas fa-user input-icon"></i>
                    <input type="text" 
                           class="form-control @error('name') is-invalid @enderror" 
                           id="name" 
                           name="name" 
                           value="{{ old('name') }}" 
                           required 
                           autofocus 
                           placeholder="Enter your full name">
                </div>
            </div>
            
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
                           placeholder="Choose a password">
                </div>
                <div class="password-hint">
                    <i class="fas fa-info-circle me-1"></i>
                    Minimum 8 characters
                </div>
            </div>
            
            <!-- Confirm Password Field -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">
                    <i class="fas fa-lock me-2" style="color: #FF30A6;"></i>
                    Confirm Password
                </label>
                <div class="input-group">
                    <i class="fas fa-check-circle input-icon"></i>
                    <input type="password" 
                           class="form-control" 
                           id="password_confirmation" 
                           name="password_confirmation" 
                           required 
                           placeholder="Confirm your password">
                </div>
            </div>
            
            <!-- Terms and Conditions -->
            <div class="terms">
                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                <label class="form-check-label" for="terms">
                    I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </label>
            </div>
            
            <!-- Register Button -->
            <button type="submit" class="btn-register">
                <i class="fas fa-user-plus me-2"></i>
                Create Account
            </button>
            
            <!-- Login Link -->
            <div class="login-link">
                <p>Already have an account?</p>
                <a href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    Login Here
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