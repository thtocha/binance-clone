<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binance Dashboard Clone</title>

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

        /* Header Styles */
        .header {
            background-color: #ffffff;
            padding: 12px 24px;
            position: sticky;
            top: 0;
            z-index: 100;
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

        .dropdown-item-icon.overview {
            background-color: #f0b90b;
            color: white;
        }

        .dropdown-item-icon.simple {
            background-color: #10b981;
            color: white;
        }

        .dropdown-item-icon.advanced {
            background-color: #3b82f6;
            color: white;
        }

        .dropdown-item-icon.loans {
            background-color: #8b5cf6;
            color: white;
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

        /* Layout */
        .main-layout {
            display: flex;
            min-height: calc(100vh - 64px);
        }

        /* Sidebar Styles */
        .sidebar {
            width: 256px;
            background-color: #ffffff;
            padding: 16px;
        }

        .sidebar-menu {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .sidebar-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
            color: #5e6673;
            font-weight: 500;
            font-size: 14px;
        }

        .sidebar-item:hover {
            background-color: #f9fafb;
            color: #1e2329;
        }

        .sidebar-item.active {
            background-color: #f3f4f5;
            color: #1e2329;
        }

        .sidebar-item-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 24px;
            overflow-y: auto;
        }

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        /* Card Styles */
        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #eaecef;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .card-profile {
            background-color: #ffffff;
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e2329;
        }

        .more-link {
            color: #1e2329;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .more-link:hover {
            color: #f0b90b;
        }

        /* User Profile */
        .user-profile {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 16px;
        }

        .user-avatar-container {
            position: relative;
        }

        .user-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-name {
            font-size: 20px;
            font-weight: 600;
            color: #1e2329;
            margin-bottom: 4px;
        }

        .user-details {
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 14px;
            color: #5e6673;
        }

        .user-profile-stats {
            display: flex;
            justify-content: flex-start;
            gap: 148px;
        }

        .user-stats {
            display: flex;
            gap: 24px;
            text-align: center;
        }

        .user-stat-label {
            font-size: 14px;
            color: #5e6673;
            margin-bottom: 4px;
        }

        .user-stat-value {
            font-size: 18px;
            font-weight: 600;
            color: #1e2329;
        }

        /* Balance Card */
        .balance-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 3px;
        }

        .balance-actions {
            display: flex;
            gap: 8px;
        }

        .balance-button {
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .balance-button.primary {
            background-color: #fcd535;
            color: #1e2329;
        }

        .balance-button.primary:hover {
            background-color: #f0b90b;
        }

        .balance-button.secondary {
            background-color: #f3f4f6;
            color: #5e6673;
        }

        .balance-button.secondary:hover {
            background-color: #e5e7eb;
        }

        .balance-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .balance-amount {
            display: flex;
            align-items: baseline;
            gap: 8px;
            margin-bottom: 8px;
        }

        .balance-value {
            font-size: 32px;
            font-weight: 700;
            color: #1e2329;
        }

        .balance-currency {
            font-size: 18px;
            color: #5e6673;
            font-weight: 500;
        }

        .balance-usd {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 4px;
        }

        .balance-usd-amount {
            font-size: 14px;
            color: #5e6673;
        }

        .balance-pnl {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .balance-pnl.positive {
            color: #10b981;
        }

        .balance-pnl.negative {
            color: #ef4444;
        }

        .balance-pnl-label {
            font-size: 14px;
            color: #5e6673;
            margin-top: 4px;
        }

        .balance-percentage {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        /* Markets Table */
        .markets-tabs {
            display: flex;
            gap: 24px;
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 16px;
        }

        .markets-tab {
            padding: 0 0 12px 0;
            border: none;
            background: transparent;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
            color: #5e6673;
            transition: all 0.2s ease;
            position: relative;
        }

        .markets-tab.active {
            color: black;
        }

        .markets-tab.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #f0b90b;
            border-radius: 1px;
        }

        .markets-tab:hover:not(.active) {
            color: #1e2329;
        }

        .markets-table {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .markets-header {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
            gap: 16px;
            font-size: 14px;
            color: #5e6673;
            font-weight: 500;
            padding: 8px;
        }

        .markets-header div:not(:first-child) {
            text-align: right;
        }

        .crypto-list {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .crypto-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
            gap: 16px;
            align-items: center;
            padding: 12px 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .crypto-row:hover {
            background-color: #f9fafb;
        }

        .crypto-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .crypto-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #f3f4f6;
        }

        .crypto-symbol {
            font-weight: 600;
            color: #1e2329;
            font-size: 14px;
            margin-bottom: 2px;
        }

        .crypto-name {
            font-size: 12px;
            color: #5e6673;
        }

        .crypto-amount {
            text-align: right;
        }

        .crypto-amount-value {
            font-weight: 600;
            color: #1e2329;
            font-size: 14px;
            margin-bottom: 2px;
        }

        .crypto-amount-usd {
            font-size: 12px;
            color: #5e6673;
        }

        .crypto-price {
            text-align: right;
        }

        .crypto-price-value {
            font-weight: 600;
            color: #1e2329;
            font-size: 14px;
            margin-bottom: 2px;
        }

        .crypto-price-usd {
            font-size: 12px;
            color: #5e6673;
        }

        .crypto-change {
            text-align: right;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 4px;
            font-weight: 500;
            font-size: 14px;
        }

        .crypto-change.positive {
            color: #10b981;
        }

        .crypto-change.negative {
            color: #ef4444;
        }

        .crypto-trade {
            text-align: right;
        }

        .trade-button {
            color: #C99400;
            text-decoration: underline;
            font-weight: 500;
            font-size: 12px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 4px;
            transition: all 0.2s ease;
        }

        .trade-button:hover {
            color: #f0b90b;
        }

        /* Loading States */
        .loading {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            color: #5e6673;
        }

        .loading-spinner {
            width: 20px;
            height: 20px;
            border: 2px solid #e5e7eb;
            border-top: 2px solid #f0b90b;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-right: 8px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Error States */
        .error {
            color: #ef4444;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }

        .retry-button {
            margin-top: 8px;
            padding: 8px 16px;
            background: #f0b90b;
            color: #1e2329;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .retry-button:hover {
            background: #d97706;
        }

        /* Discover Section */
        .discover-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            align-items: start;
        }

        @media (max-width: 1024px) {
            .discover-grid {
                grid-template-columns: 1fr;
            }
        }

        .discover-description {
            font-size: 14px;
            color: #5e6673;
            margin-bottom: 16px;
        }

        .earn-table {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .earn-header {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 16px;
            font-size: 14px;
            color: #5e6673;
            font-weight: 500;
            padding: 8px;
        }

        .earn-header div:not(:first-child) {
            text-align: right;
        }

        .earn-products {
            display: flex;
            flex-direction: column;
            gap: 8px;
            max-height: 300px;
            overflow-y: auto;
        }

        /* Custom scrollbar for earn products */
        .earn-products::-webkit-scrollbar {
            width: 6px;
        }

        .earn-products::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .earn-products::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }

        .earn-products::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        .earn-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 16px;
            align-items: center;
            padding: 12px 8px;
            border-radius: 8px;
            transition: background-color 0.2s ease;
        }

        .earn-row:hover {
            background-color: #f9fafb;
        }

        .earn-coin {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .earn-coin-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #f3f4f6;
        }

        .earn-coin-symbol {
            font-weight: 500;
            color: #1e2329;
            font-size: 14px;
        }

        .earn-apy {
            text-align: right;
            color: #10b981;
            font-weight: 500;
            font-size: 14px;
        }

        .earn-duration {
            text-align: right;
            color: #5e6673;
            font-size: 14px;
        }

        .earn-action {
            text-align: right;
        }

        .subscribe-button {
            color: #C99400;
            text-decoration: underline;
            font-weight: 500;
            font-size: 12px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 4px;
            transition: all 0.2s ease;
        }

        .subscribe-button:hover {
            background-color: #f0b90b;
            transform: translateY(-1px);
        }

        .earn-promo {
            margin-top: 24px;
            padding: 16px;
            background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);
            border-radius: 12px;
        }

        .earn-promo-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .earn-promo-icon {
            width: 48px;
            height: 48px;
            background-color: #fef3c7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .earn-promo-title {
            font-weight: 600;
            color: #1e2329;
            font-size: 16px;
            margin-bottom: 4px;
        }

        .earn-promo-description {
            font-size: 14px;
            color: #5e6673;
        }

        /* News Section - Compact Announcements */
        .announcements-card {
            width: fit-content;
            height: fit-content;
        }

        .news-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
            height: auto;
            overflow: visible;
        }

        .news-item {
            border-bottom: 1px solid #f3f4f6;
            padding-bottom: 12px;
        }

        .news-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .news-title {
            font-weight: 500;
            color: #1e2329;
            font-size: 13px;
            line-height: 1.4;
            margin-bottom: 6px;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .news-title:hover {
            color: #f0b90b;
        }

        .news-date {
            font-size: 12px;
            color: #5e6673;
        }

        /* Square Section - Wide layout */
        .square-card {
            width: 660px;
        }

        .trending-section {
            margin-bottom: 16px;
        }

        .trending-title {
            font-weight: 500;
            color: #1e2329;
            font-size: 16px;
            margin-bottom: 12px;
        }

        .trending-topics {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .trending-topic {
            background-color: #f3f4f6;
            color: #5e6673;
            padding: 6px 12px;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .trending-topic:hover {
            background-color: #e5e7eb;
            color: #1e2329;
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

        /* Community Section with Social Icons */
        .community-section {
            display: flex;
            flex-direction: column;
            gap: 16px;
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
        /*    background-color: black;*/
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .main-content {
                padding: 16px;
            }

            .card {
                padding: 16px;
            }

            .card-profile {
                padding: 16px;
            }

            .discover-grid {
                grid-template-columns: 1fr;
            }

            .announcements-card,
            .square-card {
                width: 100%;
            }

            .user-profile-stats {
                gap: 24px;
            }

            .crypto-row {
                grid-template-columns: 1fr;
                gap: 8px;
            }

            .markets-header {
                grid-template-columns: 1fr;
            }

            .earn-row {
                grid-template-columns: 1fr;
            }

            .earn-header {
                grid-template-columns: 1fr;
            }



            .footer-controls {
                flex-direction: column;
                align-items: flex-start;
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
        }
    </style>
</head>
<body>
<!-- Header -->
@include('partials/header')

<div class="main-layout">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-menu">
            <div class="sidebar-item active">
                <div class="sidebar-item-content">
                    <svg width="20" height="20" style="color: black" size="24" class="bn-svg icon-active left-icon-pc sidebar-icon-size shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4 12v8h5.5v-6h5v6H20v-8l-8-8-8 8z" fill="currentColor"></path></svg>
                    <span>Dashboard</span>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item-content">
                    <svg width="20" height="20" style="color: rgb(128,128,128)" size="24" class="bn-svg icon-normal left-icon-pc sidebar-icon-size shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4 8.5A4.5 4.5 0 018.5 4H20v16H8.5A4.5 4.5 0 014 15.5v-7zM8.5 7H17v3H8.5a1.5 1.5 0 110-3zm4.5 6h4v4h-4v-4z" fill="currentColor"></path></svg>
                    <span>Assets</span>
                </div>
                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item-content">
                    <svg width="20" height="20" style="color: rgb(128,128,128)" size="24" class="bn-svg icon-normal left-icon-pc sidebar-icon-size shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 3v18h4.91A7.5 7.5 0 0118.5 9.365V7l-4-4h-10zm16 13a5.5 5.5 0 11-11 0 5.5 5.5 0 0111 0zm-4.79-2.875h-2v4l3.031 1.75 1-1.732-2.031-1.173v-2.845z" fill="currentColor"></path></svg>
                    <span>Orders</span>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item-content">
                    <svg width="20" height="20" style="color: rgb(128,128,128)"  class="bn-svg icon-normal left-icon-pc sidebar-icon-size shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 5h18v4a3 3 0 100 6v4H3v-4a3 3 0 100-6V5zm12.5 2.5H13v9h2.5v-9z" fill="currentColor"></path></svg>
                    <span>Rewards Hub</span>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item-content">
                    <svg width="20" height="20" style="color: rgb(128,128,128)" class="bn-svg icon-normal left-icon-pc sidebar-icon-size shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11 8.5a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zM2 17a3 3 0 013-3h5a3 3 0 013 3v3H2v-3zm14.5-1v-3h-3v-3h3V7h3v3h3v3h-3v3h-3z" fill="currentColor"></path></svg>
                    <span>Referral</span>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item-content">
                    <svg width="20" height="20" style="color: rgb(128,128,128)" class="bn-svg icon-normal left-icon-pc sidebar-icon-size shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 8a4 4 0 11-8 0 4 4 0 018 0zm-8 6a4 4 0 00-4 4v2h16v-2a4 4 0 00-4-4H8z" fill="currentColor"></path></svg>
                    <span>Account</span>
                </div>
                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item-content">
                    <svg width="20" height="20" style="color: rgb(128,128,128)" class="bn-svg icon-normal left-icon-pc sidebar-icon-size shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.5a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zM3 17a3 3 0 013-3h5a3 3 0 013 3v3H3v-3zM21 5h-5v3h5V5zm0 5.002h-5v3h5v-3zm-5 5.002h5v3h-5v-3z" fill="currentColor"></path></svg>
                    <span>Sub Accounts</span>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item-content">
                    <svg width="20" height="20" style="color: rgb(128,128,128)" class="bn-svg icon-normal left-icon-pc sidebar-icon-size shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8 3h-3.6v2.027c-.66.17-1.285.431-1.858.77L6.91 4.363 4.363 6.91l1.434 1.433a7.157 7.157 0 00-.77 1.858H3v3.6h2.027c.17.66.431 1.285.77 1.858L4.363 17.09l2.546 2.546 1.433-1.434c.573.339 1.197.6 1.858.77V21h3.6v-2.027a7.157 7.157 0 001.858-.77l1.433 1.434 2.546-2.546-1.434-1.434a7.16 7.16 0 00.77-1.857H21v-3.6h-2.027a7.158 7.158 0 00-.77-1.858l1.434-1.433-2.546-2.546-1.434 1.434a7.156 7.156 0 00-1.857-.77V3zm-4.5 9a2.7 2.7 0 115.4 0 2.7 2.7 0 01-5.4 0z" fill="currentColor"></path></svg>
                    <span>Settings</span>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="content-container">
            <!-- User Profile -->
            <div class="card-profile">
                <div class="user-profile">
                    <div class="user-avatar-container">
                        <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&w=100&h=100&dpr=1"
                             alt="User Avatar" class="user-avatar">
                    </div>

                    <div class="user-info">
                        <h3 class="user-name">User-4e5b5</h3>
                        <div class="user-details">
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="user-profile-line" style="height: 32px; width: 1px; background-color: #EAECEF"></div>

                    <div class="user-profile-stats">
                        <div class="user-stats">
                            <div>
                                <p class="user-stat-label">UID</p>
                                <p>72414324</p>
                            </div>
                        </div>
                        <div class="user-stats">
                            <div>
                                <p class="user-stat-label">VIP level</p>
                                <p>9</p>
                            </div>
                        </div>
                        <div class="user-stats">
                            <div>
                                <p class="user-stat-label">Following</p>
                                <p class="user-stat-value">0</p>
                            </div>
                        </div>
                        <div class="user-stats">
                            <div>
                                <p class="user-stat-label">Followers</p>
                                <p class="user-stat-value">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Balance Card -->
            <div class="card">
                <div class="balance-header">
                    <h3 class="card-title">Estimated Balance</h3>
                    <div class="balance-actions">
                        <button class="balance-button secondary">Deposit</button>
                        <button class="balance-button secondary">Withdraw</button>
                        <button class="balance-button secondary">Cash In</button>
                    </div>
                </div>

                <div class="balance-content">
                    <div class="balance-info">
                        <div class="balance-amount">
                            <span class="balance-value" id="total-btc">3.150000</span>
                            <span class="balance-currency">BTC</span>
                        </div>

                        <div class="balance-usd">
                            <span class="balance-usd-amount" id="total-usd">≈ $343,000.00</span>
                        </div>

                        <div class="balance-percentage">
                            <p class="balance-pnl-label">Today's PnL</p>
                            <div class="balance-pnl positive">
                                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <span>$0.45 (+0.012%)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Markets Table -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Markets</h3>
                    <a href="#" class="more-link">More →</a>
                </div>

                <div class="markets-tabs">
                    <button class="markets-tab active">Holding</button>
                    <button class="markets-tab">Hot</button>
                    <button class="markets-tab">Favorite</button>
                    <button class="markets-tab">Top Gainers</button>
                    <button class="markets-tab">24h Volume</button>
                </div>

                <div class="markets-table">
                    <div class="markets-header">
                        <div>Coin</div>
                        <div>Amount</div>
                        <div>Coin Price</div>
                        <div>24h Change</div>
                        <div>Trade</div>
                    </div>

                    <div class="crypto-list" id="crypto-list">
                        <!-- Crypto rows will be populated here -->
                    </div>
                </div>
            </div>

            <!-- Discover Section -->
            <div class="discover-grid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Discover</h3>
                        <a href="#" class="more-link">More →</a>
                    </div>

                    <div class="markets-tabs">
                        <button class="markets-tab active">Earn</button>
                        <button class="markets-tab">Copy Trading</button>
                    </div>

                    <p class="discover-description">Simple & Secure. Search popular coins and start earning.</p>

                    <div class="earn-table">
                        <div class="earn-header">
                            <div>Coin ↓</div>
                            <div>Est.APR ↓</div>
                            <div>Duration</div>
                            <div>Action</div>
                        </div>

                        <div class="earn-products" id="earn-products">
                            <!-- First 5 coins: USDT, USDC, ETH, SOL, BNB -->
                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/325/small/Tether.png"
                                        alt="USDT"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=U'"
                                    />
                                    <span class="earn-coin-symbol">USDT</span>
                                </div>
                                <div class="earn-apy">6.68% - 6.68%</div>
                                <div class="earn-duration">flexible</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/6319/small/USD_Coin_icon.png"
                                        alt="USDC"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=U'"
                                    />
                                    <span class="earn-coin-symbol">USDC</span>
                                </div>
                                <div class="earn-apy">10.98% - 10.98%</div>
                                <div class="earn-duration">flexible</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/279/small/ethereum.png"
                                        alt="ETH"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=E'"
                                    />
                                    <span class="earn-coin-symbol">ETH</span>
                                </div>
                                <div class="earn-apy">1.40% - 136.60%</div>
                                <div class="earn-duration">flexible</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/4128/small/solana.png"
                                        alt="SOL"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=S'"
                                    />
                                    <span class="earn-coin-symbol">SOL</span>
                                </div>
                                <div class="earn-apy">1.86% - 101.34%</div>
                                <div class="earn-duration">flexible / fixed</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/825/small/bnb-icon2_2x.png"
                                        alt="BNB"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=B'"
                                    />
                                    <span class="earn-coin-symbol">BNB</span>
                                </div>
                                <div class="earn-apy">0.16% - 10.68%</div>
                                <div class="earn-duration">flexible / fixed</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <!-- Additional 5 coins that require scrolling -->
                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/975/small/cardano.png"
                                        alt="ADA"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=A'"
                                    />
                                    <span class="earn-coin-symbol">ADA</span>
                                </div>
                                <div class="earn-apy">2.15% - 8.45%</div>
                                <div class="earn-duration">flexible</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/44/small/xrp-symbol-white-128.png"
                                        alt="XRP"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=X'"
                                    />
                                    <span class="earn-coin-symbol">XRP</span>
                                </div>
                                <div class="earn-apy">1.85% - 12.30%</div>
                                <div class="earn-duration">flexible / fixed</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/5/small/dogecoin.png"
                                        alt="DOGE"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=D'"
                                    />
                                    <span class="earn-coin-symbol">DOGE</span>
                                </div>
                                <div class="earn-apy">3.25% - 15.80%</div>
                                <div class="earn-duration">flexible</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/12559/small/Avalanche_Circle_RedWhite_Trans.png"
                                        alt="AVAX"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=A'"
                                    />
                                    <span class="earn-coin-symbol">AVAX</span>
                                </div>
                                <div class="earn-apy">4.12% - 22.50%</div>
                                <div class="earn-duration">flexible / fixed</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>

                            <div class="earn-row">
                                <div class="earn-coin">
                                    <img
                                        src="https://assets.coingecko.com/coins/images/12171/small/polkadot.png"
                                        alt="DOT"
                                        class="earn-coin-icon"
                                        onerror="this.src='https://via.placeholder.com/24x24/f3f4f6/5e6673?text=D'"
                                    />
                                    <span class="earn-coin-symbol">DOT</span>
                                </div>
                                <div class="earn-apy">5.75% - 18.90%</div>
                                <div class="earn-duration">flexible / fixed</div>
                                <div class="earn-action">
                                    <button class="subscribe-button">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Compact Announcements Card -->
                <div class="card announcements-card">
                    <div class="card-header">
                        <h3 class="card-title">Announcements</h3>
                        <a href="#" class="more-link">More →</a>
                    </div>

                    <div class="news-list" id="news-list">
                        <div class="news-item">
                            <h4 class="news-title">Binance Will Add Lagrande (LA) on Earn, Buy Crypto, Convert & Margin</h4>
                            <p class="news-date">07/09/2025</p>
                        </div>
                        <div class="news-item">
                            <h4 class="news-title">Lagrande (LA) Listing Will Be Postponed</h4>
                            <p class="news-date">07/09/2025</p>
                        </div>
                    </div>
                </div>

                <div class="card square-card">
                    <div class="card-header">
                        <h3 class="card-title">Square</h3>
                        <a href="#" class="more-link">More →</a>
                    </div>

                    <div class="markets-tabs">
                        <button class="markets-tab active">News</button>
                        <button class="markets-tab">Suggested to You</button>
                    </div>

                    <div class="trending-section">
                        <h4 class="trending-title">Trending topic</h4>
                        <div class="trending-topics" id="trending-topics">
                            <span class="trending-topic"># BinanceHODLerLA</span>
                            <span class="trending-topic"># SCEETApproval</span>
                            <span class="trending-topic"># BinanceTurns8</span>
                        </div>
                    </div>

                    <!-- News timeline -->
                    <div style="margin-top: 24px;">
                        <div style="display: flex; gap: 16px; margin-bottom: 24px;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <div style="width: 8px; height: 8px; background-color: #e5e7eb; border-radius: 50%;"></div>
                                <div style="width: 1px; height: 60px; background-color: #e5e7eb;"></div>
                            </div>
                            <div style="flex: 1;">
                                <p style="font-size: 12px; color: #5e6673; margin-bottom: 4px;">4 hours ago</p>
                                <h4 style="font-weight: 500; color: #1e2329; font-size: 14px; line-height: 1.4; margin-bottom: 8px;">Blockchain Technology and Digital Assets to Persist, Says U.S. Senator</h4>
                                <p style="font-size: 12px; color: #5e6673; line-height: 1.4;">According to PANews, U.S. Senator Tim Scott has affirmed that blockchain technology and digital assets are here to stay. He emphasized that these innovations will continue to exist and evolve.</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 16px; margin-bottom: 24px;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <div style="width: 8px; height: 8px; background-color: #e5e7eb; border-radius: 50%;"></div>
                                <div style="width: 1px; height: 60px; background-color: #e5e7eb;"></div>
                            </div>
                            <div style="flex: 1;">
                                <p style="font-size: 12px; color: #5e6673; margin-bottom: 4px;">4 hours ago</p>
                                <h4 style="font-weight: 500; color: #1e2329; font-size: 14px; line-height: 1.4; margin-bottom: 8px;">GMX Platform Faces Security Breach on Arbitrum</h4>
                                <p style="font-size: 12px; color: #5e6673; line-height: 1.4;">According to Foresight News, GMX has reported a security breach on its Telegram channel involving the GLP pool on the Arbitrum platform. Approximately $40 million worth of tokens have been transferred from the GLP pool to an unknown wallet....</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 16px;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <div style="width: 8px; height: 8px; background-color: #e5e7eb; border-radius: 50%;"></div>
                            </div>
                            <div style="flex: 1;">
                                <p style="font-size: 12px; color: #5e6673; margin-bottom: 4px;">4 hours ago</p>
                                <h4 style="font-weight: 500; color: #1e2329; font-size: 14px; line-height: 1.4;">Trump Criticizes Federal Reserve's Interest Rates, Calls for Reduction</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Footer -->
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

<script>
    // Cryptocurrency data storage
    let cryptoAssets = [];
    let isLoading = false;
    let lastUpdateTime = 0;
    const UPDATE_INTERVAL = 30000; // 30 seconds
    const TARGET_BALANCE = 343000; // Target balance in USD

    // Coin icon mapping using CoinGecko API
    const getCoinIcon = (symbol) => {
        const iconMap = {
            'BTC': 'https://assets.coingecko.com/coins/images/1/small/bitcoin.png',
            'ETH': 'https://assets.coingecko.com/coins/images/279/small/ethereum.png',
            'BNB': 'https://assets.coingecko.com/coins/images/825/small/bnb-icon2_2x.png',
            'ADA': 'https://assets.coingecko.com/coins/images/975/small/cardano.png',
            'SOL': 'https://assets.coingecko.com/coins/images/4128/small/solana.png',
            'XRP': 'https://assets.coingecko.com/coins/images/44/small/xrp-symbol-white-128.png',
            'DOGE': 'https://assets.coingecko.com/coins/images/5/small/dogecoin.png',
            'AVAX': 'https://assets.coingecko.com/coins/images/12559/small/Avalanche_Circle_RedWhite_Trans.png',
            'DOT': 'https://assets.coingecko.com/coins/images/12171/small/polkadot.png',
            'LINK': 'https://assets.coingecko.com/coins/images/877/small/chainlink-new-logo.png',
            'UNI': 'https://assets.coingecko.com/coins/images/12504/small/uniswap-uni.png',
            'LTC': 'https://assets.coingecko.com/coins/images/2/small/litecoin.png',
            'ATOM': 'https://assets.coingecko.com/coins/images/1481/small/cosmos_hub.png',
            'TRX': 'https://assets.coingecko.com/coins/images/1094/small/tron-logo.png'
        };

        return iconMap[symbol] || `https://via.placeholder.com/32x32/f3f4f6/5e6673?text=${symbol.charAt(0)}`;
    };

    // Get full coin name from symbol
    function getCoinName(symbol) {
        const nameMap = {
            'BTC': 'Bitcoin',
            'ETH': 'Ethereum',
            'BNB': 'BNB',
            'ADA': 'Cardano',
            'SOL': 'Solana',
            'XRP': 'XRP',
            'DOGE': 'Dogecoin',
            'AVAX': 'Avalanche',
            'DOT': 'Polkadot',
            'LINK': 'Chainlink',
            'UNI': 'Uniswap',
            'LTC': 'Litecoin',
            'ATOM': 'Cosmos',
            'TRX': 'TRON'
        };

        return nameMap[symbol] || symbol;
    }

    // Generate realistic holding amounts that sum to target balance
    function generateHoldings(assets, targetBalance) {
        const baseHoldings = {
            'BTC': 1.25,
            'ETH': 15.5,
            'BNB': 45.2,
            'ADA': 25000,
            'SOL': 125.8,
            'XRP': 18500,
            'DOGE': 85000,
            'AVAX': 450.3,
            'DOT': 2800,
            'LINK': 1250,
            'UNI': 3500,
            'LTC': 125.7,
            'ATOM': 2100,
            'TRX': 125000
        };

        // Calculate current total value with base holdings
        let currentTotal = 0;
        assets.forEach(asset => {
            if (baseHoldings[asset.symbol]) {
                currentTotal += baseHoldings[asset.symbol] * asset.price;
            }
        });

        // Scale all holdings to reach target balance
        const scaleFactor = targetBalance / currentTotal;

        const scaledHoldings = {};
        assets.forEach(asset => {
            if (baseHoldings[asset.symbol]) {
                scaledHoldings[asset.symbol] = baseHoldings[asset.symbol] * scaleFactor;
            }
        });

        return scaledHoldings;
    }

    // Fetch cryptocurrency data from Binance API
    async function fetchCryptoData() {
        if (isLoading) return;

        const now = Date.now();
        if (now - lastUpdateTime < UPDATE_INTERVAL && cryptoAssets.length > 0) {
            return;
        }

        isLoading = true;

        try {
            // Popular trading pairs on Binance
            const symbols = [
                'BTCUSDT', 'ETHUSDT', 'BNBUSDT', 'ADAUSDT', 'SOLUSDT',
                'XRPUSDT', 'DOGEUSDT', 'AVAXUSDT', 'DOTUSDT',
                'LINKUSDT', 'UNIUSDT', 'LTCUSDT', 'ATOMUSDT', 'TRXUSDT'
            ];

            // Fetch 24hr ticker data from Binance
            const response = await axios.get('https://api.binance.com/api/v3/ticker/24hr');

            if (response.data && Array.isArray(response.data)) {
                // Filter for our selected symbols
                const filteredData = response.data.filter(item =>
                    symbols.includes(item.symbol)
                );

                // Transform data to our format
                const newAssets = filteredData.map(item => {
                    const symbol = item.symbol.replace('USDT', '');
                    const price = parseFloat(item.lastPrice);
                    const change24h = parseFloat(item.priceChangePercent);

                    return {
                        symbol: symbol,
                        name: getCoinName(symbol),
                        price: price,
                        priceUsd: price,
                        change24h: change24h,
                        volume24h: parseFloat(item.volume),
                        icon: getCoinIcon(symbol)
                    };
                }).slice(0, 10); // Limit to top 10

                // Generate holdings that sum to target balance
                const holdings = generateHoldings(newAssets, TARGET_BALANCE);

                // Add holdings to assets
                newAssets.forEach(asset => {
                    asset.holding = holdings[asset.symbol] || 0;
                    asset.holdingValue = asset.holding * asset.price;
                });

                cryptoAssets = newAssets;
                lastUpdateTime = now;
                populateCryptoAssets();
                updateBalance();
            } else {
                throw new Error('Invalid API response format');
            }
        } catch (error) {
            console.error('Error fetching crypto data:', error);

            // Fallback to mock data if API fails and we have no data
            if (cryptoAssets.length === 0) {
                loadFallbackData();
            }
        } finally {
            isLoading = false;
        }
    }

    // Load fallback data if API fails
    function loadFallbackData() {
        const fallbackAssets = [
            { symbol: 'BTC', name: 'Bitcoin', price: 108875, priceUsd: 108875.99, change24h: 0.77, icon: getCoinIcon('BTC') },
            { symbol: 'ETH', name: 'Ethereum', price: 3245.67, priceUsd: 3245.67, change24h: 1.23, icon: getCoinIcon('ETH') },
            { symbol: 'BNB', name: 'BNB', price: 641.2, priceUsd: 641.20, change24h: 0.68, icon: getCoinIcon('BNB') },
            { symbol: 'ADA', name: 'Cardano', price: 0.589, priceUsd: 0.59, change24h: 1.19, icon: getCoinIcon('ADA') },
            { symbol: 'SOL', name: 'Solana', price: 234.56, priceUsd: 234.56, change24h: 2.45, icon: getCoinIcon('SOL') },
            { symbol: 'XRP', name: 'XRP', price: 2.45, priceUsd: 2.45, change24h: -1.23, icon: getCoinIcon('XRP') },
            { symbol: 'DOGE', name: 'Dogecoin', price: 0.32, priceUsd: 0.32, change24h: 3.45, icon: getCoinIcon('DOGE') },
            { symbol: 'AVAX', name: 'Avalanche', price: 42.15, priceUsd: 42.15, change24h: -0.85, icon: getCoinIcon('AVAX') }
        ];

        // Generate holdings for fallback data
        const holdings = generateHoldings(fallbackAssets, TARGET_BALANCE);

        fallbackAssets.forEach(asset => {
            asset.holding = holdings[asset.symbol] || 0;
            asset.holdingValue = asset.holding * asset.price;
        });

        cryptoAssets = fallbackAssets;
        populateCryptoAssets();
        updateBalance();
    }

    // Update balance display
    function updateBalance() {
        const totalUsd = cryptoAssets.reduce((sum, asset) => sum + asset.holdingValue, 0);
        const totalBtc = totalUsd / (cryptoAssets.find(a => a.symbol === 'BTC')?.price || 108875);

        document.getElementById('total-usd').textContent = `≈ $${totalUsd.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
        document.getElementById('total-btc').textContent = totalBtc.toFixed(6);
    }

    // Populate crypto assets in the UI
    function populateCryptoAssets() {
        const cryptoList = document.getElementById('crypto-list');

        if (cryptoAssets.length === 0) {
            cryptoList.innerHTML = '<div class="loading"><div class="loading-spinner"></div>Loading market data...</div>';
            return;
        }

        cryptoList.innerHTML = '';

        cryptoAssets.forEach(asset => {
            const isPositive = asset.change24h >= 0;
            const changeClass = isPositive ? 'positive' : 'negative';
            const trendIcon = isPositive ?
                '<svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>' :
                '<svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path></svg>';

            const row = document.createElement('div');
            row.className = 'crypto-row';
            row.innerHTML = `
                <div class="crypto-info">
                    <img src="${asset.icon}" alt="${asset.symbol}" class="crypto-icon" onerror="this.src='https://via.placeholder.com/32x32/f3f4f6/5e6673?text=${asset.symbol.charAt(0)}'">
                    <div>
                        <p class="crypto-symbol">${asset.symbol}</p>
                        <p class="crypto-name">${asset.name}</p>
                    </div>
                </div>

                <div class="crypto-amount">
                    <p class="crypto-amount-value">${formatAmount(asset.holding)}</p>
                    <p class="crypto-amount-usd">$${formatPrice(asset.holdingValue)}</p>
                </div>

                <div class="crypto-price">
                    <p class="crypto-price-value">${formatPrice(asset.price)}</p>
                    <p class="crypto-price-usd">$${formatPrice(asset.priceUsd)}</p>
                </div>

                <div class="crypto-change ${changeClass}">
                    ${trendIcon}
                    <span>${isPositive ? '+' : ''}${asset.change24h.toFixed(2)}%</span>
                </div>

                <div class="crypto-trade">
                    <button class="trade-button">Trade</button>
                </div>
            `;
            cryptoList.appendChild(row);
        });
    }

    // Format price based on value
    function formatPrice(price) {
        if (price < 0.01) {
            return price.toFixed(8);
        } else if (price < 1) {
            return price.toFixed(4);
        } else if (price < 100) {
            return price.toFixed(2);
        } else {
            return price.toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }
    }

    // Format amount based on value
    function formatAmount(amount) {
        if (amount < 0.01) {
            return amount.toFixed(8);
        } else if (amount < 1) {
            return amount.toFixed(5);
        } else if (amount < 100) {
            return amount.toFixed(3);
        } else if (amount < 10000) {
            return amount.toFixed(1);
        } else {
            return amount.toLocaleString('en-US', {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            });
        }
    }

    // Initialize the page
    document.addEventListener('DOMContentLoaded', function() {
        // Load initial data
        fetchCryptoData();

        // Set up periodic updates for crypto data
        setInterval(fetchCryptoData, UPDATE_INTERVAL);

        // Add click handlers for sidebar items
        const sidebarItems = document.querySelectorAll('.sidebar-item');
        sidebarItems.forEach(item => {
            item.addEventListener('click', function() {
                sidebarItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Add click handlers for tab buttons
        const tabButtons = document.querySelectorAll('.markets-tab');
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const parent = this.parentElement;
                const siblings = parent.querySelectorAll('.markets-tab');

                siblings.forEach(sibling => sibling.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });

    // Manual refresh function
    function refreshMarketData() {
        lastUpdateTime = 0; // Force refresh
        fetchCryptoData();
    }

    // Add refresh button functionality (you can add this to UI if needed)
    window.refreshMarketData = refreshMarketData;
</script>
</body>
</html>
