<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stay Logged In - Binance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
            margin-top: 52px;
        }

        .card {
            width: 425px;
            height: 580px;
            padding: 40px;
            border: 1px solid #eaecef;
            border-radius: 20px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 32px;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            margin-right: 8px;
        }

        .logo-icon svg {
            width: 100%;
            height: 100%;
        }

        .logo-text {
            font-size: 20px;
            font-weight: 700;
            color: #f0b90b;
        }

        .title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #1e2329;
        }

        .description {
            font-size: 14px;
            color: #5e6673;
            margin-bottom: 24px;
            line-height: 1.6;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
        }

        .checkbox-container input[type="checkbox"] {
            margin-right: 8px;
            width: 16px;
            height: 16px;
        }

        .checkbox-container label {
            font-size: 13px;
            color: #1e2329;
            cursor: pointer;
        }

        .button {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            margin-bottom: 12px;
        }

        .btn-yellow {
            background-color: #fcd535;
            color: #000;
        }

        .btn-grey {
            background-color: #f5f5f5;
            color: #1e2329;
        }
    </style>
</head>
<body>
<div class="card">
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

    <div class="title">Stay Logged In</div>
    <div class="description">
        By clicking 'Yes', you can stay logged in for up to 5 days on this device. To revoke your logged in status, log out of your Binance account on this device.
    </div>

    <div class="checkbox-container">
        <input type="checkbox" id="dont-show">
        <label for="dont-show">Don't show this message again on this device</label>
    </div>

    <button class="button btn-yellow" onclick="window.location.href='/my/dashboard'">Yes</button>
    <button class="button btn-grey">Not Now</button>
</div>
</body>
</html>
