
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Earn</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #1e2329;
            background-color: #fff;
            line-height: 1.5;
        }

        .header {
            background-color: #ffffff;
            padding: 16px 32px;
            position: sticky;
            top: 0;
            z-index: 100;
            width: 100%;
            border-bottom: 1px solid #eaecef;
        }

        .nav {
            display: flex;
            gap: 24px;
            font-size: 16px;
            font-weight: 500;
            color: #848e9c;
        }

        .nav .active {
            color: #1e2329;
            font-weight: 600;
            position: relative;
        }

        .nav .active::after {
            content: "▾";
            font-size: 10px;
            margin-left: 4px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 64px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left-content {
            max-width: 700px;
        }

        h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        p {
            font-size: 18px;
            color: #1e2329;
            margin-bottom: 24px;
        }

        .disclaimer {
            font-size: 12px;
            color: #848e9c;
            margin-bottom: 24px;
        }

        .disclaimer a {
            color: #848e9c;
            text-decoration: underline;
        }

        .learn-more {
            color: #f0b90b;
            font-weight: 600;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .learn-more svg {
            margin-left: 4px;
        }

        .icon-container {
            width: 160px;
            height: auto;
        }

        .icon-container svg {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<header class="header">
    <nav class="nav">
        <span>Overview</span>
        <span>Simple Earn</span>
        <span class="active">Advanced Earn</span>
        <span>Loan</span>
    </nav>
</header>

<main class="container">
    <div class="left-content">
        <h1>Advanced Earn</h1>
        <p>Benefit from our innovative products that are designed to help navigate the various market scenarios.</p>
        <p class="disclaimer">
            *Advanced Earn products involve higher risks. See our <a href="#">FAQ</a> for more information.
        </p>
        <a href="#" class="learn-more">
            What is Advanced Earn
            <svg width="12" height="12" viewBox="0 0 16 16" fill="none">
                <path d="M8 1L10.09 6.26L16 6.91L11.5 10.74L12.82 16L8 13.27L3.18 16L4.5 10.74L0 6.91L5.91 6.26L8 1Z" fill="#f0b90b"/>
            </svg>
        </a>
    </div>
    <div class="icon-container">
        <!-- SVG диаграммы с жёлтой стрелкой -->
        <svg viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="60" width="15" height="50" fill="#bfc4cc"/>
            <rect x="35" y="40" width="15" height="70" fill="#bfc4cc"/>
            <rect x="60" y="20" width="15" height="90" fill="#bfc4cc"/>
            <path d="M10 100 L40 70 L60 90 L90 60 L110 80" stroke="#f0b90b" stroke-width="6" fill="none"/>
            <path d="M110 80 L105 75 L120 70 L115 85 Z" fill="#f0b90b"/>
        </svg>
    </div>
</main>

</body>
</html>
