<?php
/**
 * PARKER McCREA — ONE-PAGE PORTFOLIO
 * -------------------------------------------------------------
 * QUICK SETUP
 * 1. Change the email below if needed.
 * 2. Replace project links marked "UPDATE LINK".
 * 3. Put resume.pdf beside this file to activate the resume button.
 * 4. Upload this file as index.php.
 */

$contactEmail = 'parkermccrea09@gmail.com'; // Change this if your full email is different.
$currentYear  = date('Y');

// The contact form opens the visitor's email app, so no SMTP/domain email is required.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#07111f">

    <title>Parker McCrea | Developer, Athlete & Creator</title>
    <meta name="description" content="The personal portfolio of Parker McCrea—an Iowa-based developer, athlete, creator, and national FBLA competitor building practical digital experiences.">
    <meta name="keywords" content="Parker McCrea, web developer, portfolio, FBLA, Iowa, developer, athlete, student developer">
    <meta name="author" content="Parker McCrea">

    <meta property="og:title" content="Parker McCrea | Developer, Athlete & Creator">
    <meta property="og:description" content="Projects, competition experience, athletics, skills, and the work behind them.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="portfolio-preview.jpg">

    <script>
        document.documentElement.classList.add('js');
    </script>

    <style>
        :root {
            --bg: #050b14;
            --bg-soft: #091321;
            --panel: rgba(13, 25, 43, 0.76);
            --panel-solid: #0d192b;
            --panel-light: #12223a;
            --text: #f7fbff;
            --muted: #9eb0c8;
            --line: rgba(176, 204, 238, 0.13);
            --primary: #75f3c8;
            --primary-2: #50a7ff;
            --accent: #b684ff;
            --warm: #ffbd69;
            --danger: #ff7a8a;
            --success: #75f3c8;
            --shadow: 0 24px 70px rgba(0, 0, 0, 0.34);
            --radius-xl: 32px;
            --radius-lg: 24px;
            --radius-md: 18px;
            --radius-sm: 12px;
            --max-width: 1180px;
            --nav-height: 76px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: calc(var(--nav-height) + 24px);
        }

        body {
            margin: 0;
            min-width: 320px;
            color: var(--text);
            background:
                radial-gradient(circle at 14% 12%, rgba(80, 167, 255, 0.12), transparent 31%),
                radial-gradient(circle at 88% 20%, rgba(117, 243, 200, 0.10), transparent 30%),
                radial-gradient(circle at 54% 70%, rgba(182, 132, 255, 0.09), transparent 34%),
                var(--bg);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        body.menu-open {
            overflow: hidden;
        }

        ::selection {
            color: #04100d;
            background: var(--primary);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button,
        input,
        textarea {
            font: inherit;
        }

        button,
        a {
            -webkit-tap-highlight-color: transparent;
        }

        img,
        svg {
            display: block;
            max-width: 100%;
        }

        .skip-link {
            position: fixed;
            top: 12px;
            left: 12px;
            z-index: 9999;
            padding: 10px 14px;
            color: #05120f;
            background: var(--primary);
            border-radius: 10px;
            transform: translateY(-160%);
            transition: transform 180ms ease;
        }

        .skip-link:focus {
            transform: translateY(0);
        }

        .page-noise,
        .page-grid,
        #constellation {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        #constellation {
            z-index: -3;
            opacity: 0.55;
        }

        .page-grid {
            z-index: -2;
            opacity: 0.16;
            background-image:
                linear-gradient(rgba(255,255,255,0.055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.055) 1px, transparent 1px);
            background-size: 58px 58px;
            mask-image: linear-gradient(to bottom, black, transparent 85%);
        }

        .page-noise {
            z-index: -1;
            opacity: 0.035;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.75'/%3E%3C/svg%3E");
        }

        .container {
            width: min(calc(100% - 40px), var(--max-width));
            margin-inline: auto;
        }

        .site-header {
            position: fixed;
            inset: 0 0 auto;
            z-index: 1000;
            height: var(--nav-height);
            background: rgba(5, 11, 20, 0.62);
            border-bottom: 1px solid transparent;
            backdrop-filter: blur(18px);
            transition: background 200ms ease, border-color 200ms ease, box-shadow 200ms ease;
        }

        .site-header.scrolled {
            background: rgba(5, 11, 20, 0.9);
            border-color: var(--line);
            box-shadow: 0 12px 40px rgba(0,0,0,.18);
        }

        .nav-wrap {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .brand-mark {
            position: relative;
            width: 42px;
            aspect-ratio: 1;
            display: grid;
            place-items: center;
            color: #04110e;
            background: linear-gradient(135deg, var(--primary), #b8ffe8);
            border-radius: 14px;
            box-shadow: 0 0 30px rgba(117, 243, 200, 0.18);
            overflow: hidden;
        }

        .brand-mark::after {
            content: "";
            position: absolute;
            width: 26px;
            height: 70px;
            top: -20px;
            left: -20px;
            background: rgba(255,255,255,.54);
            transform: rotate(26deg);
            filter: blur(6px);
        }

        .brand-mark span {
            position: relative;
            z-index: 1;
            font-size: .95rem;
            letter-spacing: -0.08em;
        }

        .brand-text small {
            display: block;
            margin-top: -3px;
            color: var(--muted);
            font-size: .64rem;
            font-weight: 650;
            letter-spacing: .13em;
            text-transform: uppercase;
        }

        .desktop-nav {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-link {
            position: relative;
            padding: 10px 12px;
            color: #c9d5e5;
            font-size: .92rem;
            font-weight: 650;
            border-radius: 10px;
            transition: color 180ms ease, background 180ms ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--text);
            background: rgba(255,255,255,.055);
        }

        .nav-link.active::after {
            content: "";
            position: absolute;
            left: 12px;
            right: 12px;
            bottom: 5px;
            height: 2px;
            background: var(--primary);
            border-radius: 2px;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-height: 46px;
            padding: 0 17px;
            border: 1px solid transparent;
            border-radius: 13px;
            font-weight: 780;
            cursor: pointer;
            overflow: hidden;
            transition: transform 180ms ease, border-color 180ms ease, background 180ms ease, box-shadow 180ms ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn:focus-visible,
        .nav-link:focus-visible,
        .filter-btn:focus-visible,
        .social-link:focus-visible,
        .menu-toggle:focus-visible,
        .project-card:focus-visible,
        summary:focus-visible {
            outline: 3px solid rgba(117, 243, 200, 0.36);
            outline-offset: 3px;
        }

        .btn-primary {
            color: #03120e;
            background: linear-gradient(135deg, var(--primary), #a5ffe1);
            box-shadow: 0 12px 34px rgba(117, 243, 200, 0.16);
        }

        .btn-primary:hover {
            box-shadow: 0 16px 40px rgba(117, 243, 200, 0.24);
        }

        .btn-secondary {
            color: var(--text);
            background: rgba(255,255,255,.055);
            border-color: var(--line);
        }

        .btn-secondary:hover {
            border-color: rgba(117, 243, 200, .38);
            background: rgba(117, 243, 200, .075);
        }

        .btn-ghost {
            min-height: 42px;
            padding-inline: 13px;
            color: var(--text);
            background: transparent;
            border-color: var(--line);
        }

        .menu-toggle {
            width: 46px;
            height: 46px;
            display: none;
            place-items: center;
            padding: 0;
            color: var(--text);
            background: rgba(255,255,255,.05);
            border: 1px solid var(--line);
            border-radius: 13px;
            cursor: pointer;
        }

        .menu-toggle span,
        .menu-toggle::before,
        .menu-toggle::after {
            content: "";
            width: 19px;
            height: 2px;
            position: absolute;
            background: currentColor;
            border-radius: 2px;
            transition: transform 180ms ease, opacity 180ms ease;
        }

        .menu-toggle::before { transform: translateY(-6px); }
        .menu-toggle::after { transform: translateY(6px); }
        .menu-toggle[aria-expanded="true"] span { opacity: 0; }
        .menu-toggle[aria-expanded="true"]::before { transform: rotate(45deg); }
        .menu-toggle[aria-expanded="true"]::after { transform: rotate(-45deg); }

        .mobile-menu {
            position: fixed;
            inset: var(--nav-height) 0 auto;
            z-index: 999;
            display: none;
            padding: 16px 20px 24px;
            background: rgba(5,11,20,.97);
            border-bottom: 1px solid var(--line);
            box-shadow: var(--shadow);
        }

        .mobile-menu.open {
            display: grid;
            gap: 7px;
            animation: menuIn 180ms ease both;
        }

        @keyframes menuIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .mobile-menu a {
            padding: 13px 14px;
            color: #d8e2ef;
            font-weight: 700;
            border-radius: 12px;
        }

        .mobile-menu a:hover {
            background: rgba(255,255,255,.06);
        }

        main {
            overflow: clip;
        }

        section {
            position: relative;
            padding: 112px 0;
        }

        .hero {
            min-height: 100svh;
            padding-top: calc(var(--nav-height) + 74px);
            display: grid;
            align-items: center;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.06fr) minmax(420px, .94fr);
            gap: 70px;
            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 22px;
            color: #c9d8e9;
            font-size: .78rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 30px;
            height: 1px;
            background: linear-gradient(90deg, var(--primary), transparent);
        }

        .availability {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 20px;
            padding: 7px 11px;
            color: #d9fff2;
            background: rgba(117, 243, 200, 0.08);
            border: 1px solid rgba(117, 243, 200, 0.18);
            border-radius: 999px;
            font-size: .82rem;
            font-weight: 720;
        }

        .availability-dot {
            width: 8px;
            height: 8px;
            background: var(--primary);
            border-radius: 50%;
            box-shadow: 0 0 0 6px rgba(117,243,200,.08);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            50% { box-shadow: 0 0 0 10px rgba(117,243,200,0); }
        }

        h1,
        h2,
        h3,
        p {
            margin-top: 0;
        }

        h1 {
            max-width: 760px;
            margin-bottom: 24px;
            font-size: clamp(3.4rem, 7.5vw, 6.9rem);
            line-height: .94;
            letter-spacing: -0.07em;
        }

        .hero-line {
            display: block;
        }

        .gradient-text {
            color: transparent;
            background: linear-gradient(100deg, var(--primary) 0%, #b5ffe7 33%, var(--primary-2) 67%, var(--accent) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            background-size: 160% 160%;
            animation: gradientShift 7s ease infinite;
        }

        @keyframes gradientShift {
            50% { background-position: 100% 50%; }
        }

        .hero-copy {
            max-width: 650px;
            margin-bottom: 32px;
            color: var(--muted);
            font-size: clamp(1.04rem, 1.8vw, 1.22rem);
        }

        .hero-copy strong {
            color: #e8f1fb;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 40px;
        }

        .hero-micro {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px 18px;
            color: #8195ad;
            font-size: .86rem;
        }

        .hero-micro span {
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .hero-micro i {
            width: 5px;
            height: 5px;
            display: inline-block;
            background: var(--primary);
            border-radius: 50%;
        }

        .hero-visual {
            position: relative;
            min-height: 620px;
            perspective: 1300px;
        }

        .orbit {
            position: absolute;
            inset: 50% auto auto 50%;
            width: 515px;
            aspect-ratio: 1;
            border: 1px solid rgba(117,243,200,.15);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: orbitSpin 30s linear infinite;
        }

        .orbit::before,
        .orbit::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            border: 1px solid rgba(80,167,255,.12);
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .orbit::before { width: 76%; height: 76%; }
        .orbit::after { width: 124%; height: 124%; }

        .orbit-dot {
            position: absolute;
            top: 12%;
            left: 16%;
            width: 10px;
            height: 10px;
            background: var(--primary);
            border-radius: 50%;
            box-shadow: 0 0 24px var(--primary);
        }

        @keyframes orbitSpin {
            to { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .profile-console {
            position: absolute;
            inset: 54px 18px 54px 40px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            background: linear-gradient(145deg, rgba(18,34,58,.96), rgba(8,18,32,.94));
            border: 1px solid rgba(178, 208, 240, 0.17);
            border-radius: 30px;
            box-shadow: 0 40px 100px rgba(0,0,0,.42), inset 0 1px rgba(255,255,255,.04);
            overflow: hidden;
            transform: rotateY(-7deg) rotateX(2deg);
            transition: transform 220ms ease;
        }

        .hero-visual:hover .profile-console {
            transform: rotateY(-2deg) rotateX(0deg) translateY(-4px);
        }

        .console-top {
            height: 51px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 18px;
            background: rgba(255,255,255,.025);
            border-bottom: 1px solid var(--line);
        }

        .console-dots {
            display: flex;
            gap: 7px;
        }

        .console-dots i {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: rgba(255,255,255,.18);
        }

        .console-dots i:nth-child(1) { background: #ff7b86; }
        .console-dots i:nth-child(2) { background: #ffcb66; }
        .console-dots i:nth-child(3) { background: #6fe0aa; }

        .console-path {
            color: #71859e;
            font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
            font-size: .72rem;
        }

        .console-body {
            flex: 1;
            display: grid;
            grid-template-rows: auto 1fr;
            gap: 18px;
            padding: 20px;
        }

        .console-identity {
            display: grid;
            grid-template-columns: 76px 1fr;
            gap: 15px;
            align-items: center;
            padding: 16px;
            background: rgba(255,255,255,.035);
            border: 1px solid var(--line);
            border-radius: 19px;
        }

        .portrait-mark {
            width: 76px;
            aspect-ratio: 1;
            display: grid;
            place-items: center;
            color: #07110e;
            background:
                radial-gradient(circle at 34% 27%, rgba(255,255,255,.8), transparent 12%),
                linear-gradient(145deg, var(--primary), var(--primary-2));
            border-radius: 24px;
            font-size: 1.45rem;
            font-weight: 950;
            letter-spacing: -.08em;
            box-shadow: inset 0 1px rgba(255,255,255,.4);
        }

        .console-identity h3 {
            margin: 0 0 3px;
            font-size: 1.22rem;
            letter-spacing: -.03em;
        }

        .console-identity p {
            margin: 0;
            color: var(--muted);
            font-size: .83rem;
        }

        .status-line {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 9px;
            color: #c6ffe9;
            font-size: .74rem;
            font-weight: 700;
        }

        .console-panels {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 14px;
        }

        .mini-panel {
            position: relative;
            min-height: 158px;
            padding: 16px;
            background: rgba(255,255,255,.028);
            border: 1px solid var(--line);
            border-radius: 18px;
            overflow: hidden;
        }

        .mini-panel h4 {
            margin: 0 0 14px;
            color: #dce7f3;
            font-size: .76rem;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .skill-bars {
            display: grid;
            gap: 12px;
        }

        .skill-row {
            display: grid;
            grid-template-columns: 62px 1fr;
            gap: 10px;
            align-items: center;
            color: #aabbd0;
            font-size: .72rem;
        }

        .skill-track {
            height: 6px;
            background: rgba(255,255,255,.06);
            border-radius: 999px;
            overflow: hidden;
        }

        .skill-track i {
            display: block;
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--primary-2));
            border-radius: inherit;
            transform-origin: left;
            animation: barGrow 1.4s .4s cubic-bezier(.2,.8,.2,1) both;
        }

        @keyframes barGrow {
            from { transform: scaleX(0); }
        }

        .activity-list {
            display: grid;
            gap: 10px;
        }

        .activity-item {
            display: grid;
            grid-template-columns: 34px 1fr;
            gap: 9px;
            align-items: center;
        }

        .activity-icon {
            width: 34px;
            height: 34px;
            display: grid;
            place-items: center;
            color: var(--primary);
            background: rgba(117,243,200,.08);
            border: 1px solid rgba(117,243,200,.12);
            border-radius: 10px;
            font-size: .82rem;
            font-weight: 900;
        }

        .activity-item strong {
            display: block;
            color: #dce7f3;
            font-size: .75rem;
        }

        .activity-item small {
            color: #768ba4;
            font-size: .66rem;
        }

        .console-code {
            grid-column: 1 / -1;
            min-height: 151px;
            padding: 16px;
            background: #06101d;
            border: 1px solid rgba(255,255,255,.07);
            border-radius: 18px;
            font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
            font-size: .73rem;
            line-height: 1.72;
            overflow: hidden;
        }

        .code-line {
            display: block;
            white-space: nowrap;
        }

        .c-purple { color: #c49cff; }
        .c-blue { color: #79c1ff; }
        .c-green { color: #85f0be; }
        .c-orange { color: #ffc47c; }
        .c-muted { color: #60758e; }

        .floating-badge {
            position: absolute;
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 14px;
            color: #eaf3fc;
            background: rgba(9,20,35,.9);
            border: 1px solid rgba(255,255,255,.13);
            border-radius: 15px;
            box-shadow: 0 18px 50px rgba(0,0,0,.28);
            backdrop-filter: blur(14px);
            animation: float 5.5s ease-in-out infinite;
        }

        .floating-badge strong {
            display: block;
            font-size: .82rem;
        }

        .floating-badge small {
            display: block;
            color: #8195ad;
            font-size: .67rem;
        }

        .badge-icon {
            width: 34px;
            height: 34px;
            display: grid;
            place-items: center;
            color: #05120f;
            background: var(--primary);
            border-radius: 11px;
            font-size: .8rem;
            font-weight: 950;
        }

        .badge-one { top: 15px; right: -9px; }
        .badge-two { left: -6px; bottom: 14px; animation-delay: -2.2s; }

        @keyframes float {
            50% { transform: translateY(-10px); }
        }

        .scroll-cue {
            position: absolute;
            bottom: 28px;
            left: 50%;
            display: grid;
            place-items: center;
            gap: 7px;
            color: #6f839c;
            font-size: .66rem;
            letter-spacing: .13em;
            text-transform: uppercase;
            transform: translateX(-50%);
        }

        .scroll-cue::after {
            content: "";
            width: 1px;
            height: 35px;
            background: linear-gradient(var(--primary), transparent);
            animation: scrollCue 2s ease-in-out infinite;
        }

        @keyframes scrollCue {
            50% { transform: scaleY(.4); transform-origin: top; opacity: .4; }
        }

        .section-heading {
            max-width: 790px;
            margin-bottom: 48px;
        }

        .section-heading.centered {
            margin-inline: auto;
            text-align: center;
        }

        .section-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 14px;
            color: var(--primary);
            font-size: .76rem;
            font-weight: 850;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .section-kicker::before {
            content: "//";
            color: var(--primary-2);
        }

        h2 {
            margin-bottom: 18px;
            font-size: clamp(2.35rem, 5.5vw, 4.7rem);
            line-height: 1.01;
            letter-spacing: -0.055em;
        }

        .section-heading p {
            margin-bottom: 0;
            color: var(--muted);
            font-size: 1.07rem;
        }

        .stats-strip {
            padding: 0 0 30px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            background: linear-gradient(145deg, rgba(16,31,52,.84), rgba(9,19,33,.75));
            border: 1px solid var(--line);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .stat {
            min-height: 154px;
            display: grid;
            align-content: center;
            gap: 4px;
            padding: 28px;
            border-right: 1px solid var(--line);
        }

        .stat:last-child {
            border-right: none;
        }

        .stat-number {
            color: var(--text);
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 900;
            line-height: 1;
            letter-spacing: -.055em;
        }

        .stat-number em {
            color: var(--primary);
            font-style: normal;
        }

        .stat-label {
            color: var(--muted);
            font-size: .82rem;
            font-weight: 650;
        }

        .about-grid {
            display: grid;
            grid-template-columns: .82fr 1.18fr;
            gap: 68px;
            align-items: start;
        }

        .about-card {
            position: sticky;
            top: calc(var(--nav-height) + 24px);
            padding: 28px;
            background: linear-gradient(145deg, rgba(18,34,58,.88), rgba(8,18,32,.82));
            border: 1px solid var(--line);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow);
        }

        .about-photo {
            position: relative;
            min-height: 360px;
            display: grid;
            place-items: center;
            margin-bottom: 22px;
            background:
                radial-gradient(circle at 67% 22%, rgba(117,243,200,.34), transparent 21%),
                radial-gradient(circle at 30% 75%, rgba(80,167,255,.3), transparent 27%),
                linear-gradient(145deg, #12233b, #081321);
            border: 1px solid rgba(255,255,255,.09);
            border-radius: 25px;
            overflow: hidden;
        }

        .about-photo {
            position: relative;
            overflow: hidden;
        }

        .about-photo img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            object-position: center;
        }

        .about-meta {
            display: grid;
            gap: 12px;
        }

        .meta-row {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            padding-bottom: 11px;
            color: var(--muted);
            border-bottom: 1px solid var(--line);
            font-size: .85rem;
        }

        .meta-row strong {
            color: #e6eff8;
            text-align: right;
        }

        .about-content {
            padding-top: 10px;
        }

        .about-content .lead {
            margin-bottom: 26px;
            color: #e9f0f8;
            font-size: clamp(1.32rem, 2.6vw, 1.75rem);
            line-height: 1.44;
            letter-spacing: -.025em;
        }

        .about-content > p:not(.lead) {
            color: var(--muted);
        }

        .principles {
            display: grid;
            gap: 13px;
            margin-top: 30px;
        }

        .principle {
            display: grid;
            grid-template-columns: 44px 1fr;
            gap: 14px;
            padding: 17px;
            background: rgba(255,255,255,.025);
            border: 1px solid var(--line);
            border-radius: 16px;
        }

        .principle-icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            color: #04120f;
            background: linear-gradient(145deg, var(--primary), #b4ffe5);
            border-radius: 13px;
            font-weight: 950;
        }

        .principle h3 {
            margin: 1px 0 3px;
            font-size: .98rem;
            letter-spacing: -.02em;
        }

        .principle p {
            margin: 0;
            color: var(--muted);
            font-size: .84rem;
        }

        .projects {
            background: linear-gradient(to bottom, transparent, rgba(11,22,38,.62) 18%, rgba(11,22,38,.62) 82%, transparent);
        }

        .projects-top {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 30px;
            margin-bottom: 36px;
        }

        .projects-top .section-heading {
            margin-bottom: 0;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: flex-end;
        }

        .filter-btn {
            min-height: 39px;
            padding: 0 13px;
            color: #9fb2c8;
            background: rgba(255,255,255,.035);
            border: 1px solid var(--line);
            border-radius: 999px;
            font-size: .78rem;
            font-weight: 750;
            cursor: pointer;
            transition: color 170ms ease, background 170ms ease, border-color 170ms ease;
        }

        .filter-btn:hover,
        .filter-btn.active {
            color: #06120f;
            background: var(--primary);
            border-color: var(--primary);
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 18px;
        }

        .project-card {
            position: relative;
            grid-column: span 4;
            min-height: 440px;
            display: flex;
            flex-direction: column;
            background: linear-gradient(155deg, rgba(18,34,58,.9), rgba(8,18,32,.93));
            border: 1px solid var(--line);
            border-radius: 24px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 22px 58px rgba(0,0,0,.18);
            transition: transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease;
        }

        .project-card:hover {
            transform: translateY(-7px);
            border-color: rgba(117,243,200,.28);
            box-shadow: 0 30px 75px rgba(0,0,0,.29);
        }

        .project-card.featured {
            grid-column: span 8;
        }

        .project-card.hidden {
            display: none;
        }

        .project-visual {
            position: relative;
            height: 236px;
            padding: 19px;
            background:
                radial-gradient(circle at 78% 25%, rgba(117,243,200,.2), transparent 23%),
                radial-gradient(circle at 20% 82%, rgba(80,167,255,.18), transparent 24%),
                #091625;
            border-bottom: 1px solid var(--line);
            overflow: hidden;
        }
        
        .project-visual.has-image {
            padding: 0;
            background: #091625;
        }

        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transition: transform 300ms ease, filter 300ms ease;
        }

        .project-card:hover .project-image {
            transform: scale(1.035);
            filter: brightness(1.06);
        }

        .project-card.featured .project-visual {
            height: 260px;
        }

        .project-window {
            height: 100%;
            padding: 13px;
            background: rgba(6,15,26,.86);
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 16px;
            box-shadow: 0 22px 55px rgba(0,0,0,.26);
            transform: rotate(-1.2deg) translateY(8px);
            transition: transform 260ms ease;
        }

        .project-card:hover .project-window {
            transform: rotate(0deg) translateY(2px) scale(1.012);
        }

        .window-bar {
            height: 25px;
            display: flex;
            align-items: center;
            gap: 5px;
            margin: -13px -13px 12px;
            padding: 0 11px;
            background: rgba(255,255,255,.04);
            border-bottom: 1px solid rgba(255,255,255,.06);
        }

        .window-bar i {
            width: 6px;
            height: 6px;
            background: rgba(255,255,255,.2);
            border-radius: 50%;
        }

        .mock-nav {
            width: 100%;
            height: 17px;
            margin-bottom: 11px;
            background: linear-gradient(90deg, rgba(117,243,200,.6) 21%, rgba(255,255,255,.06) 21%);
            border-radius: 6px;
        }

        .mock-hero {
            height: 55px;
            margin-bottom: 10px;
            background: linear-gradient(120deg, rgba(80,167,255,.24), rgba(117,243,200,.09));
            border-radius: 9px;
        }

        .mock-columns {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 7px;
        }

        .mock-columns i {
            height: 55px;
            background: rgba(255,255,255,.05);
            border: 1px solid rgba(255,255,255,.05);
            border-radius: 8px;
        }

        .project-visual.variant-purple {
            background:
                radial-gradient(circle at 76% 18%, rgba(182,132,255,.25), transparent 25%),
                radial-gradient(circle at 20% 82%, rgba(80,167,255,.16), transparent 23%),
                #111326;
        }

        .project-visual.variant-warm {
            background:
                radial-gradient(circle at 76% 18%, rgba(255,189,105,.25), transparent 25%),
                radial-gradient(circle at 20% 82%, rgba(255,122,138,.12), transparent 23%),
                #18130e;
        }

        .project-visual.variant-green {
            background:
                radial-gradient(circle at 76% 18%, rgba(117,243,200,.24), transparent 25%),
                radial-gradient(circle at 20% 82%, rgba(104,203,136,.14), transparent 23%),
                #0d1814;
        }

        .project-visual.variant-blue {
            background:
                radial-gradient(circle at 76% 18%, rgba(80,167,255,.28), transparent 25%),
                radial-gradient(circle at 20% 82%, rgba(117,243,200,.12), transparent 23%),
                #0b1522;
        }

        .project-icon-display {
            height: 100%;
            display: grid;
            place-items: center;
        }

        .project-icon-box {
            width: 108px;
            aspect-ratio: 1;
            display: grid;
            place-items: center;
            color: #07110f;
            background: linear-gradient(145deg, var(--primary), #d6ffef);
            border-radius: 31px;
            font-size: 2.1rem;
            font-weight: 950;
            letter-spacing: -.08em;
            box-shadow: 0 30px 70px rgba(0,0,0,.24);
            transform: rotate(-6deg);
        }

        .project-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 22px;
        }

        .project-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 15px;
        }

        .project-type {
            color: var(--primary);
            font-size: .72rem;
            font-weight: 850;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .project-year {
            color: #6d829c;
            font-size: .74rem;
            font-weight: 700;
        }

        .project-card h3 {
            margin-bottom: 10px;
            font-size: 1.35rem;
            line-height: 1.18;
            letter-spacing: -.035em;
        }

        .project-card p {
            margin-bottom: 18px;
            color: var(--muted);
            font-size: .9rem;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-top: auto;
        }

        .tag {
            padding: 6px 9px;
            color: #aebfd2;
            background: rgba(255,255,255,.045);
            border: 1px solid rgba(255,255,255,.055);
            border-radius: 8px;
            font-size: .68rem;
            font-weight: 700;
        }

        .project-arrow {
            position: absolute;
            right: 18px;
            top: 18px;
            width: 40px;
            height: 40px;
            z-index: 2;
            display: grid;
            place-items: center;
            color: #03120e;
            background: rgba(117,243,200,.92);
            border-radius: 12px;
            opacity: 0;
            transform: translate(-7px, 7px);
            transition: opacity 180ms ease, transform 180ms ease;
        }

        .project-card:hover .project-arrow {
            opacity: 1;
            transform: translate(0,0);
        }

        .project-more {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .sports-grid {
            display: grid;
            grid-template-columns: .82fr 1.18fr;
            gap: 26px;
            align-items: stretch;
        }

        .sport-selector {
            display: grid;
            gap: 12px;
        }

        .sport-tab {
            width: 100%;
            min-height: 112px;
            display: grid;
            grid-template-columns: 58px 1fr auto;
            gap: 15px;
            align-items: center;
            padding: 18px;
            color: var(--text);
            text-align: left;
            background: rgba(255,255,255,.025);
            border: 1px solid var(--line);
            border-radius: 19px;
            cursor: pointer;
            transition: transform 180ms ease, background 180ms ease, border-color 180ms ease;
        }

        .sport-tab:hover {
            transform: translateX(5px);
            background: rgba(255,255,255,.04);
        }

        .sport-tab.active {
            background: linear-gradient(120deg, rgba(117,243,200,.1), rgba(80,167,255,.055));
            border-color: rgba(117,243,200,.28);
        }

        .sport-tab-icon {
            width: 58px;
            height: 58px;
            display: grid;
            place-items: center;
            color: #04120f;
            background: linear-gradient(145deg, var(--primary), #c7ffec);
            border-radius: 17px;
            font-size: 1.2rem;
            font-weight: 950;
        }

        .sport-tab h3 {
            margin: 0 0 3px;
            font-size: 1rem;
            letter-spacing: -.02em;
        }

        .sport-tab p {
            margin: 0;
            color: var(--muted);
            font-size: .78rem;
        }

        .sport-tab-arrow {
            color: #6e829b;
            font-size: 1.2rem;
        }

        .sport-display {
            position: relative;
            min-height: 480px;
            padding: 34px;
            background:
                radial-gradient(circle at 82% 20%, rgba(117,243,200,.18), transparent 27%),
                radial-gradient(circle at 18% 82%, rgba(80,167,255,.16), transparent 25%),
                linear-gradient(145deg, rgba(18,34,58,.9), rgba(8,18,32,.94));
            border: 1px solid var(--line);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .sport-display::after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            right: -170px;
            bottom: -190px;
            border: 1px solid rgba(117,243,200,.16);
            border-radius: 50%;
            box-shadow: 0 0 0 35px rgba(117,243,200,.025), 0 0 0 70px rgba(117,243,200,.018);
        }

        .sport-panel {
            position: relative;
            z-index: 1;
            display: none;
            animation: panelIn 300ms ease both;
        }

        .sport-panel.active {
            display: block;
        }

        @keyframes panelIn {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .sport-label {
            display: inline-flex;
            padding: 6px 9px;
            margin-bottom: 20px;
            color: var(--primary);
            background: rgba(117,243,200,.08);
            border: 1px solid rgba(117,243,200,.15);
            border-radius: 8px;
            font-size: .68rem;
            font-weight: 850;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .sport-panel h3 {
            max-width: 500px;
            margin-bottom: 12px;
            font-size: clamp(2rem, 4vw, 3.3rem);
            line-height: 1.03;
            letter-spacing: -.05em;
        }

        .sport-panel > p {
            max-width: 570px;
            color: var(--muted);
        }

        .sport-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 11px;
            margin: 28px 0;
        }

        .sport-stat {
            padding: 16px;
            background: rgba(5,11,20,.34);
            border: 1px solid var(--line);
            border-radius: 15px;
        }

        .sport-stat strong {
            display: block;
            margin-bottom: 3px;
            font-size: 1.22rem;
            letter-spacing: -.035em;
        }

        .sport-stat span {
            color: var(--muted);
            font-size: .72rem;
        }

        .sport-lessons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 11px;
        }

        .sport-lesson {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #cbd8e7;
            font-size: .82rem;
        }

        .sport-lesson::before {
            content: "✓";
            width: 24px;
            height: 24px;
            flex: 0 0 auto;
            display: grid;
            place-items: center;
            color: #05120f;
            background: var(--primary);
            border-radius: 8px;
            font-size: .68rem;
            font-weight: 950;
        }

        .experience-layout {
            display: grid;
            grid-template-columns: .72fr 1.28fr;
            gap: 70px;
            align-items: start;
        }

        .experience-intro {
            position: sticky;
            top: calc(var(--nav-height) + 24px);
        }

        .experience-intro p {
            color: var(--muted);
        }

        .timeline {
            position: relative;
        }

        .timeline::before {
            content: "";
            position: absolute;
            top: 10px;
            bottom: 10px;
            left: 18px;
            width: 1px;
            background: linear-gradient(var(--primary), rgba(80,167,255,.35), transparent);
        }

        .timeline-item {
            position: relative;
            display: grid;
            grid-template-columns: 38px 1fr;
            gap: 19px;
            padding-bottom: 34px;
        }

        .timeline-dot {
            position: relative;
            z-index: 1;
            width: 38px;
            height: 38px;
            display: grid;
            place-items: center;
            color: #06120f;
            background: linear-gradient(145deg, var(--primary), #c2ffe9);
            border: 6px solid var(--bg);
            border-radius: 50%;
            font-size: .7rem;
            font-weight: 950;
        }

        .timeline-card {
            padding: 24px;
            background: rgba(255,255,255,.025);
            border: 1px solid var(--line);
            border-radius: 20px;
            transition: transform 180ms ease, border-color 180ms ease;
        }

        .timeline-card:hover {
            transform: translateX(6px);
            border-color: rgba(117,243,200,.24);
        }

        .timeline-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 9px;
        }

        .timeline-card h3 {
            margin: 0;
            font-size: 1.13rem;
            letter-spacing: -.025em;
        }

        .timeline-date {
            flex: 0 0 auto;
            padding: 5px 8px;
            color: var(--primary);
            background: rgba(117,243,200,.07);
            border: 1px solid rgba(117,243,200,.12);
            border-radius: 8px;
            font-size: .69rem;
            font-weight: 800;
        }

        .timeline-card p {
            margin-bottom: 13px;
            color: var(--muted);
            font-size: .88rem;
        }

        .timeline-card ul {
            display: grid;
            gap: 7px;
            margin: 0;
            padding-left: 18px;
            color: #c3d0df;
            font-size: .82rem;
        }

        .skills-shell {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .skill-cluster {
            padding: 26px;
            background: linear-gradient(145deg, rgba(18,34,58,.78), rgba(8,18,32,.76));
            border: 1px solid var(--line);
            border-radius: 22px;
        }

        .skill-cluster h3 {
            margin-bottom: 18px;
            font-size: 1rem;
            letter-spacing: -.02em;
        }

        .skill-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
        }

        .skill-pill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 11px;
            color: #c9d6e5;
            background: rgba(255,255,255,.035);
            border: 1px solid rgba(255,255,255,.06);
            border-radius: 10px;
            font-size: .78rem;
            font-weight: 700;
            transition: color 160ms ease, border-color 160ms ease, transform 160ms ease;
        }

        .skill-pill:hover {
            color: var(--text);
            border-color: rgba(117,243,200,.26);
            transform: translateY(-2px);
        }

        .skill-pill::before {
            content: "";
            width: 6px;
            height: 6px;
            background: var(--primary);
            border-radius: 50%;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .quote-card {
            padding: 26px;
            background: rgba(255,255,255,.025);
            border: 1px solid var(--line);
            border-radius: 21px;
        }

        .quote-mark {
            margin-bottom: 15px;
            color: var(--primary);
            font-size: 2.6rem;
            font-family: Georgia, serif;
            line-height: .8;
        }

        .quote-card blockquote {
            margin: 0 0 20px;
            color: #dce7f2;
            font-size: .94rem;
        }

        .quote-person {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .quote-avatar {
            width: 40px;
            height: 40px;
            display: grid;
            place-items: center;
            color: #04120f;
            background: var(--primary);
            border-radius: 12px;
            font-size: .72rem;
            font-weight: 950;
        }

        .quote-person strong {
            display: block;
            font-size: .8rem;
        }

        .quote-person small {
            color: var(--muted);
            font-size: .7rem;
        }

        .contact-card {
            position: relative;
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 46px;
            padding: clamp(28px, 5vw, 62px);
            background:
                radial-gradient(circle at 15% 10%, rgba(117,243,200,.16), transparent 27%),
                radial-gradient(circle at 90% 85%, rgba(80,167,255,.16), transparent 27%),
                linear-gradient(145deg, rgba(18,34,58,.95), rgba(8,18,32,.96));
            border: 1px solid rgba(117,243,200,.18);
            border-radius: 34px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .contact-card::before {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(120deg, transparent 0 35%, rgba(255,255,255,.035) 49%, transparent 63% 100%);
            transform: translateX(-100%);
            animation: contactShine 8s ease-in-out infinite;
        }

        @keyframes contactShine {
            60%, 100% { transform: translateX(100%); }
        }

        .contact-copy {
            position: relative;
            z-index: 1;
        }

        .contact-copy h2 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
        }

        .contact-copy p {
            color: var(--muted);
        }

        .contact-direct {
            display: grid;
            gap: 10px;
            margin-top: 28px;
        }

        .contact-direct a,
        .contact-direct button {
            width: fit-content;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 0;
            color: #dce8f4;
            background: none;
            border: 0;
            cursor: pointer;
            font-weight: 750;
        }

        .contact-direct a:hover,
        .contact-direct button:hover {
            color: var(--primary);
        }

        .contact-form {
            position: relative;
            z-index: 1;
            display: grid;
            gap: 14px;
            padding: 24px;
            background: rgba(5,11,20,.48);
            border: 1px solid var(--line);
            border-radius: 23px;
            backdrop-filter: blur(14px);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .field {
            display: grid;
            gap: 7px;
        }

        .field label {
            color: #b9c9db;
            font-size: .76rem;
            font-weight: 750;
        }

        .field input,
        .field textarea {
            width: 100%;
            color: var(--text);
            background: rgba(255,255,255,.035);
            border: 1px solid rgba(255,255,255,.085);
            border-radius: 12px;
            outline: none;
            transition: border-color 170ms ease, box-shadow 170ms ease, background 170ms ease;
        }

        .field input {
            min-height: 48px;
            padding: 0 13px;
        }

        .field textarea {
            min-height: 132px;
            padding: 12px 13px;
            resize: vertical;
        }

        .field input:focus,
        .field textarea:focus {
            background: rgba(255,255,255,.05);
            border-color: rgba(117,243,200,.46);
            box-shadow: 0 0 0 4px rgba(117,243,200,.08);
        }

        .form-note {
            margin: -2px 0 0;
            color: #7489a2;
            font-size: .69rem;
        }

        .copy-status {
            min-height: 20px;
            margin-top: 6px;
            color: var(--primary);
            font-size: .76rem;
            font-weight: 700;
        }

        .site-footer {
            padding: 35px 0 42px;
            border-top: 1px solid var(--line);
        }

        .footer-grid {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
        }

        .footer-copy {
            color: #7488a0;
            font-size: .78rem;
        }

        .socials {
            display: flex;
            gap: 8px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            display: grid;
            place-items: center;
            color: #aabbd0;
            background: rgba(255,255,255,.035);
            border: 1px solid var(--line);
            border-radius: 11px;
            font-size: .68rem;
            font-weight: 850;
            transition: color 160ms ease, transform 160ms ease, border-color 160ms ease;
        }

        .social-link:hover {
            color: var(--primary);
            border-color: rgba(117,243,200,.28);
            transform: translateY(-2px);
        }

        .back-to-top {
            position: fixed;
            right: 22px;
            bottom: 22px;
            z-index: 900;
            width: 46px;
            height: 46px;
            display: grid;
            place-items: center;
            color: #04120f;
            background: var(--primary);
            border: 0;
            border-radius: 14px;
            box-shadow: 0 14px 34px rgba(0,0,0,.28);
            cursor: pointer;
            opacity: 0;
            pointer-events: none;
            transform: translateY(12px);
            transition: opacity 180ms ease, transform 180ms ease;
        }

        .back-to-top.visible {
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0);
        }

        .modal {
            position: fixed;
            inset: 0;
            z-index: 2000;
            display: none;
            place-items: center;
            padding: 24px;
            background: rgba(2,6,12,.78);
            backdrop-filter: blur(16px);
        }

        .modal.open {
            display: grid;
            animation: fadeIn 180ms ease both;
        }

        @keyframes fadeIn { from { opacity: 0; } }

        .modal-dialog {
            position: relative;
            width: min(720px, 100%);
            max-height: min(760px, calc(100svh - 48px));
            overflow-y: auto;
            background: linear-gradient(145deg, #122039, #07111f);
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 26px;
            box-shadow: 0 40px 120px rgba(0,0,0,.54);
        }

        .modal-hero {
            min-height: 210px;
            display: grid;
            place-items: center;
            padding: 35px;
            background:
                radial-gradient(circle at 72% 25%, rgba(117,243,200,.25), transparent 27%),
                radial-gradient(circle at 22% 80%, rgba(80,167,255,.18), transparent 25%),
                #0a1828;
            border-bottom: 1px solid var(--line);
        }

        .modal-hero-mark {
            width: 110px;
            aspect-ratio: 1;
            display: grid;
            place-items: center;
            color: #05120f;
            background: linear-gradient(145deg, var(--primary), #d7fff0);
            border-radius: 32px;
            font-size: 2rem;
            font-weight: 950;
            letter-spacing: -.08em;
        }

        .modal-content {
            padding: 28px;
        }

        .modal-kicker {
            color: var(--primary);
            font-size: .73rem;
            font-weight: 850;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .modal-content h3 {
            margin: 7px 0 12px;
            font-size: 2rem;
            line-height: 1.08;
            letter-spacing: -.04em;
        }

        .modal-content p {
            color: var(--muted);
        }

        .modal-points {
            display: grid;
            gap: 9px;
            margin: 20px 0 24px;
            padding: 0;
            list-style: none;
        }

        .modal-points li {
            display: flex;
            gap: 10px;
            color: #cbd7e5;
            font-size: .88rem;
        }

        .modal-points li::before {
            content: "✓";
            color: var(--primary);
            font-weight: 900;
        }

        .modal-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 3;
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            color: var(--text);
            background: rgba(5,11,20,.68);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 12px;
            cursor: pointer;
            backdrop-filter: blur(10px);
        }

        .reveal {
            opacity: 1;
            transform: none;
        }

        .js .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 700ms ease, transform 700ms cubic-bezier(.2,.8,.2,1);
        }

        .js .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 1050px) {
            .desktop-nav { display: none; }
            .menu-toggle { display: grid; position: relative; }
            .nav-actions .btn-ghost { display: none; }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 44px;
            }

            .hero-content {
                max-width: 790px;
            }

            .hero-visual {
                width: min(100%, 690px);
                min-height: 585px;
                margin-inline: auto;
            }

            .about-grid,
            .experience-layout {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .about-card,
            .experience-intro {
                position: static;
            }

            .about-card {
                display: grid;
                grid-template-columns: .75fr 1.25fr;
                gap: 24px;
            }

            .about-photo {
                min-height: 300px;
                margin-bottom: 0;
            }

            .project-card,
            .project-card.featured {
                grid-column: span 6;
            }

            .sports-grid {
                grid-template-columns: 1fr;
            }

            .sport-selector {
                grid-template-columns: repeat(3, 1fr);
            }

            .sport-tab {
                grid-template-columns: 50px 1fr;
            }

            .sport-tab-icon {
                width: 50px;
                height: 50px;
            }

            .sport-tab-arrow { display: none; }
        }

        @media (max-width: 800px) {
            section { padding: 84px 0; }
            .hero { padding-top: calc(var(--nav-height) + 48px); }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .stat:nth-child(2) { border-right: none; }
            .stat:nth-child(-n+2) { border-bottom: 1px solid var(--line); }

            .projects-top {
                align-items: flex-start;
                flex-direction: column;
            }

            .filters { justify-content: flex-start; }

            .contact-card {
                grid-template-columns: 1fr;
            }

            .skills-shell,
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {
            .container { width: min(calc(100% - 28px), var(--max-width)); }
            .nav-actions .btn-primary { display: none; }

            h1 {
                font-size: clamp(3rem, 16vw, 4.6rem);
            }

            .hero-visual {
                min-height: 495px;
            }

            .profile-console {
                inset: 36px 0 38px;
                transform: none;
            }

            .hero-visual:hover .profile-console {
                transform: translateY(-3px);
            }

            .orbit { width: 390px; }
            .console-body { padding: 15px; }
            .console-panels { grid-template-columns: 1fr; }
            .console-code { display: none; }
            .mini-panel { min-height: 150px; }
            .badge-one { top: 3px; right: -6px; }
            .badge-two { left: -6px; bottom: 1px; }

            .about-card {
                grid-template-columns: 1fr;
            }

            .project-card,
            .project-card.featured {
                grid-column: 1 / -1;
            }

            .sport-selector {
                grid-template-columns: 1fr;
            }

            .sport-tab {
                min-height: 90px;
            }

            .sport-display {
                padding: 25px;
            }

            .sport-stats {
                grid-template-columns: 1fr;
            }

            .sport-lessons {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                align-items: flex-start;
                flex-direction: column;
            }

            .timeline-top {
                flex-direction: column;
                gap: 9px;
            }
        }

        @media (max-width: 460px) {
            .stats-grid { grid-template-columns: 1fr; }
            .stat { border-right: none; border-bottom: 1px solid var(--line); }
            .stat:last-child { border-bottom: none; }
            .stat:nth-child(2) { border-bottom: 1px solid var(--line); }

            .floating-badge {
                padding: 10px;
            }

            .floating-badge small { display: none; }
            .badge-icon { width: 30px; height: 30px; }
            .hero-micro { display: none; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            #constellation { display: none; }
        }
    </style>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>
    <canvas id="constellation" aria-hidden="true"></canvas>
    <div class="page-grid" aria-hidden="true"></div>
    <div class="page-noise" aria-hidden="true"></div>

    <header class="site-header" id="siteHeader">
        <div class="container nav-wrap">
            <a class="brand" href="#home" aria-label="Parker McCrea home">
                <span class="brand-mark"><span>PM</span></span>
                <span class="brand-text">Parker McCrea<small>Developer · Athlete · Creator</small></span>
            </a>

            <nav class="desktop-nav" aria-label="Primary navigation">
                <a class="nav-link active" href="#home">Home</a>
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#projects">Projects</a>
                <a class="nav-link" href="#sports">Sports</a>
                <a class="nav-link" href="#experience">Experience</a>
                <a class="nav-link" href="#skills">Skills</a>
            </nav>

            <div class="nav-actions">
                <a class="btn btn-ghost" href="resume.pdf" target="_blank" rel="noopener">Résumé ↗</a>
                <a class="btn btn-primary" href="#contact">Let's talk <span aria-hidden="true">→</span></a>
                <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu"><span></span></button>
            </div>
        </div>
    </header>

    <nav class="mobile-menu" id="mobileMenu" aria-label="Mobile navigation">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#sports">Sports</a>
        <a href="#experience">Experience</a>
        <a href="#skills">Skills</a>
        <a href="#contact">Contact</a>
    </nav>

    <main id="main">
        <section class="hero" id="home" data-section>
            <div class="container hero-grid">
                <div class="hero-content reveal">
                    <div class="availability"><span class="availability-dot"></span>Open to projects, opportunities & collaborations</div>
                    <div class="eyebrow">Iowa-based student builder</div>
                    <h1>
                        <span class="hero-line">I build ideas.</span>
                        <span class="hero-line gradient-text">Then I compete.</span>
                    </h1>
                    <p class="hero-copy">
                        I'm <strong>Parker McCrea</strong>—a developer, athlete, creator, and national FBLA competitor who turns practical problems into polished digital experiences.
                    </p>
                    <div class="hero-actions">
                        <a class="btn btn-primary" href="#projects">Explore my work <span aria-hidden="true">↘</span></a>
                        <a class="btn btn-secondary" href="#about">Get to know me</a>
                    </div>
                    <div class="hero-micro" aria-label="Highlights">
                        <span><i></i>Class of 2027</span>
                        <span><i></i>Web development</span>
                        <span><i></i>XC · Track · Soccer</span>
                    </div>
                </div>

                <div class="hero-visual reveal" aria-label="Interactive visual summary of Parker's work">
                    <div class="orbit" aria-hidden="true"><span class="orbit-dot"></span></div>

                    <div class="profile-console">
                        <div class="console-top">
                            <div class="console-dots"><i></i><i></i><i></i></div>
                            <span class="console-path">parker.dev / dashboard</span>
                        </div>
                        <div class="console-body">
                            <div class="console-identity">
                                <div class="portrait-mark">PM</div>
                                <div>
                                    <h3>Parker McCrea</h3>
                                    <p>Developer · Athlete · Creator</p>
                                    <div class="status-line"><span class="availability-dot"></span>Currently building</div>
                                </div>
                            </div>

                            <div class="console-panels">
                                <div class="mini-panel">
                                    <h4>Core strengths</h4>
                                    <div class="skill-bars">
                                        <div class="skill-row"><span>Build</span><div class="skill-track"><i style="width: 94%"></i></div></div>
                                        <div class="skill-row"><span>Design</span><div class="skill-track"><i style="width: 86%"></i></div></div>
                                        <div class="skill-row"><span>Compete</span><div class="skill-track"><i style="width: 91%"></i></div></div>
                                        <div class="skill-row"><span>Lead</span><div class="skill-track"><i style="width: 84%"></i></div></div>
                                    </div>
                                </div>

                                <div class="mini-panel">
                                    <h4>Active lanes</h4>
                                    <div class="activity-list">
                                        <div class="activity-item"><span class="activity-icon">&lt;/&gt;</span><div><strong>Web development</strong><small>PHP · JS · MySQL</small></div></div>
                                        <div class="activity-item"><span class="activity-icon">⚽</span><div><strong>Athletics</strong><small>Three-sport competitor</small></div></div>
                                        <div class="activity-item"><span class="activity-icon">▶</span><div><strong>Content</strong><small>17K+ audience</small></div></div>
                                    </div>
                                </div>

                                <div class="console-code" aria-hidden="true">
                                    <span class="code-line"><span class="c-purple">const</span> <span class="c-blue">parker</span> = {</span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="c-orange">mindset</span>: <span class="c-green">"build → test → improve"</span>,</span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="c-orange">focus</span>: [<span class="c-green">"web"</span>, <span class="c-green">"sports"</span>, <span class="c-green">"leadership"</span>],</span>
                                    <span class="code-line">&nbsp;&nbsp;<span class="c-orange">status</span>: <span class="c-green">"ready for the next challenge"</span></span>
                                    <span class="code-line">}; <span class="c-muted">// keep moving forward</span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="floating-badge badge-one">
                        <span class="badge-icon">6</span>
                        <span><strong>6th in the nation</strong><small>FBLA Website Coding & Development</small></span>
                    </div>

                    <div class="floating-badge badge-two">
                        <span class="badge-icon">152</span>
                        <span><strong>Volunteering</strong><small>Community involvement</small></span>
                    </div>
                </div>
            </div>
            <a class="scroll-cue" href="#highlights">Scroll</a>
        </section>

        <section class="stats-strip" id="highlights" aria-label="Quick highlights">
            <div class="container">
                <div class="stats-grid reveal">
                    <div class="stat"><span class="stat-number" data-count="6">0</span><span class="stat-label">National FBLA placement</span></div>
                    <div class="stat"><span class="stat-number" data-count="17" data-suffix="K+">0</span><span class="stat-label">YouTube subscribers</span></div>
                    <div class="stat"><span class="stat-number" data-count="4.31" data-decimals="1" data-suffix="+">0</span><span class="stat-label">Academic GPA</span></div>
                    <div class="stat"><span class="stat-number" data-count="3">0</span><span class="stat-label">Competitive sports</span></div>
                </div>
            </div>
        </section>

        <section id="about" data-section>
            <div class="container about-grid">
                <aside class="about-card reveal">
                    <div class="about-photo">
                        <img src="Images/Profile.png" alt="Parker McCrea">
                    </div>
                    <div class="about-meta">
                        <div class="meta-row"><span>Based in</span><strong>Iowa, USA</strong></div>
                        <div class="meta-row"><span>Education</span><strong>Class of 2027</strong></div>
                        <div class="meta-row"><span>Primary focus</span><strong>Web development</strong></div>
                        <div class="meta-row"><span>Also building</span><strong>Usable Apps</strong></div>
                    </div>
                </aside>

                <div class="about-content reveal">
                    <span class="section-kicker">About me</span>
                    <h2>Ambition with a purpose.</h2>
                    <p class="lead">I like work that has a scoreboard—something real to build, improve, present, race, or compete for.</p>
                    <p>I started by experimenting with websites and small projects, then learned how to turn those experiments into complete systems: databases, admin dashboards, polished interfaces, competition presentations, and real products people can actually use.</p>
                    <p>That same mindset follows me into cross country, track, and soccer. I care about showing up, learning quickly, and making the people around me better—not just collecting another line for a résumé.</p>

                    <div class="principles">
                        <article class="principle">
                            <span class="principle-icon">01</span>
                            <div><h3>Build for real people</h3><p>Useful beats flashy. The best design solves a real problem and feels natural to use.</p></div>
                        </article>
                        <article class="principle">
                            <span class="principle-icon">02</span>
                            <div><h3>Compete with preparation</h3><p>Confidence comes from doing the work early, testing the weak spots, and improving the details.</p></div>
                        </article>
                        <article class="principle">
                            <span class="principle-icon">03</span>
                            <div><h3>Keep faith and perspective</h3><p>Work hard, stay humble, control what can be controlled, and trust the bigger picture.</p></div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects" id="projects" data-section>
            <div class="container">
                <div class="projects-top reveal">
                    <div class="section-heading">
                        <span class="section-kicker">Selected projects</span>
                        <h2>Ideas turned into working products.</h2>
                        <p>From full-stack school systems to niche yet helpful business tools.</p>
                    </div>
                    <div class="filters" role="group" aria-label="Filter projects">
                        <button class="filter-btn active" type="button" data-filter="all">All work</button>
                        <button class="filter-btn" type="button" data-filter="web">Web</button>
                        <button class="filter-btn" type="button" data-filter="business">Business</button>
                    </div>
                </div>

                <div class="project-grid">
                <article class="project-card featured reveal"
                     tabindex="0"
                     role="link"
                     data-category="web"
                     data-project="lost-found"
                     data-url="https://github.com/PMac0924/fbla-lost-found-showcase"
                     aria-label="Open the Waukee Lost and Found project">
                        <span class="project-arrow" aria-hidden="true">↗</span>
                        <div class="project-visual has-image">
                            <img
                                class="project-image"
                                src="Images/LostFound.png"
                                alt="Preview of the Waukee Lost and Found website"
                            >
                        </div>
                        <div class="project-content">
                            <div class="project-meta"><span class="project-type">Full-stack web platform</span><span class="project-year">2025–2026</span></div>
                            <h3>Waukee Lost & Found</h3>
                            <p>A complete school lost-and-found management system with submissions, image uploads, automated matching, claims, moderation, search, and an administrator dashboard.</p>
                            <div class="project-tags"><span class="tag">PHP</span><span class="tag">MySQL</span><span class="tag">JavaScript</span><span class="tag">Bootstrap</span><span class="tag">6th at NLC</span></div>
                        </div>
                    </article>

                    <article class="project-card reveal"
         tabindex="0"
         role="link"
         data-category="web business"
         data-project="study-hub"
         data-url="https://YOUR-STUDY-HUB-LINK.com"
         aria-label="Open the Business Leaders Study Hub project">
                        <span class="project-arrow" aria-hidden="true">↗</span>
                        <div class="project-visual has-image">
                            <img
                                class="project-image"
                                src="Images/FBLAhub.png"
                                alt="Preview of the Business Leaders Study Hub website"
                            >
                        </div>
                        <div class="project-content">
                            <div class="project-meta"><span class="project-type">Education platform</span><span class="project-year">2026</span></div>
                            <h3>Business Leaders Study Hub</h3>
                            <p>A searchable competition resource platform with event profiles, filters, a personalized event finder, study resources, and an administrator system.</p>
                            <div class="project-tags"><span class="tag">PHP</span><span class="tag">AJAX</span><span class="tag">Database design</span></div>
                        </div>
                    </article>

                    <article class="project-card reveal"
         tabindex="0"
         role="link"
         data-category="business web"
         data-project="pull-lane"
         data-url="https://PullLane.com"
         aria-label="Open the Pull Lane project">
                        <span class="project-arrow" aria-hidden="true">↗</span>
                        <div class="project-visual has-image">
                            <img
                                class="project-image"
                                src="Images/PullLane.png"
                                alt="Preview of the Pull Lane tractor pull management website"
                            >
                        </div>
                        <div class="project-content">
                            <div class="project-meta"><span class="project-type">Event management SaaS</span><span class="project-year">Original concept</span></div>
                            <h3>Pull Lane</h3>
                            <p>A management concept for tractor-pull organizers—built around scheduling, participant records, scoring, and professional event operations.</p>
                            <div class="project-tags"><span class="tag">Product design</span><span class="tag">Event systems</span><span class="tag">Branding</span></div>
                        </div>
                    </article>

                    <article class="project-card featured reveal"
         tabindex="0"
         role="link"
         data-category="business web"
         data-project="photo-platform"
         data-url="https://YOUR-PHOTOGRAPHER-PROJECT-LINK.com"
         aria-label="Open the Iowa Sports Photographer Scheduler project">
                        <span class="project-arrow" aria-hidden="true">↗</span>
                        <div class="project-visual has-image">
                            <img
                                class="project-image"
                                src="Images/Photographer.png"
                                alt="Preview of the Iowa Sports Photographer Scheduler"
                            >
                        </div>
                        <div class="project-content">
                            <div class="project-meta"><span class="project-type">Sports technology concept</span><span class="project-year">In development</span></div>
                            <h3>Iowa Sports Photographer Scheduler</h3>
                            <p>A statewide platform concept connecting photographers with high-school sporting events through sport, class, school, level, and schedule-based discovery.</p>
                            <div class="project-tags"><span class="tag">Product strategy</span><span class="tag">Sports data</span><span class="tag">Scheduling</span><span class="tag">Marketplace</span></div>
                        </div>
                    </article>
                </div>

                <div class="project-more reveal">
                    <a class="btn btn-secondary" href="#contact">Ask about a project <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <section id="sports" data-section>
            <div class="container">
                <div class="section-heading centered reveal">
                    <span class="section-kicker">Athletics</span>
                    <h2>Built through competition.</h2>
                    <p>Sports have taught me how to prepare, lead, respond under pressure, and keep moving when results take time.</p>
                </div>

                <div class="sports-grid reveal">
                    <div class="sport-selector" role="tablist" aria-label="Sports">
                        <button class="sport-tab active" type="button" role="tab" aria-selected="true" data-sport="xc">
                            <span class="sport-tab-icon">XC</span><span><h3>Cross Country</h3><p>Endurance · consistency · leadership</p></span><span class="sport-tab-arrow">→</span>
                        </button>
                        <button class="sport-tab" type="button" role="tab" aria-selected="false" data-sport="track">
                            <span class="sport-tab-icon">TR</span><span><h3>Track & Field</h3><p>Distance racing · speed · precision</p></span><span class="sport-tab-arrow">→</span>
                        </button>
                        <button class="sport-tab" type="button" role="tab" aria-selected="false" data-sport="soccer">
                            <span class="sport-tab-icon">SC</span><span><h3>Soccer</h3><p>Pace · awareness · teamwork</p></span><span class="sport-tab-arrow">→</span>
                        </button>
                    </div>

                    <div class="sport-display">
                        <article class="sport-panel active" id="sport-xc" role="tabpanel">
                            <span class="sport-label">Cross Country</span>
                            <h3>The sport that teaches patience.</h3>
                            <p>Cross country is where long-term work becomes visible. Every workout, recovery day, and choice adds up before the race ever starts.</p>
                            <div class="sport-stats">
                                <div class="sport-stat"><strong>18:02</strong><span>5K personal best</span></div>
                                <div class="sport-stat"><strong>Leader</strong><span>Upperclassman role</span></div>
                                <div class="sport-stat"><strong>5K</strong><span>Primary race distance</span></div>
                            </div>
                            <div class="sport-lessons"><span class="sport-lesson">Consistency over hype</span><span class="sport-lesson">Staying composed under fatigue</span><span class="sport-lesson">Team-first leadership</span><span class="sport-lesson">Trusting the process</span></div>
                        </article>

                        <article class="sport-panel" id="sport-track" role="tabpanel">
                            <span class="sport-label">Track & Field</span>
                            <h3>Every second has to be earned.</h3>
                            <p>Track turns improvement into something measurable. It rewards preparation, pacing, and the willingness to stay uncomfortable longer than the competition.</p>
                            <div class="sport-stats">
                                <div class="sport-stat"><strong>4:57</strong><span>Mile personal best</span></div>
                                <div class="sport-stat"><strong>10:52</strong><span>Two-mile personal best</span></div>
                                <div class="sport-stat"><strong>1600m</strong><span>Preferred event</span></div>
                            </div>
                            <div class="sport-lessons"><span class="sport-lesson">Precision and pacing</span><span class="sport-lesson">Performing under pressure</span><span class="sport-lesson">Small gains matter</span><span class="sport-lesson">Finish stronger</span></div>
                        </article>

                        <article class="sport-panel" id="sport-soccer" role="tabpanel">
                            <span class="sport-label">Soccer</span>
                            <h3>See the field. Make the next play.</h3>
                            <p>Soccer has built my awareness, communication, and adaptability. As a fullback, the job is to read danger early, support the attack, and stay dependable.</p>
                            <div class="sport-stats">
                                <div class="sport-stat"><strong>RB / LB</strong><span>Primary positions</span></div>
                                <div class="sport-stat"><strong>Club + HS</strong><span>Competitive experience</span></div>
                                <div class="sport-stat"><strong>Pace</strong><span>Core strength</span></div>
                            </div>
                            <div class="sport-lessons"><span class="sport-lesson">Reading situations early</span><span class="sport-lesson">Communication and trust</span><span class="sport-lesson">Fast decisions</span><span class="sport-lesson">Recovering after mistakes</span></div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="experience" data-section>
            <div class="container experience-layout">
                <div class="experience-intro reveal">
                    <span class="section-kicker">Experience</span>
                    <h2>Proof is in the work.</h2>
                    <p>My best experiences have combined technology, communication, competition, leadership, and real responsibility.</p>
                    <a class="btn btn-secondary" href="resume.pdf" target="_blank" rel="noopener">View full résumé ↗</a>
                </div>

                <div class="timeline reveal">
                    <article class="timeline-item">
                        <span class="timeline-dot">01</span>
                        <div class="timeline-card">
                            <div class="timeline-top"><h3>6th Place Nationally — Website Coding & Development</h3><span class="timeline-date">2026</span></div>
                            <p>Advanced through preliminary competition into national finals at FBLA NLC in San Antonio.</p>
                            <ul><li>Designed, developed, and presented a complete full-stack platform.</li><li>Defended technical, security, accessibility, and product decisions in live Q&A.</li><li>Turned judge feedback and prior experience into a stronger final performance.</li></ul>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <span class="timeline-dot">02</span>
                        <div class="timeline-card">
                            <div class="timeline-top"><h3>Developer & Product Builder</h3><span class="timeline-date">2024–Present</span></div>
                            <p>Built websites and game systems spanning education, school operations, event management, sports, and entertainment.</p>
                            <ul><li>Worked with PHP, MySQL, JavaScript, AJAX, HTML, CSS, Bootstrap, and Lua.</li><li>Created database-backed workflows, dashboards, permissions, uploads, search, and automation.</li><li>Focused on turning broad ideas into complete, demonstrable products.</li></ul>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <span class="timeline-dot">03</span>

                        <div class="timeline-card">
                            <div class="timeline-top">
                                <h3>Community Volunteer & Service Leader</h3>
                                <span class="timeline-date">152+ Hours</span>
                            </div>

                            <p>
                                Dedicated more than 152 hours to volunteering, community service,
                                and supporting organizations and events that make a positive impact.
                            </p>

                            <ul>
                                <li>Completed over 152 documented hours of volunteer service.</li>
                                <li>Supported community programs, school activities, and local events.</li>
                                <li>Developed leadership, teamwork, communication, and responsibility through hands-on service.</li>
                            </ul>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <span class="timeline-dot">04</span>
                        <div class="timeline-card">
                            <div class="timeline-top"><h3>Student-Athlete & Team Contributor</h3><span class="timeline-date">Ongoing</span></div>
                            <p>Compete in cross country, track, and soccer while balancing academics, development, and leadership.</p>
                            <ul><li>Maintain high academic performance alongside multiple competitive seasons.</li><li>Bring endurance, coachability, communication, and composure into team environments.</li><li>Use sport as a standard for discipline in every other area.</li><li>Varsity athlete for all sports in the toughest class in Iowa</li></ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="skills" data-section>
            <div class="container">
                <div class="section-heading centered reveal">
                    <span class="section-kicker">Capabilities</span>
                    <h2>Technical enough to build. Human enough to explain.</h2>
                    <p>I enjoy both sides of a project: the systems underneath and the experience people actually see.</p>
                </div>

                <div class="skills-shell reveal">
                    <article class="skill-cluster">
                        <h3>Development</h3>
                        <div class="skill-cloud"><span class="skill-pill">PHP</span><span class="skill-pill">MySQL</span><span class="skill-pill">JavaScript</span><span class="skill-pill">HTML5</span><span class="skill-pill">CSS3</span><span class="skill-pill">AJAX</span><span class="skill-pill">PDO</span><span class="skill-pill">Lua</span><span class="skill-pill">Python</span></div>
                    </article>
                    <article class="skill-cluster">
                        <h3>Product & design</h3>
                        <div class="skill-cloud"><span class="skill-pill">Responsive design</span><span class="skill-pill">UI/UX</span><span class="skill-pill">Accessibility</span><span class="skill-pill">Database planning</span><span class="skill-pill">Brand systems</span><span class="skill-pill">User flows</span><span class="skill-pill">Testing</span></div>
                    </article>
                    <article class="skill-cluster">
                        <h3>Tools</h3>
                        <div class="skill-cloud"><span class="skill-pill">Apache NetBeans</span><span class="skill-pill">VS Code</span><span class="skill-pill">phpMyAdmin</span><span class="skill-pill">MAMP</span><span class="skill-pill">GitHub</span><span class="skill-pill">Canva</span><span class="skill-pill">Roblox Studio</span></div>
                    </article>
                    <article class="skill-cluster">
                        <h3>Leadership & communication</h3>
                        <div class="skill-cloud"><span class="skill-pill">Presentations</span><span class="skill-pill">Technical Q&A</span><span class="skill-pill">Team leadership</span><span class="skill-pill">Problem solving</span><span class="skill-pill">Time management</span><span class="skill-pill">Public speaking</span><span class="skill-pill">Coachability</span></div>
                    </article>
                </div>
            </div>
        </section>

        <section aria-labelledby="recognition-title">
            <div class="container">
                <div class="section-heading centered reveal">
                    <span class="section-kicker">Recognition</span>
                    <h2 id="recognition-title">A few moments that shaped me.</h2>
                </div>

                <div class="testimonials-grid reveal">
                    <article class="quote-card"><div class="quote-mark">“</div><blockquote>Parker combines technical creativity with the discipline to finish what he starts.</blockquote><div class="quote-person"><span class="quote-avatar">ED</span><span><strong>Educator / Advisor</strong><small>Janelle Larson</small></span></div></article>
                    <article class="quote-card"><div class="quote-mark">“</div><blockquote>He is willing to learn, accepts feedback, and keeps improving instead of settling.</blockquote><div class="quote-person"><span class="quote-avatar">CO</span><span><strong>Coach</strong><small>Christian Grandgenett</small></span></div></article>
                    <article class="quote-card"><div class="quote-mark">“</div><blockquote>The website he crated for us was thoughtful, useful, and presented with real confidence.</blockquote><div class="quote-person"><span class="quote-avatar">CL</span><span><strong>Client</strong><small>Michelle Sandbulte</small></span></div></article>
                </div>
            </div>
        </section>

        <section id="contact" data-section>
            <div class="container">
                <div class="contact-card reveal">
                    <div class="contact-copy">
                        <span class="section-kicker">Contact</span>
                        <h2>Let's build something worth showing.</h2>
                        <p>Have a project, opportunity, idea, team, internship, or collaboration in mind? Send a message and tell me what you're working on.</p>
                        <div class="contact-direct">
                            <a href="mailto:<?= htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8') ?>">✉ <?= htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8') ?></a>
                            <button type="button" id="copyEmail" data-email="<?= htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8') ?>">⧉ Copy email address</button>
                            <div class="copy-status" id="copyStatus" aria-live="polite"></div>
                        </div>
                    </div>

                    <form class="contact-form" id="contactForm">
                        <div class="form-row">
                            <div class="field"><label for="name">Your name</label><input id="name" name="name" type="text" autocomplete="name" required></div>
                            <div class="field"><label for="email">Your email</label><input id="email" name="email" type="email" autocomplete="email" required></div>
                        </div>
                        <div class="field"><label for="subject">Subject</label><input id="subject" name="subject" type="text" required></div>
                        <div class="field"><label for="message">Message</label><textarea id="message" name="message" required></textarea></div>
                        <button class="btn btn-primary" type="submit">Open email draft <span aria-hidden="true">↗</span></button>
                        <p class="form-note">This may not work because GitHub does not support php.</p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-copy">© <?= htmlspecialchars((string)$currentYear, ENT_QUOTES, 'UTF-8') ?> Parker McCrea. Designed and built with purpose.</div>
            <div class="socials" aria-label="Social links">
                <a class="social-link" href="https://github.com/PMac0924" aria-label="GitHub">GH</a>
                <a class="social-link" href="https://www.linkedin.com/in/parker-mccrea-91919b368/" aria-label="LinkedIn">IN</a>
                <a class="social-link" href="mailto:<?= htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8') ?>" aria-label="Email">@</a>
            </div>
        </div>
    </footer>

    <button class="back-to-top" id="backToTop" type="button" aria-label="Back to top">↑</button>

    <div class="modal" id="projectModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog">
            <button class="modal-close" id="modalClose" type="button" aria-label="Close project details">✕</button>
            <div class="modal-hero"><div class="modal-hero-mark" id="modalMark">PM</div></div>
            <div class="modal-content">
                <span class="modal-kicker" id="modalKicker">Project</span>
                <h3 id="modalTitle">Project title</h3>
                <p id="modalDescription"></p>
                <ul class="modal-points" id="modalPoints"></ul>
                <div class="modal-actions">
                    <a class="btn btn-primary" id="modalLink" href="#contact">Discuss this project</a>
                    <button class="btn btn-secondary" id="modalCloseSecondary" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            'use strict';

            const contactEmail = <?= json_encode($contactEmail, JSON_UNESCAPED_SLASHES) ?>;
            const header = document.getElementById('siteHeader');
            const menuToggle = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const backToTop = document.getElementById('backToTop');
            const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            // Header and back-to-top state.
            const updateScrollUI = () => {
                header.classList.toggle('scrolled', window.scrollY > 18);
                backToTop.classList.toggle('visible', window.scrollY > 700);
            };
            updateScrollUI();
            window.addEventListener('scroll', updateScrollUI, { passive: true });

            backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: reducedMotion ? 'auto' : 'smooth' }));

            // Mobile menu.
            const closeMenu = () => {
                mobileMenu.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.setAttribute('aria-label', 'Open menu');
                document.body.classList.remove('menu-open');
            };

            menuToggle.addEventListener('click', () => {
                const open = !mobileMenu.classList.contains('open');
                mobileMenu.classList.toggle('open', open);
                menuToggle.setAttribute('aria-expanded', String(open));
                menuToggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
                document.body.classList.toggle('menu-open', open);
            });

            mobileMenu.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
            window.addEventListener('resize', () => { if (window.innerWidth > 1050) closeMenu(); });

            // Reveal-on-scroll.
            const revealItems = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window && !reducedMotion) {
                const revealObserver = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            revealObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.13 });
                revealItems.forEach(item => revealObserver.observe(item));
            } else {
                revealItems.forEach(item => item.classList.add('visible'));
            }

            // Active navigation state.
            const sections = document.querySelectorAll('[data-section]');
            const navLinks = document.querySelectorAll('.desktop-nav .nav-link');
            if ('IntersectionObserver' in window) {
                const sectionObserver = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (!entry.isIntersecting) return;
                        navLinks.forEach(link => link.classList.toggle('active', link.getAttribute('href') === `#${entry.target.id}`));
                    });
                }, { rootMargin: '-42% 0px -50% 0px', threshold: 0 });
                sections.forEach(section => sectionObserver.observe(section));
            }

            // Animated stats.
            const counters = document.querySelectorAll('[data-count]');
            const animateCounter = counter => {
                const target = Number(counter.dataset.count);
                const decimals = Number(counter.dataset.decimals || 0);
                const suffix = counter.dataset.suffix || '';
                const duration = reducedMotion ? 0 : 1200;
                const start = performance.now();

                const frame = now => {
                    const progress = duration === 0 ? 1 : Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const value = target * eased;
                    counter.textContent = `${value.toFixed(decimals)}${suffix}`;
                    if (progress < 1) requestAnimationFrame(frame);
                };
                requestAnimationFrame(frame);
            };

            if ('IntersectionObserver' in window) {
                const counterObserver = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            counterObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: .55 });
                counters.forEach(counter => counterObserver.observe(counter));
            } else {
                counters.forEach(animateCounter);
            }

            // Project filtering.
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    filterButtons.forEach(item => item.classList.remove('active'));
                    button.classList.add('active');
                    const filter = button.dataset.filter;
                    projectCards.forEach(card => {
                        const categories = card.dataset.category.split(' ');
                        card.classList.toggle('hidden', filter !== 'all' && !categories.includes(filter));
                    });
                });
            });

            // Sports tabs.
            const sportTabs = document.querySelectorAll('.sport-tab');
            const sportPanels = document.querySelectorAll('.sport-panel');
            sportTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const id = tab.dataset.sport;
                    sportTabs.forEach(item => {
                        const active = item === tab;
                        item.classList.toggle('active', active);
                        item.setAttribute('aria-selected', String(active));
                    });
                    sportPanels.forEach(panel => panel.classList.toggle('active', panel.id === `sport-${id}`));
                });
            });

            // Project modal data.
            const projectData = {
                'lost-found': {
                    mark: 'LF', kicker: 'Award-winning full-stack platform', title: 'Waukee Lost & Found',
                    description: 'A real-world school operations platform designed to make reporting, searching, matching, claiming, and managing lost items dramatically easier.',
                    points: ['Secure PHP and PDO database workflows', 'Image upload, crop, validation, and moderation', 'Automated matching using dates, locations, and keywords', 'Administrator approval, claim review, search, and analytics', 'Placed 6th nationally at FBLA NLC 2026']
                },
                'study-hub': {
                    mark: 'BL', kicker: 'Education and competition platform', title: 'Business Leaders Study Hub',
                    description: 'A centralized place for students to explore competitive events, find the right fit, access resources, and prepare more efficiently.',
                    points: ['Database of dozens of competitive events', 'Advanced filters, sorting, and AJAX search', 'Personalized event-finder questionnaire', 'Resource organization and admin controls', 'Designed as a scalable public platform']
                },
                'pull-lane': {
                    mark: 'PL', kicker: 'Event-management product concept', title: 'Pull Lane',
                    description: 'A niche SaaS concept for tractor-pull organizers who need a cleaner way to handle schedules, drivers, tractors, classes, scoring, and event communication.',
                    points: ['Purpose-built for tractor-pull operations', 'Participant, class, and event management', 'Scoring and result presentation concepts', 'Professional public-facing promotion', 'Expandable into a subscription platform']
                },
                'photo-platform': {
                    mark: 'IA', kicker: 'Sports technology and marketplace concept', title: 'Iowa Sports Photographer Scheduler',
                    description: 'A platform concept that helps photographers discover and claim high-school sporting events while schools and coaches manage accurate schedules.',
                    points: ['Browse by sport, season, class, school, and team level', 'Game-level photographer signups and visibility', 'Schedule imports plus coach/admin editing', 'Statewide sports-data structure', 'Designed to solve a real coordination problem']
                }
            };

            const modal = document.getElementById('projectModal');
            const modalClose = document.getElementById('modalClose');
            const modalCloseSecondary = document.getElementById('modalCloseSecondary');
            const modalMark = document.getElementById('modalMark');
            const modalKicker = document.getElementById('modalKicker');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalPoints = document.getElementById('modalPoints');
            let lastFocused = null;

            const openModal = key => {
                const data = projectData[key];
                if (!data) return;
                lastFocused = document.activeElement;
                modalMark.textContent = data.mark;
                modalKicker.textContent = data.kicker;
                modalTitle.textContent = data.title;
                modalDescription.textContent = data.description;
                modalPoints.innerHTML = data.points.map(point => `<li>${point}</li>`).join('');
                modal.classList.add('open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
                modalClose.focus();
            };

            const closeModal = () => {
                modal.classList.remove('open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
                if (lastFocused) lastFocused.focus();
            };

            projectCards.forEach(card => {
                card.addEventListener('click', () => openModal(card.dataset.project));
                card.addEventListener('keydown', event => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        openModal(card.dataset.project);
                    }
                });
            });

            modalClose.addEventListener('click', closeModal);
            modalCloseSecondary.addEventListener('click', closeModal);
            modal.addEventListener('click', event => { if (event.target === modal) closeModal(); });
            document.addEventListener('keydown', event => { if (event.key === 'Escape' && modal.classList.contains('open')) closeModal(); });

            // Contact form opens a pre-filled email draft.
            const contactForm = document.getElementById('contactForm');
            contactForm.addEventListener('submit', event => {
                event.preventDefault();
                const form = new FormData(contactForm);
                const name = String(form.get('name') || '').trim();
                const email = String(form.get('email') || '').trim();
                const subject = String(form.get('subject') || '').trim();
                const message = String(form.get('message') || '').trim();
                const body = `Hi Parker,\n\n${message}\n\nFrom: ${name}\nEmail: ${email}`;
                window.location.href = `mailto:${encodeURIComponent(contactEmail)}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            });

            // Copy email.
            const copyButton = document.getElementById('copyEmail');
            const copyStatus = document.getElementById('copyStatus');
            copyButton.addEventListener('click', async () => {
                try {
                    await navigator.clipboard.writeText(copyButton.dataset.email);
                    copyStatus.textContent = 'Email copied.';
                } catch (error) {
                    copyStatus.textContent = copyButton.dataset.email;
                }
                window.setTimeout(() => { copyStatus.textContent = ''; }, 2600);
            });

            // Lightweight animated constellation background.
            const canvas = document.getElementById('constellation');
            const ctx = canvas.getContext('2d');
            let points = [];
            let animationId = null;

            const resizeCanvas = () => {
                const ratio = Math.min(window.devicePixelRatio || 1, 2);
                canvas.width = Math.floor(window.innerWidth * ratio);
                canvas.height = Math.floor(window.innerHeight * ratio);
                canvas.style.width = `${window.innerWidth}px`;
                canvas.style.height = `${window.innerHeight}px`;
                ctx.setTransform(ratio, 0, 0, ratio, 0, 0);
                const count = Math.min(68, Math.max(28, Math.floor(window.innerWidth / 23)));
                points = Array.from({ length: count }, () => ({
                    x: Math.random() * window.innerWidth,
                    y: Math.random() * window.innerHeight,
                    vx: (Math.random() - .5) * .13,
                    vy: (Math.random() - .5) * .13,
                    r: Math.random() * 1.25 + .35
                }));
            };

            const drawCanvas = () => {
                ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);
                points.forEach((point, index) => {
                    point.x += point.vx;
                    point.y += point.vy;
                    if (point.x < -10) point.x = window.innerWidth + 10;
                    if (point.x > window.innerWidth + 10) point.x = -10;
                    if (point.y < -10) point.y = window.innerHeight + 10;
                    if (point.y > window.innerHeight + 10) point.y = -10;

                    ctx.beginPath();
                    ctx.arc(point.x, point.y, point.r, 0, Math.PI * 2);
                    ctx.fillStyle = 'rgba(159, 205, 235, .42)';
                    ctx.fill();

                    for (let j = index + 1; j < points.length; j++) {
                        const other = points[j];
                        const dx = point.x - other.x;
                        const dy = point.y - other.y;
                        const distance = Math.hypot(dx, dy);
                        if (distance < 105) {
                            ctx.beginPath();
                            ctx.moveTo(point.x, point.y);
                            ctx.lineTo(other.x, other.y);
                            ctx.strokeStyle = `rgba(117, 243, 200, ${0.07 * (1 - distance / 105)})`;
                            ctx.lineWidth = .6;
                            ctx.stroke();
                        }
                    }
                });
                animationId = requestAnimationFrame(drawCanvas);
            };

            if (!reducedMotion) {
                resizeCanvas();
                drawCanvas();
                let resizeTimer;
                window.addEventListener('resize', () => {
                    clearTimeout(resizeTimer);
                    resizeTimer = setTimeout(resizeCanvas, 120);
                });
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden && animationId) cancelAnimationFrame(animationId);
                    else if (!document.hidden) drawCanvas();
                });
            }
        })();
    </script>
</body>
</html>
