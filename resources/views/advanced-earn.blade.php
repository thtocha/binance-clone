<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dual Investment </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Axios for API calls -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
            'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
            sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: #1e2329;
            line-height: 1.5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px 24px 24px;
        }

        /* Header Styles */
        .header {
            background-color: #ffffff;
            padding: 12px 24px;
            position: sticky;
            top: 0;
            z-index: 100;
            width: 100%;
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 auto;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-text {
            color: rgb(240, 185, 11);
            font-size: 20px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .nav-menu {
            display: none;
            align-items: center;
            gap: 24px;
        }

        @media (min-width: 768px) {
            .nav-menu {
                display: flex;
            }
        }

        .nav-link {
            color: black;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #f0b90b;
        }

        /* Dropdown Styles */
        .nav-dropdown {
            position: relative;
            display: flex;
            align-items: center;
            gap: 4px;
            color: black;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .nav-dropdown:hover {
            color: #f0b90b;
        }

        .dropdown-content {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            min-width: 280px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            border-radius: 8px;
            border: 1px solid #eaecef;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            padding: 8px 0;
            margin-top: 8px;
        }

        .nav-dropdown:hover .dropdown-content {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 12px 16px;
            color: #1e2329;
            text-decoration: none;
            transition: background-color 0.2s ease;
            border-radius: 4px;
            margin: 0 8px;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .dropdown-item-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }


        .dropdown-item-content {
            flex: 1;
        }

        .dropdown-item-title {
            font-size: 14px;
            font-weight: 500;
            color: #1e2329;
            margin-bottom: 2px;
        }

        .dropdown-item-description {
            font-size: 12px;
            color: #5e6673;
            line-height: 1.3;
        }

        .dropdown-item-arrow {
            color: #c4c4c4;
            font-size: 12px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: -5px;
        }

        .header-button {
            width: 40px;
            height: 40px;
            border: none;
            background: transparent;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.2s ease;
            color: black;
        }

        .header-button:hover {
            background-color: #f3f4f6;
        }

        .deposit-button {
            display: flex;
            align-items: center;
            gap: 2px;
            background-color: #fcd535;
            color: #1e2329;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .deposit-button:hover {
            background-color: #f0b90b;
            transform: translateY(-1px);
        }

        .markets-header div:not(:first-child) {
            text-align: right;
        }

        @media (max-width: 1024px) {
            .discover-grid {
                grid-template-columns: 1fr;
            }
        }

        .earn-header div:not(:first-child) {
            text-align: right;
        }

        /* Footer Styles */
        .footer {
            padding: 48px 0 24px;
            margin-top: 48px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .footer-main {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 48px;
            margin-bottom: 32px;
        }

        .footer-section-title {
            font-size: 16px;
            font-weight: 600;
            color: #1e2329;
            margin-bottom: 16px;
        }

        .footer-section .learn {
            margin-top: 40px;
        }
        .footer-section .support {
            margin-top: 40px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-link {
            color: #5e6673;
            text-decoration: none;
            font-size: 14px;
            font-weight: 400;
            transition: color 0.2s ease;
        }

        .footer-link:hover {
            color: #f0b90b;
        }

        .footer-link.golden {
            color: #f0b90b;
        }

        .footer-link.golden:hover {
            color: #d97706;
        }

        .social-icons {
            display: flex;
            gap: 20px;
            margin-bottom: 16px;
        }

        .social-icon {
            width: 30px;
            height: 30px;
            border-radius: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            /*background-color: black;*/
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .social-icon:hover {
            background-color: #f3f4f6;
            transform: translateY(-2px);
        }

        .social-icon svg {
            width: 20px;
            height: 20px;
            color: #5e6673;
        }

        /*.social-icon.discord svg {*/
        /*    color: white;*/
        /*}*/

        /*.social-icon.telegram {*/
        /*    !*background-color: black;*!*/
        /*}*/

        /*.social-icon.telegram svg {*/
        /*    color: white;*/
        /*}*/

        /*.social-icon.tiktok {*/
        /*    background-color: white;*/
        /*}*/

        /*.social-icon.tiktok svg {*/
        /*    color: black;*/
        /*}*/

        /*.social-icon.facebook {*/
        /*    background-color: black;*/
        /*}*/

        /*.social-icon.facebook svg {*/
        /*    color: white;*/
        /*}*/

        /*.social-icon.twitter {*/
        /*    background-color: black;*/
        /*}*/

        /*.social-icon.twitter svg {*/
        /*    color: white;*/
        /*}*/

        /*.social-icon.reddit {*/
        /*    background-color: black;*/
        /*}*/

        /*.social-icon.reddit svg {*/
        /*    color: white;*/
        /*}*/

        /*.social-icon.instagram {*/
        /*    background-color: black;*/
        /*}*/

        /*.social-icon.instagram svg {*/
        /*    color: white;*/
        /*}*/

        /*.social-icon.medium {*/
        /*    background-color: #000000;*/
        /*}*/

        /*.social-icon.medium svg {*/
        /*    color: white;*/
        /*}*/

        /*.social-icon.youtube {*/
        /*    background-color: white;*/
        /*}*/

        /*.social-icon.youtube svg {*/
        /*    color: black;*/
        /*}*/

        /*.social-icon.whatsapp {*/
        /*    background-color: black;*/
        /*}*/

        /*.social-icon.whatsapp svg {*/
        /*    color: white;*/
        /*}*/

        /*.social-icon.more {*/
        /*    background-color:white;*/
        /*}*/

        /*.social-icon.more svg {*/
        /*    color: black;*/
        /*}*/

        /* Footer Bottom */
        .footer-bottom {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
            font-size: 15px;
            color: #5e6673;
            gap: 20px;
        }

        .footer-bottom-links {
            display: flex;
            gap: 24px;
        }

        .footer-bottom-link {
            color: #5e6673;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-bottom-link:hover {
            color: #f0b90b;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 16px;
            align-items: flex-start;
        }

        .footer-bottom-links {
            flex-direction: column;
            gap: 12px;
        }

        .main-layout {
            display: flex;
            min-height: calc(100vh - 64px);
        }

        .main-content {
            flex: 1;
            padding: 0 24px 24px 24px;
            overflow-y: auto;
        }

        .container {
            max-width: 1200px;
            margin: 32px auto;
            padding: 0 24px;
        }
        .top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .direction-wrapper {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .direction-wrapper h1 {
            font-size: 24px;
            font-weight: 600;
            margin: 0;
        }
        .toggle {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }
        .toggle input[type="checkbox"] {
            width: 36px;
            height: 18px;
            appearance: none;
            background: #eaecef;
            border-radius: 20px;
            position: relative;
            cursor: pointer;
        }
        .toggle input:checked {
            background: #f0b90b;
        }
        .toggle input::before {
            content: '';
            position: absolute;
            left: 2px;
            top: 2px;
            width: 14px;
            height: 14px;
            background: #fff;
            border-radius: 50%;
            transition: 0.2s;
        }
        .toggle input:checked::before {
            transform: translateX(18px);
        }
        .tabs {
            display: flex;
            gap: 24px;
            border-bottom: 1px solid #eaecef;
            margin: 24px 0;
        }
        .tab {
            font-size: 16px;
            font-weight: 500;
            padding-bottom: 8px;
            cursor: pointer;
            color: #707a8a;
        }
        .tab.active {
            color: #1e2329;
            border-bottom: 2px solid #f0b90b;
        }
        .filters {
            display: flex;
            justify-content: center;
            margin-bottom: 24px;
        }
        .filter-group {
            display: flex;
            gap: 0;
            border: 1px solid #eaecef;
            border-radius: 12px;
            overflow: hidden;
            padding: 4px;
        }
        .filter-group button {
            padding: 8px 16px;
            border: none;
            font-size: 14px;
            color: #58667e;
            background: #fff;
            cursor: pointer;
            border-radius: 8px;
        }
        .filter-group button.active {
            background: #f5f5f5;
            font-weight: 600;
            color: #1e2329;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        th {
            text-align: left;
            padding: 10px 0;
            color: #707a8a;
            font-weight: 500;
        }
        th.select-date { color: #f0b90b;}
        td {
            padding: 16px 0;
            border-top: 1px solid #eaecef;
        }
        .green { color: #0ecb81; }
        .small-text {
            font-size: 12px;
            color: #707a8a;
        }
        .yellow-btn {
            background-color: #fcd535;
            border: none;
            border-radius: 6px;
            padding: 6px 14px;
            font-weight: 500;
            cursor: pointer;
        }
        .pagination {
            display: flex;
            justify-content: flex-end;
            gap: 6px;
            margin: 32px 0 64px 0;
        }
        .pagination button {
            border: 1px solid #eaecef;
            padding: 6px 10px;
            border-radius: 4px;
            background: #fff;
            cursor: pointer;
        }
        .pagination .active {
            background: #fcd535;
            border-color: #fcd535;
        }
    </style>
</head>
<body>
@include('partials.header')

<div class="container">
    <main class="main-content">
        <div class="content-container">
            <div class="navigation-tabs" style="display: flex; gap: 24px; font-size: 16px; font-weight: 500; color: #848e9c; margin-bottom: 40px;">
                <span>Overview</span>
                <span>Simple Earn</span>
                <span style="color: #1e2329; font-weight: 600; position: relative;">
            Advanced Earn
            <span style="font-size: 10px; margin-left: 4px;">▾</span>
        </span>
                <span>Loan</span>
            </div>

            <div class="advanced-earn-content" style="display: flex; justify-content: space-between; ">
                <div class="left-content" style="max-width: 700px;">
                    <h1 style="font-size: 48px; font-weight: 700; margin-bottom: 16px;">Advanced Earn</h1>
                    <p style="font-size: 18px; color: #1e2329; margin-bottom: 24px;">
                        Benefit from our innovative products that are designed to help navigate the various market scenarios.
                    </p>
                    <p style="font-size: 12px; color: #848e9c; margin-bottom: 35px;">
                        *Advanced Earn products involve higher risks. See our <a href="#" style="color: #C99400; text-decoration: none;">FAQ</a> for more information.
                    </p>
                    <a href="#" style="color: #C99400; font-weight: 600; font-size: 14px; display: flex; align-items: center; text-decoration: none;">
                        What is Advanced Earn
                        <svg width="12" height="12" size="16" class="bn-svg text-md" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path></svg>
                    </a>
                    <div style="margin-top: 40px; border: 1px solid #e0e0e0; border-radius: 8px; padding: 8px; display: inline-flex; gap: 24px; align-items: center;">
                        <div style="display: flex; align-items: center; background-color: #f5f5f5; border-radius: 6px; padding: 6px 12px; font-weight: 600; color: #1e2329;">
                            <svg style="margin-right: 4px" width="24" height="24" size="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="bn-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.5 13.83A6.97 6.97 0 0015 9.5a6.97 6.97 0 00-1.5-4.33 5 5 0 110 8.662zM3 16.5h18v3H3v-3z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8 14.5a5 5 0 100-10 5 5 0 000 10zm0-7l-2 2 2 2 2-2-2-2z" fill="#F0B90B"></path></svg>
                            Dual Investment
                        </div>
                        <div style="display: flex; align-items: center; color: #5e6673;">
                            <svg style="margin-right: 4px" width="24" height="24" size="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="bn-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 13V9H4v4H2v4h2v4h16v-4h2v-4h-2zm-9.5.25l-2 2-2-2 2-2 2 2zm4.5 3.5v2H9v-2h6zm-1.5-3.5l2-2 2 2-2 2-2-2z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 5c0 .718.168 1.398.468 2h8.064A4.5 4.5 0 107.5 5zM12 3.031L10.031 5 12 6.969 13.969 5 12 3.031z" fill="#F0B90B"></path></svg>
                            Smart Arbitrage
                        </div>
                        <div style="display: flex; align-items: center; color: #5e6673;">
                            <svg style="margin-right: 4px" width="24" height="24" size="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="bn-svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M22 6c0 1.11-.603 2.08-1.5 2.599V15.4A3 3 0 1116.17 19H7.83a3.001 3.001 0 11-4.33-3.599V8.6A3 3 0 117.83 5h8.34A3.001 3.001 0 0122 6zM5.5 8.959A3.004 3.004 0 007.83 7h8.34a3.004 3.004 0 002.33 1.959v6.082A3.004 3.004 0 0016.17 17H7.83a3.004 3.004 0 00-2.33-1.959V8.96z" fill="currentColor"></path><path d="M14.5 8.5h2v7h-2v-7z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 12a3.5 3.5 0 107 0 3.5 3.5 0 00-7 0zm1.944 0L10 10.444 11.556 12 10 13.556 8.444 12z" fill="#F0B90B"></path></svg>
                            On-chain Yields
                        </div>
                    </div>

                </div>
                <div style=" height: auto;">
                    <svg width="300" height="300" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="230" height="201" fill="white"/>
                        <rect width="230" height="201" fill="url(#pattern0_0_1)"/>
                        <defs>
                            <pattern id="pattern0_0_1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_0_1" transform="scale(0.00434783 0.00497512)"/>
                            </pattern>
                            <image id="image0_0_1" width="230" height="201" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>

                </div>
            </div>
            <div class="advanced-earn-table">
                <div style="margin-top: 48px;">
                    <h2 style="font-size: 24px; font-weight: 600; color: #1e2329; margin-bottom: 25px;">
                        Enjoy high rewards - Buy Low, Sell High
                    </h2>

                    <div style="display: flex; justify-content: space-between; font-weight: 600; font-size: 14px; color: #5e6673; margin-bottom: 16px;">
                        <div style="width: 150px;">Coins</div>
                        <div style="width: 150px;">APR</div>
                        <div style="width: 150px;">Settlement Date</div>
                        <div style="width: 250px;"></div>
                    </div>

                    <!-- Row 1 -->
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0;">
                        <div style="display: flex; align-items: center; gap: 8px; width: 150px;">
                            <img src="https://assets.coingecko.com/coins/images/1/thumb/bitcoin.png" width="20" height="20" alt="BTC">
                            <strong style="color: #1e2329;">BTC</strong>
                        </div>
                        <div style="color: #00b386; width: 150px;">Up to 80.83%</div>
                        <div style="width: 150px;">3–167 days</div>
                        <div style="display: flex; gap: 30px; width: 250px;">
                            <button style="padding: 6px 12px; background-color: #fcd535; border: none; border-radius: 6px; cursor: pointer; width: 100px; height: 36px">Customize</button>
                            <button style="padding: 6px 12px; background-color: #fcd535; border: none; border-radius: 6px; cursor: pointer; width: 100px; height: 36px">Subscribe</button>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0;">
                        <div style="display: flex; align-items: center; gap: 8px; width: 150px;">
                            <img src="https://assets.coingecko.com/coins/images/279/thumb/ethereum.png" width="20" height="20" alt="ETH">
                            <strong style="color: #1e2329;">ETH</strong>
                        </div>
                        <div style="color: #00b386; width: 150px;">Up to 170.68%</div>
                        <div style="width: 150px;">3–167 days</div>
                        <div style="display: flex; gap: 30px; width: 250px;">
                            <button style="padding: 6px 12px; background-color: #fcd535; border: none; border-radius: 6px; cursor: pointer; width: 100px; height: 36px">Customize</button>
                            <button style="padding: 6px 12px; background-color: #fcd535; border: none; border-radius: 6px; cursor: pointer; width: 100px; height: 36px">Subscribe</button>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0;">
                        <div style="display: flex; align-items: center; gap: 8px; width: 150px;">
                            <img src="https://assets.coingecko.com/coins/images/825/thumb/binance-coin-logo.png" width="20" height="20" alt="BNB">
                            <strong style="color: #1e2329;">BNB</strong>
                        </div>
                        <div style="color: #00b386; width: 150px;">Up to 40.19%</div>
                        <div style="width: 150px;">3–167 days</div>
                        <div style="display: flex; gap: 30px; width: 250px;">
                            <button style="padding: 6px 12px; background-color: #fcd535; border: none; border-radius: 6px; cursor: pointer; width: 100px; height: 36px">Customize</button>
                            <button style="padding: 6px 12px; background-color: #fcd535; border: none; border-radius: 6px; cursor: pointer; width: 100px; height: 36px">Subscribe</button>
                        </div>
                    </div>

                    <!-- View More -->
                    <div style="margin-top: 24px; text-align: center;">
                        <a href="#" style="color: #C99400; font-weight: 600; text-decoration: none;">View More</a>
                    </div>
                </div>
            </div>

            <div class="advanced-earn-table">
                <div style="margin-top: 48px;">
                    <h2 style="font-size: 20px; font-weight: 600; color: #1e2329; margin-bottom: 16px;">
                        Partnership Program
                    </h2>

                    <div style="display: flex; justify-content: space-between; font-weight: 600; font-size: 14px; color: #5e6673; margin-bottom: 16px;">
                        <div style="width: 150px;">Coins</div>
                        <div style="width: 150px;">APR</div>
                        <div style="width: 150px;">Settlement Date</div>
                        <div style="width: 250px;"></div>
                    </div>

                    <!-- Row 1 -->
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 0;">
                        <div style="display: flex; align-items: center; gap: 8px; width: 150px;">
                            <img style="width: 24px; height: 24px;" src="https://assets.coingecko.com/coins/images/325/small/Tether.png" alt="USDT" class="earn-coin-icon" onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=U'">
                            <strong style="color: #1e2329;">USDT</strong>
                        </div>
                        <div style="color: #00b386; width: 150px;">Up to 359.60%</div>
                        <div style="width: 150px;">2–167 days</div>
                        <div style="display: flex; gap: 30px; width: 250px;">
                            <button style="padding: 6px 12px; background-color: #fcd535; border: none; border-radius: 6px; cursor: pointer; width: 100px; height: 36px">Customize</button>
                            <button onclick="window.location.href='/dual-investment'" style="padding: 6px 12px; background-color: #fcd535; border: none; border-radius: 6px; cursor: pointer; width: 100px; height: 36px">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 64px;">
                <h2 style="font-size: 24px; font-weight: 600; color: #1e2329; margin-bottom: 24px;">
                    Frequently Asked Questions
                </h2>

                <div class="faq-item" style="padding: 16px 0;">
                    <div onclick="toggleFaq(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: 600; color: #1e2329;">What is Dual Investment?</span>
                        <span style="font-size: 26px;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding-top: 8px; font-size: 16px; color: #5e6673;">
                        Advanced Earn products are designed to offer users the opportunity to potentially earn higher rewards through diversified products. Those products, including Dual Investment, Smart Arbitrage, and On-Chain Yields, enable users to benefit from their market insights by leveraging different financial strategies. Tailored for users seeking to maximize their earnings while effectively managing corresponding risks, these products provide an attractive APR and the potential for high yield.
                    </div>
                </div>

                <div class="faq-item" style="padding: 16px 0;">
                    <div onclick="toggleFaq(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: 600; color: #1e2329;">How is APR calculated?</span>
                        <span style="font-size: 26px;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding-top: 8px; font-size: 16px; color: #5e6673;">
                        Dual Investment is a high yield product that allows you an opportunity to buy low or sell high cryptocurrency at your desired price and date in the future, while earning rewards no matter which direction the market goes.
                        <br>
                        <br>
                        There are two types of Dual Investment products: “Buy Low” and “Sell High”. Buy Low gives you a chance to buy crypto at the target price on a future date while earning rewards regardless of the market direction. You can invest with BTC, ETH, USDC, and other stablecoins to achieve high yields.
                        <br>
                        <br>
                        Sell High gives you a chance to sell crypto at the target price on a future date while earning rewards regardless of the market direction. You are able to subscribe with BTC, ETH, BNB, SOL and other altcoins.
                        <br>
                        <br>
                        Dual Investment is not a risk-free investment. Please read through the product terms and the <a href="#" style="color: #C99400;">Binance General Risk Warning</a> carefully before making your investment. Binance is not liable for any losses incurred from price fluctuations.
                        <br>
                        <br>

                        Please visit the <a href="#" style="color: #C99400;">Dual Investment</a> page for more information.
                    </div>
                </div>

                <div class="faq-item" style="padding: 16px 0;">
                    <div onclick="toggleFaq(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: 600; color: #1e2329;">Can I cancel after subscribing?</span>
                        <span style="font-size: 26px;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding-top: 8px; font-size: 16px; color: #5e6673;">
                        Smart Arbitrage is an innovative tool designed for traders to engage in arbitrage strategies between perpetual futures contracts and their spot equivalents. It leverages the funding rate mechanism by hedging their futures position with a spot position to collect the funding fee.
                        <br><br>
                        In Smart Arbitrage, the product builds a strategic combination of futures and spot. It involves futures trading that needs to comply with futures trading rules.
                        <br><br>
                        Arbitrage involves going long in one market (e.g., spot) and short in the other (e.g., futures) to collect the funding fee. The funding rate arbitrage strategy is delta-neutral, meaning it aims to hedge out price movement risks by taking opposite positions in the futures and spot markets. This strategy implies that no matter the price change direction, your profit on a long position will offset your loss on a short position (or vice versa), and you will collect the funding fee. The goal is to profit from the funding rate payments without being exposed to significant price volatility risks.
                        <br><br>
                        Please visit the <a href="#" style="color: #C99400;">Smart Arbitrage page</a> for more information.
                    </div>
                </div>

                <div class="faq-item" style="padding: 16px 0;">
                    <div onclick="toggleFaq(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: 600; color: #1e2329;">What are On-chain Yields?</span>
                        <span style="font-size: 26px;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding-top: 8px; font-size: 16px; color: #5e6673;">
                        On-chain Yields allows users to easily participate in various on-chain protocols and earn rewards, such as tokens, points, and other rewards, directly through their Binance account. WithOn-chain Yields, users can explore high-yield opportunities within Binance without performing complex on-chain setups or operations. Please visit the <a href="#" style="color: #C99400;">On-chain Yields page</a> for more information.
                    </div>
                </div>

                <div class="faq-item" style="padding: 16px 0;">
                    <div onclick="toggleFaq(this)" style="cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 20px; font-weight: 600; color: #1e2329;">Where can I find more information?</span>
                        <span style="font-size: 26px;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding-top: 8px; font-size: 16px; color: #5e6673;">
                        For more information, please refer to our articles in the <a href="#" style="color: #C99400;">Support Center</a>.
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-main">
            <!-- Community Section -->
            <div class="footer-section">
                <h3 class="footer-section-title">Community</h3>
                <div class="social-icons">
                    <div class="social-icon discord">
                        <svg width="56" height="53" viewBox="0 0 56 53" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="56" height="53" fill="url(#pattern0_2_25)"/>
                            <defs>
                                <pattern id="pattern0_2_25" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_25" transform="matrix(0.025 0 0 0.0264151 0 -0.00188679)"/>
                                </pattern>
                                <image id="image0_2_25" width="40" height="38" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAmCAYAAAC29NkdAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTE6NDODXD8kAAAC2ElEQVRYhd2Yv2/iMBTHX0/3V9hebrr5dBxkYWFFRCKwdOhYdanUKVKZEBOVWIroUMTIwEKpRNW1SxeKuP/Cyb/BDTlTJ7GfbQjodF8JoYhgf/z8ftln2+12C/+wvhYxCI/i5MOTb0YJAAAwRoBRsns+KSCPYpgvlvD0/AI8itF3GSXQajbAq5TAK5ec5jlz3WIexRDedmG13jhNJMQogcFdzxrUGpBHMQwfxjBfLPcCy6od+DDo94zvWQEeajWdGCUwm05QH/1iGmS13kC1Vi8cDiBZ+PnFJTo2akEexVCt1QsHywqzJGrB8LZ7NChZwpIqaQFNpi9aOkgl4Gq9cYLDnNwl76nmVSbq4WhsBdVqNqAd+MAogbDThdXHJvfObDrZJfWP9W/jwoejMXjTz0XlgmS13mj9QWg2nThXBCGbwJPHz23x0/ML+ud24O8NB5BYtR346DvyTuQAs9uU1c311Z5o9mPIRsoBYoVf+NuhYpSgkKI7ygGaHLjVbBwMJ2TaZiUg53jbpPM9rIHQ7QijBPVlwWKsxUK6FX/7/gPCTlcZmecXl1Ct1bW1vFL+qQdUWhDxv8qv/GCy5XgUpyDkZx7FyuDzKnoLCl9PAWJ/UA7C0gGDBdC+wWW9xSp4EY2MEhj0eykI+beb6yuli6AL+rv4VCXBsvz722shKUaWzXwpC5oi65RS+iCAPrJUTj5fLOF+9IjmTx7FcD96hLCT7y11VUt2B6dmoR34O7+SIcNOd3f+Fb7D+WcUD/q91KSiuxk+qLsmuVlQtvxYs8ooAa9SSs655ZJVY8sogfe3VyMYQFIMZtPJ7lkJeIyziFcuWTXB2VZOmWaOESw2cKpWTnuqE2cE07VGURJukJU2UYt2/VQa3KlvGdBKoltV0cKOEMZSJyCLriJibNP5xunyyJQiXJRNJzr9P9dvWbmcdbNnaBftDShLvgIWz6LsHZpPCwE8pv4AITK1F07mIuwAAAAASUVORK5CYII="/>
                            </defs>
                        </svg>

                    </div>
                    <div class="social-icon telegram">
                        <svg width="56" height="53" viewBox="0 0 56 53" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="56" height="53" fill="url(#pattern0_2_28)"/>
                            <defs>
                                <pattern id="pattern0_2_28" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_28" transform="matrix(0.025 0 0 0.0264151 0 -0.00188679)"/>
                                </pattern>
                                <image id="image0_2_28" width="40" height="38" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAmCAYAAAC29NkdAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTQ6NTLans7BAAACwUlEQVRYhdWYu27iQBiFTyw/xXjeIgTTpEkbgcSloaBEpCBymki7VUSVlWhAUIAoKWgcR3KUNk0a43WUeqttbL8GW6BxwNiemWBAeyriie3P/33mbLVarSAoPwhhWjaenl/gB6HobQAAqhHUq2U0ahVQjQjfdyYKOBhNMBxPpaCSxEDvbm+E/p8L6Lgemq323mBxiYJmAuZltSwZ3U4mZCpgs9WG43oHA9tUo1ZB/7GXuKYkXTwmHACYlo37nw+JazuAg9HkqHBMpmVjMJrsXN8CdFzv4DGXpeF4CtOyt65txeDl1bV0fctbVCN4f3uN/o4sOBhNTg4HrJvBZjxGgKd0bVzO0ouMpQBIzaC8RDUCo9vBYj7D+9srt9WxlgoAKiM+hIxuJ7H3Uo1ww+np+QV3tzdrwDxjT6SFibzPD0I4rgc1ntb7gDGLibxcRM7Sg7r8/bEXVNYIZVq2EHCalu4HVN+Xdy/PjX4Qotlqo14t76zJdilVJv5E3MgmoEatkvgBMgbxg1AMMC0b4w9rttrwgxD9x17qR8iGlJq1WCoWsJjPuA/ZnBuz4GTlByEUnlWyYsYPQlxeXUdwi/mMCydTc6lGoGYVTeY2qhGU9ALq1XLk5vjksZjPUCoWuC+VjXmVUgK4/Iealr0zCsnCyWYwpQSKfnEuddM+ki1p+sU5lJLO/3Ke7n88CLlONoNLemGdJCLuyRKL1aSR/buiGgHVyHrc0ov7u9kPQgzH08ypXCaDmWcVALnVLSDdmo7rSWWw0e18AVKNpO5LvwvJrMkydzgSn9iNbicqZ9GmabNVnVp//3xGv6M9CRsETq14a93aFzdqlZNCGt3OTkVJPJs5xqFRXGmDSeLZzLEtmTU1/b/Hb0ymZWM4nuae3VQj6P/qcbuY0BEwm2bysibPapsSPqMGvkCX7of86CR5Ns30D3Lbl4lK7YT7AAAAAElFTkSuQmCC"/>
                            </defs>
                        </svg>

                    </div>
                    <div class="social-icon tiktok">
                        <svg width="56" height="57" viewBox="0 0 56 57" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="56" height="57" fill="url(#pattern0_2_31)"/>
                            <defs>
                                <pattern id="pattern0_2_31" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_31" transform="matrix(0.025 0 0 0.0245614 0 -0.00350877)"/>
                                </pattern>
                                <image id="image0_2_31" width="40" height="41" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAApCAYAAABHomvIAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTU6MzWqHJuBAAACRklEQVRYhe2Yu27bMBSG/xR9iZJ8DCPxkiVrYAO+LB06Fs4Qw1kMuJPhKQG8JEiGBB49eHEcwEHXLl0kVUHnTF1I9jHcIZFgQCRFypKsof8o6Bx9Is+NPNhsNhtUWB/2DZCmygN+LMLp8ckpuJCJ54v5DPXDmpOvUlfQ80Nnm1IB/eDF2aZUQNW2p6l0wOG3sZNN6Vm8XK3hBfaxuJcyMxyNcX17b/VuIWUmTVxI3Nw9QMi/6LQaxtJzUESr09VBnRglYJRg0O8lYCvRSbiQ8IIQnCd/qhKAJv0H3NZiPsPgvAdGibWNcxZzIbFcreEHL3E9+/nju9VHGSW46J+h227C80M8Pj2DC2lMKGvA69v72OGuYpSg226i224CMLfAVEAuJIajsVP1d5Vp9Y2AXhDi85evuQO5SJskXMi9wwEGwOHIbeooSsot9oLQGHOMEnRaDQDARf+sGLJ3KQEfn561BoPzXuFQ21ICLldr5ctZDj27KhGDuq2tH9as4fKolZESgKqJAkAcc7vIpcVFKq0XZ4EDFICMqR3ZbpsufutH2WI3Caj5U9szrf/L/exrkvUWp9XGSLoVzBrDyhXUZWva0KBrjSafaVIemkxDAqME9aMaOq1GHA7L1do4ik0vJ/FolQsg8LYaeY1Yf15/Z7bVxuD0apK5NGxrMZ/tZG88F3MhcXxymtl5Hq3RmMWMEkwvJ85OGSW59W2rm4XooHRz95DqMO9px+nqI7pTAd56theEcVZT8gnddjOXuM0MuA9V/mbhH8P78zNfdRO9AAAAAElFTkSuQmCC"/>
                            </defs>
                        </svg>
                    </div>
                    <div class="social-icon facebook">
                        <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="51" height="51" fill="url(#pattern0_2_34)"/>
                            <defs>
                                <pattern id="pattern0_2_34" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_34" transform="scale(0.0232558)"/>
                                </pattern>
                                <image id="image0_2_34" width="43" height="43" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAArCAYAAADhXXHAAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTY6MjmoBEkFAAAC1ElEQVRYhdWZP0/jMBjGX9B9ibO93MR8opdmYWFFRLpeFwZGVIaisjAwoU6c1KWoN/R04w23lCIVde3SJSlBzEwsSfgYvSFymz+2Y8cmlEfqktT2L69fP37jbC2XyyV8EG2/N4CKPul2EIQRjMYTCKNXCIIIgjD+EYwAAIBgBIQgwOgz2PUa2Fat9FhbZdKAAt7e3UMQRkptCUbw4/shNBvO6oFkpQzbHwzh5tdvpUFYotDnZ6fSbaRh3YUPR8cnpeF4UoGWgjUVTZE67VYhcOECu7i8gtF4YgyKJxoMEbAwskfHJ+AufPNkAjUbDvSuu8x7XJ/tD4ZGQQlGUqt/NJ5AfzBk3mOmgbvwtXOULhyWt1K729s/YLa9vbtntmOmwd7+gbJ/JiWzWIIw4sICxA87n01T13JpMBpPtECbDUfJO3kKwiiXDrnIftn5WnoAVjREMKLIsvpLRVbXojrtllb7rLLRTUVWN1fnsyl3xbsLP64lgmgFIjNWMropN9ABFUlnqw7CCNyFD7ZVW6eBiV2KF9WbgZ4Nul7s9ytY7+FRq0OR4evOWBi9AkAClubSJoqyrWHfKF9NiLJ9qHewlXWpbAYEI/j390/uGk+sWXM9Hy4ur6THfHl+WlsXwUg6FWQrqOT/s1JJO9p+O3uhKtEVLqMcbNWi3ikjQjKwdWvXPJFAKmlQ/xazrWCbDcc8EUeqNmnX4yLcWCEjKg91C6SX5ycAyOQsfYJNUnLGU7Cm61ETSjKlYAlGleZukbLnYTnr2qToZllysAQj7iFDlepdd3MbFXNTaDacd00H26oxx+fuYJ12q/ItGIBdJFFxYWmjKoGLXuWFtQEF1jlal5Vt1QrPHAoLGYIR9H5239QlOu0Wd+qTkqq6CEZwfnYK89nUaJTpzMkeNymViLRzXWhqj6r9lPpaQxWEEbieD97DI7iez805esBRt3ZLfaUxAlu1/gNe6Vvv5ErOmAAAAABJRU5ErkJggg=="/>
                            </defs>
                        </svg>

                    </div>
                </div>
                <div class="social-icons">
                    <div class="social-icon twitter">
                        <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="55" height="55" fill="url(#pattern0_2_37)"/>
                            <defs>
                                <pattern id="pattern0_2_37" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_37" transform="scale(0.0232558)"/>
                                </pattern>
                                <image id="image0_2_37" width="43" height="43" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAArCAYAAADhXXHAAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTY6NTHpnlfwAAADBElEQVRYhe2Zv08aYRjHv7Zd696DwcnZgQADDjhiJBEZMMENYwcbO0ACCz8mmzBotYk2jg4OAo00ri4OcPxItzZOHbiju/0D3g72Lu/9fN/37mhD4nciPPfjw3vfe57nfVgghBDMiV78bwARPcPOSnMF+8r8RavTxcdPn7lOvrq8QDgkBQKiqFNs7+wCAMIhCc0PDcu1F+yyweraOhR1yrxBOCQFAqyoU6yurRtA49GI5ThbWO1XKuoU4ZCEeCyCkPRGj6vTX2h1ugCAg/09vH/31heodi/g6WnZgQIAiIOOTs7I0vIKWVpeIUcnZ67xnjx0uoyrJopKcvkC93UcYc1AE0W1xBPJlGucJRFQJiwNlEimLEATRXWN84Jet2+4zmGmLu0FUtSp7lNN4ZCErc0N3XvmuJO2d3bRH4wAAM3DBrKZNNd5zJUlJFj/FstV/dhiucq1opq4YM1Abv51s4MfUCFYFhDt31y+YIlft2900Fy+IAxKCIdnafH6tz8YGeKtThelSg0AEI9GcHV5IXJbMc/SEvVvTx76XlFNthWMJfptvr+7tZRbrVxrT0Fb+fu7W28r+leeui66H6BLpTkeJCjgo0Xk9S8AxGMOtV5QL+v1et3LiYuLr/H4+BvyYAx5MLZAaZ/lwRjffzwgHov4byd9OZ4Yy6bX/Msr37AsIFb+FVEg2xotb4rmX2H5XVVCjFaYZf/rKc/SonMuLVb+9bId8mWDUqWmg2Yzafx8+Madf0vlGtc+LxDY49Nz3X/xaATNw4YFKHD/evEOq4MS6R9EsoMwLG9jMov8KwRLgyaSKddjWfszOl4sV7mAuT3bH4wMExNWY0JPVVj+bXW6fP7lWdGJohpWVMRnQfqXCWsG9ZLQg/KvKyztK7+TlyD86wgrOtphqScPdSCWHezihLiUW7qMug7LBHR8eq6PU7OZtGHYBwDtL1/1qmZXrm1hPU9MOOTUS5hl1z9YYEuVGvry08UO9vcCBQWMQ2OWtjY3DONU313Xv9Rc/afwDDsr/QHzxiTh9dYD/AAAAABJRU5ErkJggg=="/>
                            </defs>
                        </svg>

                    </div>
                    <div class="social-icon reddit">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="56" height="56" fill="url(#pattern0_2_40)"/>
                            <defs>
                                <pattern id="pattern0_2_40" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_40" transform="scale(0.0232558)"/>
                                </pattern>
                                <image id="image0_2_40" width="43" height="43" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAArCAYAAADhXXHAAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTc6MTfcLVCkAAAEN0lEQVRYhdWZz2sTQRTHvy39J9ydg79QPIhI0mwUqxCPoZGmoViwIEKpSCUFKegpimItpRBJpalpRU2hHtIUUnoRqUIvSZrg2YM/DrvrRVRsPfQUD2GW3ezM7G66tvo9JbszO599efPem5eORqPRwH+izv0G8KKu3UxWNR2FYgma/hWqqgMAytUaiCwBAIgsgRAJsnQAiXjMuN6uOry6AQVcXlmFqumeFiOyhP6+3rbBPcGmM1k8npnzvEirKPTYzeue5rmCLVdrGBwabhuOJ6/QjrB+WVOk5OiIK2DhBhscGka5WvMNiidqDCdgrmX3CtSsRDyGqYl73PvMOJvOZPccFAAKxRLSmSz3vs0NytWaLz66sb4GVdOhqjoqm3WUK82XX8rnDDDWOssrqyCyhEQ8Zrtnc4OeSNRz/GxVOBTEUj6H8TspyNIBhJUgwqGgbRzP1YgsYWN9zXbd4gbpTHbXoABAiIRCsWRYb3BoGIeOn0ahWHI1X9V0pjtYYP0KUUp3AJXNuu3645k5w5JO+4KVIQ1YkWN7VVgJGj5qlqrphpWdDEPTulkG7PLKqk+oTZ/zw51amQxYPx4ONGOlW990kqrpFlfpBLDrhxNZApElJEdHoHQHEFaCSMRjzAjgVWZ36gLA3AxuAEVFiDkT7aas1PSvVlhaOPOgkqMjCCtBFIolVKp1KKGAp/KOyBLGbl43XIQ+IxGPQdV0jN9OcV/CzNbRaDQaokSwlM/58nOKpGo6eiJR5j1zghCewcIhduYxy4/zJpElVwbpBPiRwMm/UvcnceLUGczMznPHPJ1/gZOBc3gwMS18lhuGTgDct2oNHWblnuXxcvEVdnZ2MJ1+gtdv3trGrL/bwMRUGtvbv7HwfBELzxe56/BgzWc1x6P4+O0UE/jX1pbl+9bWtm3Mjx8/Ld+/fftuG1Ou1rj+yoQlhH/SpGVeq24lb+Bi5AIA4PJAHP19vbYx/X29GOi/BAA4f+4sbo3dsD9fEIla2bqAZuEhSgzLK6vM+nJ+No2Pn77gyOGD3LmTD+/i2tUrOH7sKPO+U4xXugPG56bPKuKdKNpoIlAqHigAZsFjlpmt6QYOoUO00dxkJN6YQrEknE/TuAUWAJRQgDmBipdlBoeG0ROJ2gp3mmJ7IlFmz0HVdIzfSQnXbP3FjWONKItQEVnCUj5neVsKVanWbdbn1Q80xTodSjfW1yxrWc5ghWLJ8W2dChhqXV4vK53JuipoWI0PCyyt5N34odfWj1tIqs8f3tuu2U63bqxrFrUg9S+lO2AAVarNsOS1B8Ernpgdmb3ob/Ek6ntx20f7AUz7DTxxa4NEPIbk6MhfgWLJCRT4z1qerprJtLPi1wmYisgSph7dc30Scd2mp8HfLyu7taZZbf8BwspYTmr3vwQqz7BmqZqOcqWGymYdqqobFf8/89fSfuoPunVznrbDIMcAAAAASUVORK5CYII="/>
                            </defs>
                        </svg>
                    </div>
                    <div class="social-icon instagram">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="56" height="56" fill="url(#pattern0_2_43)"/>
                            <defs>
                                <pattern id="pattern0_2_43" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_43" transform="scale(0.0232558)"/>
                                </pattern>
                                <image id="image0_2_43" width="43" height="43" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAArCAYAAADhXXHAAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTc6NDFIOQHUAAAD3klEQVRYhe1ZTWsTQRh+FH9CLXR3D568iCJkTfag4AdeLBYaA1K0gtSSoikJSKAFocRLCzmYmoIpPQYJappgakEoilCh2TS9KP4Cd7f+i3iou53ZnZ3O7jbagg+EZsg7s8++3/P2RK/X6+GY4OS/JhAE/8n2C6dEBQ3TQr3RgmntwjAsGObeJygUWXL+KoqExKUYFEWCFlcP3HvioAAzTAuLS8uoN1qBiQVBKjmCbCbtvAwLXLL1Rgv52bm+kGNBkSXcGb2N3PQU83dfsu1OF2Pjk57DtIQKWRraN6firwkWDGPPdQzTgmntMi2WzaTZhHsMbOnbvTNnL1KfFy9fsUQj46dh9l68fEU96/K1W70tfdsjy9Ts2Pgk2p2us65VV4QCIAoM08KV68POWourqFVXKBlm6iKJZjPpvhDd/LqFBxOP8eZdE8Cei2UzaYoDyYNJ1u1Dfs4eBd++/8CDicfY/LqFmWfPHcKp5Agl19YPIKtv7zjf3ZtFYZiWRyskNj59odbrHzcA/Algwop6Z4eS8xQFO1oBQJaGhAmWyhXonR2KpCJLUGQJiXiMstD4vbtovP8Ay/oFAHj08L7zWyIe831RL1miKvESNCk/Nj7JrGZ2lWt3ulhtrqG4UIAWVzF4egDNt1VUX7/BzRtXceH8OeYz3WdG6g3qjRauXB8WKruGaSE/M4dSuQIAGDw9gKe5JxRRgJ+3+ZrlbGx3up7qls2koSVUaHF1X6t6F4tLy87Zq801R0bkBUmE1mx+Zp+oIkuoVVeQm55ySNjBkpuewubndce8tobDIBTZ/Owc9da2L/pBkSUUFwrO2jAtxx2CIHI/m0qOCJlUi6tUKnSnJRGEIksm68SlmPC+O6O3ne9heuFQZMkHaQnxUuxOS7zCwUJgsmE0YsOdt0XyOInAZN0PCELe3Xf0nSwAKqBWm2vC+6L2HaHIkoFSb7SEfK/d6Ua+x4XTbEKlTJifmeMSdl+RFFlCcb7gK++HUGTtimXDbmZK5YpD2o72UrniucuRBSIIPL2BIktCQWN39nbdB4DFpWVqzUJxnl/tyBbVDa5meRsBeOo+D7Y1ggSW+1yuZkU1XKuuoN5oCTffPPD6ae74SLR+K7JEkTFMK3AOtWFau/vnulpUjxtErd9A8GRPgtd3eMiStd4wrb86PiqVK9y+w0PWfcNs69GTuQjanS6VSVLJEY+FmNnA3SgvLi2HapZFwcrFpDva8B3MsSaIf2sw5zeu4o48S+XKgUn+sFGcL/jm4iMzTNbiKooLhfDDZBL2tVrf3jnUMb0sDTGDKRLZo4Bj9d+aY0X2N4o/fr7XgD1eAAAAAElFTkSuQmCC"/>
                            </defs>
                        </svg>

                    </div>
                    <div class="social-icon medium">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="56" height="56" fill="url(#pattern0_2_46)"/>
                            <defs>
                                <pattern id="pattern0_2_46" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_46" transform="scale(0.0232558)"/>
                                </pattern>
                                <image id="image0_2_46" width="43" height="43" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAArCAYAAADhXXHAAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTg6MDVzWxCfAAAEJ0lEQVRYhdVZP0wTURj/tbrqbnuDLhKdNJS2gwwQZZDYxNpBDJiYQNqBpl2a4ARMmpAIWFSqo4ODgBHjYowODtwdR5ydHLg799a9Ds1d3733vfvTKxp/SQeO9973e9/f976X6Ha7XfwnSP5rAlHwX5E9HXeBnb19aIdHME0bpmUDAEzLRj6bAQAoSgq5sVHkcxko6VQsWYlBfLbxcBmqZrjkwiKfzSCXHUWpWBiIeCSyG81tbG61IguhsPZoNbK2Q5FVdQONpWVfTSrpVO+npGCafXcImlNbLKNULAyHrJ82S8UCcmOjgcJU3cBmsyUlX1sso16txCM7M7cAVTcGXpyCzN8dDfu5hZQsRTSfzWDt8WrsqDYtG42lZWH9QCV0Caw/fdE9f/GK57f+9AU1NBaiyhHIHmiHwgJvd98Pnagf4QPtkBwruMGFkavRTDME8EGspFN48/qV4G5JfhKLfDZz4kQBoF6tuBUP6Pn0zt6+ONBR8bFpCeY4Nq1AMx6bVvfu7Lzrb2HmyNa5NnHTV76rWX4ntcVyqKhno3pzq0VrhIFp2VB1MXUp6RTu3L7l+cav5R5kdt998EwMY/6N5raQfjT9SDqeTYeUX9arFey+++BuhF8rCYhlkd8hBdOyycpGFRGeqDO/sbQsjMvn+r7LWyAJiOoOA0qQDJQFKDIAkBsb9Y7R+vOSAGDZvzwDglxgZ29fqkEeMgtQZAAI5wztsO8KPTcw+7sLCirTstF46NUqm3Z48BbwG0txYLm5PhsWvMvksxkoCr1BVTc8FlDSKdSq5UhkWQhk/TSr6gZZaSiYlo2ZuQXPt7XHq4FEAXg2z242GUSQBW9Sv6xBWSCMCwBe07MIfbvdaG4LFpAFIhVUYbXqzGfleMiyH6gop4TLzA+IFmCrIW9FNtodWbIY6pHlAoQf7CecAh9UrAWcu5qDnb19jzw/V0sCQDp1ziuMyX18Qg9bih1Q5ud9fXxyGjNzC7gwctVXVhLwljigf04I63t81XFQWyyTQVWvVgTLUO7Hy+qRzWYEv6Vqd6lYIIVTF72gszB1uOb/z8s6tbKysgIA7XbHc8rpdH7j0+ev7t9+ORUALl8agaYfod3poFQsoPXsiXQsAJw9ewZT1ycwdX0CiUQC7XYHUzcm8OD+Pbx8vk5uxL3WOElcFol/43oTBDfPUodfB3/rehME4cI4PjktaPfbl4+xewXDgFDBKO0Oct6NAj7XSkFd3v5Fk+Pu7HzgeGn7iGrInXT76OeP777zpAeZerUinNpV3cD45LRwqImCjeY2xienBaJh2p6xWp75bAa1almo9zycVr7M94fS8mSFbW61QjWTAbgN5aBmMkBXqlhkHQz6lkBhkCIT+QHE6UOxzYgoiFMJB3qtcaDqBlTNgGX/Ep6W2DeGYT0t/QHSGaVba+OO7wAAAABJRU5ErkJggg=="/>
                            </defs>
                        </svg>

                    </div>
                </div>
                <div class="social-icons">
                    <div class="social-icon youtube">
                        <svg width="54" height="46" viewBox="0 0 54 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="54" height="46" fill="url(#pattern0_2_49)"/>
                            <defs>
                                <pattern id="pattern0_2_49" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_49" transform="matrix(0.02 0 0 0.0234783 0 -0.00478261)"/>
                                </pattern>
                                <image id="image0_2_49" width="50" height="43" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAArCAYAAAA65tviAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTg6MzFfG4dFAAAB8klEQVRoge2YvW7CMBCAD9SXaOK3aJpk6dK1AomfpUPHqgxFsFTqVjExsDSCoYiRgQUxIHXt0iVQ+hZJ+hjp5Ci2ExQltnFQvgXpgtB9HPZxVwvDMIQzoH7qBHhRiahGJaIalYhqXGR5k+cH0avnBUQM4wd/uZPQtUsAAEC6FsUQ0qJYPJ5GqojnB7DebMGZzXMnyAuka2BbBgyen1Klakmd/X36oYQADdI16LQaMOz3mGeMiLs/wP3Do7Tk8rBaLsA2DSLGHHZnql4laF5e35gYIbLebMHdH6QllBfPD5g8S3v9ursjIrufX6nJFIG+7rlXJMudzwPczzD1Yw/z0Gk1YDIeSRPCkCJ+cREAgG67Cavl4mgDKwqdq7DDjnQNhv1eJCQaIRWJg4W+vz65CkmrCI0oIYz0PhIX6rab3D73pA2Rxy2JyTSP8MTzA3Bmc1hvtlw/V5qI6PmGEEG6JuTmEjHf0P1JaEVkDmjEYefVhd39AW5u74RKCK+IM5tLqQJeTmCIiljmlfAERFHawcq6Jr90QsS2yIFeZehcmcNObydUxDYN5rAzIoO++L/cRUnKkTkjtmlImR/yMhmPEn81iZtGAPVWpmkbRkyqSJykJXY8DpB/iY0X2Bj820dIy7zABsgoUgZK20doKhHVOBuRfyYxwi7HiTRpAAAAAElFTkSuQmCC"/>
                            </defs>
                        </svg>
                    </div>
                    <div class="social-icon whatsapp">
                        <svg width="54" height="48" viewBox="0 0 54 48" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="54" height="48" fill="url(#pattern0_2_52)"/>
                            <defs>
                                <pattern id="pattern0_2_52" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_52" transform="matrix(0.020202 0 0 0.0227273 -0.00505051 0)"/>
                                </pattern>
                                <image id="image0_2_52" width="50" height="44" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAsCAYAAAAn4+taAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCS0YEgMTMg0LjRjtC7IDIwMjUgMjM6NTg6NTkHmqjxAAADg0lEQVRogd2ZvU8bMRjGH9qusPfOSyfUblVTkoWhqOqCiETIQiUqdUDJkChZkNqJMFGJoYkSVUkZGVhCkIJYWVguR1C3VkxdfNc/Ix2Q0xD8fXdQ8ZOyxHe2n7P9+vHrmdFoNMID4EncFdIgRLfXRxD+AaUhaHD9I64DACCuA0IcuM5TZNIpZBZSsbQ7E8eIsM4fHZ+ABqHRu8R1sLa6gnwuOxZrQ2Qh9WYbjVYnShUA/gmqlotW71sL8fwh1jc2rRqVYSvISkhcoyCjUioYiTEWsr6xCc8fGnfMhnwui73dHa1nH5lUfJciAKDb62Pr87bWs9pC6s32nYpgdHt91Jtt5XNaQjx/mPiakNFoddDt9aXPaK2RxaVl6f6QWUhhbXUFg4tLZYO2ENfB+dmpsFw5IvVmWyni8GB/vDArpYJdTxXQIJSuF+WIPJt/KW3g/Oz01o6cVHgmroPDg32uA5COiCpiiGxFtVxMZGSYFeIhFeIN5FEq/fqVsKxaLsZmCCc5Oj7h/i8VojKAhMhNnqrcBhqE3G1AKEQn+lAqFkqDUDmitvDqFQoZXFwqKxSNGA1CbH3aNrb0ugz8230TCpF9bYZovnqD4Z27ALEQja8pmq9xnvxE7U4TSQgANJq39wviOtj7ouda48LI/fLw/CE3MBDX0bbgphiNiMn5udHqcCvP57KJbIxGO7uJEBqEwmOvaJcnroN8Lot8LqvdjqxvkacWQ2bqquXiDU/GnOze7o6V0eRttI9rtVpN1DFevJbx89cVgOuoNc3c3CzevX2DudlZfP/29UYZe163vY8f3uPF8/kb/wndLw1CLC4ta1U8jWnigKHrmnmOW7pGbBNmjVZH+6w9SbVcVK4ZUb+kayRKxOn2+sqTJQ+Zowb40xZQCBG9pAuLZjrJA4bI9jBEH1cqhIXIKNAgRKPVweLSslQQi3oyj1YpFYTTXXnUZV81LidLXAeZdGo8hQhx4A30sjS/r34Iy7SyKEnleU04PNiXGlGtDTFJJ6tDpVRQ9kFLSFK5Kh0yCymtPSmWBF1SsJyZDsoR8fzhvYiolAraIgCNO0RVXI8bdigzXZdKIdMZC3ajlEmnQFzH+u6Qh61HAxRrpNvro9HqYG11BQCEjbDUz9HxiXHSIerdIUMqZPJaWRcmigbh+Ira84fc6+moN7mTxHI9/T8Q2wnxvnkwQv4CWNjNo3oqFQoAAAAASUVORK5CYII="/>
                            </defs>
                        </svg>

                    </div>
                    <div class="social-icon more">
                        <svg width="63" height="41" viewBox="0 0 63 41" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="63" height="41" fill="url(#pattern0_2_55)"/>
                            <defs>
                                <pattern id="pattern0_2_55" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_2_55" transform="matrix(0.00869565 0 0 0.0133616 0 -0.00106045)"/>
                                </pattern>
                                <image id="image0_2_55" width="115" height="75" preserveAspectRatio="none" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAABLCAYAAABDargmAAAABHNCSVQICAgIfAhkiAAAABl0RVh0U29mdHdhcmUAZ25vbWUtc2NyZWVuc2hvdO8Dvz4AAAAuaVRYdENyZWF0aW9uIFRpbWUAAAAAANCf0L0gMTQg0LjRjtC7IDIwMjUgMDA6MDY6MDAox48UAAAA5ElEQVR4nO3csQnDQBAAQcu4EUWO1X8Rih2plFMNwjKGZSb/v4fl0l9mZh4kPP/9AO4jZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGvH518frevjp/fHbzLrKZIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBmy+Aixw2aGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGiBkiZoiYIWKGnLRAEY9nm60OAAAAAElFTkSuQmCC"/>
                            </defs>
                        </svg>

                    </div>
                </div>
            </div>

            <!-- About Us Section -->
            <div class="footer-section">
                <h3 class="footer-section-title">About Us</h3>
                <div class="footer-links">
                    <a href="#" class="footer-link">About</a>
                    <a href="#" class="footer-link">Careers</a>
                    <a href="#" class="footer-link">Announcements</a>
                    <a href="#" class="footer-link">News</a>
                    <a href="#" class="footer-link">Press</a>
                    <a href="#" class="footer-link">Legal</a>
                    <a href="#" class="footer-link">Terms</a>
                    <a href="#" class="footer-link">Privacy</a>
                    <a href="#" class="footer-link">Building Trust</a>
                    <a href="#" class="footer-link">Blog</a>
                    <a href="#" class="footer-link">Community</a>
                    <a href="#" class="footer-link">Risk Warning</a>
                    <a href="#" class="footer-link">Notices</a>
                    <a href="#" class="footer-link">Downloads</a>
                    <a href="#" class="footer-link">Desktop Application</a>
                </div>
            </div>

            <!-- Products Section -->
            <div class="footer-section">
                <h3 class="footer-section-title">Products</h3>
                <div class="footer-links">
                    <a href="#" class="footer-link">Exchange</a>
                    <a href="#" class="footer-link">Buy Crypto</a>
                    <a href="#" class="footer-link">Pay</a>
                    <a href="#" class="footer-link">Academy</a>
                    <a href="#" class="footer-link">Live</a>
                    <a href="#" class="footer-link">Tax</a>
                    <a href="#" class="footer-link">Gift Card</a>
                    <a href="#" class="footer-link">Launchpool</a>
                    <a href="#" class="footer-link">Auto-Invest</a>
                    <a href="#" class="footer-link">ETH Staking</a>
                    <a href="#" class="footer-link">NFT</a>
                    <a href="#" class="footer-link">BABT</a>
                    <a href="#" class="footer-link">Research</a>
                    <a href="#" class="footer-link">Charity</a>
                </div>
            </div>

            <!-- Business Section -->
            <div class="footer-section">
                <h3 class="footer-section-title">Business</h3>
                <div class="footer-links">
                    <a href="#" class="footer-link">P2P Merchant Application</a>
                    <a href="#" class="footer-link">P2Pro Merchant Application</a>
                    <a href="#" class="footer-link">Listing Application</a>
                    <a href="#" class="footer-link">Institutional & VIP Services</a>
                    <a href="#" class="footer-link">Labs</a>
                    <a href="#" class="footer-link">Binance Connect</a>
                </div>
                <!-- Learn Section -->
                <div class="footer-section learn">
                    <h3 class="footer-section-title">Learn</h3>
                    <div class="footer-links">
                        <a href="#" class="footer-link">Learn & Earn</a>
                        <a href="#" class="footer-link">Browse Crypto Prices</a>
                        <a href="#" class="footer-link">Bitcoin Price</a>
                        <a href="#" class="footer-link">Ethereum Price</a>
                        <a href="#" class="footer-link">Browse Crypto Price Predictions</a>
                        <a href="#" class="footer-link">Bitcoin Price Prediction</a>
                        <a href="#" class="footer-link">Ethereum Price Prediction</a>
                        <a href="#" class="footer-link">Ethereum Upgrade (Pectra)</a>
                        <a href="#" class="footer-link">Buy Bitcoin</a>
                        <a href="#" class="footer-link">Buy BNB</a>
                        <a href="#" class="footer-link">Buy XRP</a>
                        <a href="#" class="footer-link">Buy Dogecoin</a>
                        <a href="#" class="footer-link">Buy Ethereum</a>
                        <a href="#" class="footer-link">Buy Tradable Altcoins</a>
                    </div>
                </div>
            </div>

            <!-- Service Section -->
            <div class="footer-section">
                <h3 class="footer-section-title">Service</h3>
                <div class="footer-links">
                    <a href="#" class="footer-link">Affiliate</a>
                    <a href="#" class="footer-link">Referral</a>
                    <a href="#" class="footer-link">BNB</a>
                    <a href="#" class="footer-link">OTC Trading</a>
                    <a href="#" class="footer-link">Historical Market Data</a>
                    <a href="#" class="footer-link">Trading Insight</a>
                    <a href="#" class="footer-link">Proof of Reserves</a>
                </div>
                <!-- Support Section -->
                <div class="footer-section support">
                    <h3 class="footer-section-title">Support</h3>
                    <div class="footer-links">
                        <a href="#" class="footer-link">24/7 Chat Support</a>
                        <a href="#" class="footer-link">Support Center</a>
                        <a href="#" class="footer-link">Product Feedback & Suggestions</a>
                        <a href="#" class="footer-link">Fees</a>
                        <a href="#" class="footer-link">APIs</a>
                        <a href="#" class="footer-link">Binance Verify</a>
                        <a href="#" class="footer-link">Trading Rules</a>
                        <a href="#" class="footer-link">Binance Airdrop Portal</a>
                        <a href="#" class="footer-link">Law Enforcement Requests</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div>
                <span>Binance© 2025</span>
            </div>
            <div class="footer-bottom-links">
                <a href="#" class="footer-bottom-link">Cookie Preferences</a>
            </div>
        </div>
    </div>
</footer>
</body>
<script>
    function toggleFaq(element) {
        const answer = element.nextElementSibling;
        const sign = element.querySelector("span:last-child");
        if (answer.style.display === "none" || answer.style.display === "") {
            answer.style.display = "block";
            sign.textContent = "−";
        } else {
            answer.style.display = "none";
            sign.textContent = "+";
        }
    }
</script>
</html>
