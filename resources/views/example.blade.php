<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binance.US - Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f7f7f7;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            background: white;
            padding: 16px 24px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
            color: #1e1e1e;
        }

        .logo::before {
            content: "⬡";
            margin-right: 8px;
            font-size: 24px;
            color: #f0b90b;
        }

        .nav-icons {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .nav-icon {
            width: 24px;
            height: 24px;
            background: #666;
            border-radius: 4px;
            cursor: pointer;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        .get-started-title {
            font-size: 48px;
            font-weight: 600;
            color: #1e1e1e;
            margin-bottom: 60px;
            text-align: center;
        }

        .registration-form {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #666;
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e6e6e6;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            background: white;
        }

        .form-input:focus {
            outline: none;
            border-color: #f0b90b;
        }

        .password-input {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 14px;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 24px;
        }

        .checkbox {
            width: 18px;
            height: 18px;
            border: 2px solid #e6e6e6;
            border-radius: 2px;
            cursor: pointer;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .checkbox:checked {
            background: #f0b90b;
            border-color: #f0b90b;
        }

        .checkbox-text {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        .checkbox-text a {
            color: #f0b90b;
            text-decoration: none;
        }

        .checkbox-text a:hover {
            text-decoration: underline;
        }

        .create-account-btn {
            width: 100%;
            padding: 16px;
            background: #f0b90b;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 24px;
        }

        .create-account-btn:hover {
            background: #d4a005;
        }

        .create-account-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        .login-link {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .login-link a {
            color: #f0b90b;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .institution-section {
            background: white;
            padding: 20px 24px;
            border-radius: 8px;
            border: 1px solid #e6e6e6;
            max-width: 400px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .institution-section:hover {
            background: #f9f9f9;
        }

        .institution-content h3 {
            font-size: 16px;
            color: #1e1e1e;
            margin-bottom: 4px;
        }

        .institution-content p {
            font-size: 14px;
            color: #666;
        }

        .institution-arrow {
            font-size: 18px;
            color: #666;
        }

        .footer {
            background: #1e1e1e;
            color: white;
            padding: 40px 20px;
            margin-top: auto;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 16px;
            color: white;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 8px;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #f0b90b;
        }

        .download-section {
            text-align: center;
        }

        .download-title {
            font-size: 16px;
            margin-bottom: 16px;
            color: white;
        }

        .qr-code {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 8px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #666;
        }

        @media (max-width: 768px) {
            .get-started-title {
                font-size: 32px;
                margin-bottom: 40px;
            }

            .registration-form {
                padding: 24px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 24px;
            }
        }
    </style>
</head>
<body>
<header class="header">
    <div class="logo">
        BINANCE.US
    </div>
    <div class="nav-icons">
        <div class="nav-icon"></div>
        <div class="nav-icon"></div>
        <div class="nav-icon"></div>
    </div>
</header>

<main class="main-content">
    <h1 class="get-started-title">Get Started</h1>

    <form class="registration-form" action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-input" required value="{{ old('email') }}">
            @error('email')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <div class="password-input">
                <input type="password" id="password" name="password" class="form-input" required>
                <span class="password-toggle" onclick="togglePassword()">👁</span>
            </div>
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="checkbox-group">
            <input type="checkbox" id="terms" name="terms" class="checkbox" required>
            <label for="terms" class="checkbox-text">
                I am over 18 years old and I have read, understand and agree to the
                <a href="#" target="_blank">Binance.US Terms of Use</a>,
                <a href="#" target="_blank">Privacy Policy</a> and
                <a href="#" target="_blank">Business User Policy</a>.
            </label>
        </div>

        <button type="submit" class="create-account-btn">Create Account</button>

        <div class="login-link">
            Already have an account? <a href="{{ route('login') }}">Log In</a>
        </div>
    </form>

    <div class="institution-section" onclick="">
        <div class="institution-content">
            <h3>Institution?</h3>
            <p>Create an institutional account here</p>
        </div>
        <div class="institution-arrow">→</div>
    </div>
</main>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Company</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Press</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Products</h3>
            <ul>
                <li><a href="#">Spot</a></li>
                <li><a href="#">Margin</a></li>
                <li><a href="#">Futures</a></li>
                <li><a href="#">Options</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Support</h3>
            <ul>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">API Support</a></li>
                <li><a href="#">Trading Rules</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Learn</h3>
            <ul>
                <li><a href="#">Crypto Basics</a></li>
                <li><a href="#">Tips & Tutorials</a></li>
                <li><a href="#">Market Analysis</a></li>
                <li><a href="#">Trading Academy</a></li>
            </ul>
        </div>

        <div class="footer-section download-section">
            <h3 class="download-title">Download the<br>Binance.US App</h3>
            <div class="qr-code">
                QR CODE
            </div>
        </div>
    </div>
</footer>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.querySelector('.password-toggle');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.textContent = '🙈';
        } else {
            passwordInput.type = 'password';
            passwordToggle.textContent = '👁';
        }
    }

    // Form validation
    document.querySelector('.registration-form').addEventListener('submit', function(e) {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const terms = document.getElementById('terms').checked;

        if (!email || !password || !terms) {
            e.preventDefault();
            alert('Please fill in all required fields and accept the terms.');
            return false;
        }

        if (password.length < 8) {
            e.preventDefault();
            alert('Password must be at least 8 characters long.');
            return false;
        }
    });

    // Terms checkbox styling
    document.getElementById('terms').addEventListener('change', function() {
        const createBtn = document.querySelector('.create-account-btn');
        if (this.checked) {
            createBtn.disabled = false;
        } else {
            createBtn.disabled = true;
        }
    });

    // Initialize button state
    document.querySelector('.create-account-btn').disabled = true;
</script>
</body>
</html>
