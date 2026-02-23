<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}"> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">

    {{-- Primary Meta --}}
    <title>Prime IPO – Live IPO GMP, Upcoming & Closed IPOs India</title>
    <meta name="description"
        content="Track live IPO GMP (Grey Market Premium), upcoming IPOs, open IPOs, and closed IPOs in India. Check allotment status, price band, lot size and listing dates on Prime IPO.">
    <meta name="keywords"
        content="IPO GMP, Grey Market Premium, upcoming IPO 2025, live IPO, IPO allotment status, IPO listing date, SME IPO, mainboard IPO, India IPO">
    <meta name="author" content="Prime IPO">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.primeipo.in/">

    {{-- Open Graph (Facebook, WhatsApp, LinkedIn) --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.primeipo.in/">
    <meta property="og:title" content="Prime IPO – Live IPO GMP, Upcoming & Closed IPOs India">
    <meta property="og:description"
        content="Track live IPO GMP, upcoming IPOs and allotment status in India. Real-time Grey Market Premium data for all mainboard and SME IPOs.">
    <meta property="og:image" content="https://www.primeipo.in/og-image.png">
    <meta property="og:site_name" content="Prime IPO">
    <meta property="og:locale" content="en_IN">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.primeipo.in/">
    <meta name="twitter:title" content="Prime IPO – Live IPO GMP, Upcoming & Closed IPOs India">
    <meta name="twitter:description" content="Track live IPO GMP, upcoming IPOs and allotment status in India.">
    <meta name="twitter:image" content="https://www.primeipo.in/og-image.png">

    {{-- Schema.org JSON-LD --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Syne', 'sans-serif'],
                        body: ['DM Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            max-width: 100vw;
        }

        body {
            font-family: 'DM Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        th {
            font-family: 'Syne', sans-serif;
        }

        /* ── DARK MODE ── */
        .dark .bg-page {
            background: #0f1117;
        }

        .dark .bg-card-d {
            background: #16181f;
            border-color: #1e2230;
        }

        .dark .bg-header {
            background: rgba(15, 17, 23, .9);
            border-color: #1e2230;
        }

        .dark .text-main {
            color: #f1f5f9;
        }

        .dark .text-sub {
            color: #94a3b8;
        }

        .dark .text-muted {
            color: #475569;
        }

        .dark .border-c {
            border-color: #1e2230;
        }

        .dark .input-bg {
            background: #16181f;
            border-color: #1e2230;
            color: #e2e8f0;
        }

        .dark .row-hover:hover {
            background: #1a1d26;
        }

        .dark .tab-idle {
            background: #16181f;
            border: 1px solid #1e2230;
            color: #94a3b8;
        }

        .dark .stat-bg {
            background: linear-gradient(135deg, #16181f, #1a1d26);
            border: 1px solid #1e2230;
        }

        .dark .inner-bg {
            background: #0f1117;
        }

        .dark body {
            background: #0f1117;
            color: #cbd5e1;
        }

        /* ── LIGHT MODE ── */
        .bg-page {
            background: #f8fafc;
        }

        .bg-card-d {
            background: #ffffff;
            border-color: #e2e8f0;
        }

        .bg-header {
            background: rgba(248, 250, 252, .92);
            border-color: #e2e8f0;
        }

        .text-main {
            color: #0f172a;
        }

        .text-sub {
            color: #475569;
        }

        .text-muted {
            color: #94a3b8;
        }

        .border-c {
            border-color: #e2e8f0;
        }

        .input-bg {
            background: #f1f5f9;
            border-color: #e2e8f0;
            color: #1e293b;
        }

        .row-hover:hover {
            background: #f8fafc;
        }

        .tab-idle {
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            color: #64748b;
        }

        .stat-bg {
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            border: 1px solid #e2e8f0;
        }

        .inner-bg {
            background: #f1f5f9;
        }

        body {
            background: #f8fafc;
            color: #1e293b;
        }

        /* ── SHARED ── */
        .tab-active {
            background: #22c55e !important;
            color: #052e16 !important;
            font-weight: 700;
            box-shadow: 0 0 14px rgba(34, 197, 94, .4);
        }

        .badge-open {
            background: #052e16;
            color: #4ade80;
            border: 1px solid #166534;
        }

        .badge-upcoming {
            background: #422006;
            color: #fbbf24;
            border: 1px solid #92400e;
        }

        .badge-closed {
            background: #2e1065;
            color: #c4b5fd;
            border: 1px solid #5b21b6;
        }

        .gmp-pos {
            color: #22c55e;
        }

        .gmp-neg {
            color: #f87171;
        }

        .gmp-zero {
            color: #94a3b8;
        }

        .glow-logo {
            box-shadow: 0 0 20px rgba(34, 197, 94, .3);
        }

        /* ── THEME SWITCH ── */
        .switch {
            position: relative;
            width: 50px;
            height: 26px;
            flex-shrink: 0;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
            position: absolute;
        }

        .slider {
            position: absolute;
            inset: 0;
            background: #334155;
            border-radius: 26px;
            cursor: pointer;
            transition: background .3s;
        }

        .slider::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: #fff;
            border-radius: 50%;
            top: 3px;
            left: 3px;
            transition: transform .3s;
            box-shadow: 0 1px 4px rgba(0, 0, 0, .3);
        }

        input:checked+.slider {
            background: #22c55e;
        }

        input:checked+.slider::before {
            transform: translateX(24px);
        }

        /* ── ROWS ── */
        .ipo-row {
            transition: background .15s, transform .15s;
        }

        .ipo-row:hover {
            transform: translateX(3px);
        }

        /* ── ANIMATIONS ── */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(14px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .fade-up {
            animation: fadeUp .45s ease forwards;
        }

        .d1 {
            animation-delay: .1s;
            opacity: 0;
        }

        .d2 {
            animation-delay: .2s;
            opacity: 0;
        }

        /* ── RESPONSIVE LAYOUT ── */
        .desktop-table {
            display: block;
        }

        .mobile-cards {
            display: none;
        }

        @media (max-width: 767px) {
            .desktop-table {
                display: none;
            }

            .mobile-cards {
                display: block;
            }
        }

        /* focus ring */
        input[type=text]:focus {
            outline: none;
            border-color: #22c55e !important;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, .15);
        }

        /* thin scrollbar */
        .tbl-scroll::-webkit-scrollbar {
            height: 3px;
        }

        .tbl-scroll::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }

        .tbl-scroll {
            overflow-x: auto;
        }
    </style>
</head>

<body class="min-h-screen bg-page">

    {{-- ══════ HEADER ══════ --}}
    <header class="bg-header border-b border-c sticky top-0 z-30 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-3 md:px-4 py-3 flex items-center gap-3">

            {{-- Logo --}}
            <div class="flex items-center gap-2 flex-shrink-0">
                <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center glow-logo">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                    </svg>
                </div>
                <span class="font-display text-lg font-bold text-main tracking-tight">Prime <span
                        class="text-green-500">IPO</span></span>
            </div>

            {{-- Search --}}
            <div class="flex-1 min-w-0">
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-muted pointer-events-none"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input id="searchInput" type="text" placeholder="Search IPO…"
                        class="input-bg w-full border rounded-xl pl-9 pr-3 py-2 text-sm transition-all">
                </div>
            </div>

            {{-- Theme toggle --}}
            <div class="flex items-center gap-2 flex-shrink-0">
                <svg id="iconSun" class="w-4 h-4 text-yellow-400 hidden" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.592-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                </svg>
                <svg id="iconMoon" class="w-4 h-4 text-slate-400" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                        clip-rule="evenodd" />
                </svg>
                <label class="switch">
                    <input type="checkbox" id="themeToggle">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-3 md:px-4 py-6 md:py-8">

        {{-- ══════ STATS ══════ --}}
        <section class="mb-8 fade-up">
            <h1 class="font-display text-2xl md:text-3xl font-bold text-main mb-1">IPO <span
                    class="text-green-500">Dashboard</span></h1>
            <p class="text-sub text-sm mb-5">Live, upcoming and closed IPOs with GMP signals</p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                @php
                    $open = collect($data)->where('status', 'open')->count();
                    $upcoming = collect($data)->where('status', 'upcoming')->count();
                    $closed = collect($data)->where('status', 'closed')->count();
                    $withGmp = collect($data)->where('gmp_value', '>', 0)->count();
                    $stats = [
                        ['label' => 'Open Now', 'value' => $open, 'emoji' => '🟢', 'color' => 'text-green-500'],
                        ['label' => 'Upcoming', 'value' => $upcoming, 'emoji' => '🟡', 'color' => 'text-yellow-400'],
                        ['label' => 'Closed', 'value' => $closed, 'emoji' => '🟣', 'color' => 'text-purple-400'],
                        ['label' => 'Positive GMP', 'value' => $withGmp, 'emoji' => '📈', 'color' => 'text-green-400'],
                    ];
                @endphp
                @foreach ($stats as $s)
                    <div class="stat-bg rounded-2xl p-4 md:p-5 transition-all duration-200 hover:shadow-lg">
                        <div class="text-xl mb-2">{{ $s['emoji'] }}</div>
                        <div class="font-display text-2xl md:text-3xl font-bold {{ $s['color'] }}">{{ $s['value'] }}
                        </div>
                        <div class="text-muted text-xs mt-1 uppercase tracking-wider font-semibold">{{ $s['label'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- ══════ TABS ══════ --}}
        <section class="mb-5 fade-up d1 flex flex-wrap gap-2">
            @foreach (['all', 'open', 'upcoming', 'closed'] as $tab)
                <button onclick="filterStatus('{{ $tab }}')" id="tab-{{ $tab }}"
                    class="tab-btn {{ $tab === 'all' ? 'tab-active' : 'tab-idle' }} px-4 py-2 rounded-xl text-sm capitalize font-semibold transition-all">
                    {{ ucfirst($tab) }}
                </button>
            @endforeach
        </section>

        {{-- ══════ DESKTOP TABLE ══════ --}}
        <section class="fade-up d2 desktop-table">
            <div class="bg-card-d border border-c rounded-2xl overflow-hidden">
                <div class="tbl-scroll">
                    <table class="w-full text-sm" style="min-width:680px">
                        <thead>
                            <tr class="border-b border-c text-left">
                                <th class="px-4 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold w-10">
                                    #
                                </th>
                                <th class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold">
                                    Company</th>
                                <th class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold">
                                    Status
                                </th>
                                <th class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold">Price
                                    Band</th>
                                <th class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold">GMP
                                </th>
                                <th class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold">Lot
                                </th>
                                <th
                                    class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold hidden lg:table-cell">
                                    Issue Size</th>
                                <th
                                    class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold hidden lg:table-cell">
                                    Open</th>
                                <th
                                    class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold hidden lg:table-cell">
                                    Close</th>
                                <th
                                    class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold hidden xl:table-cell">
                                    Allotment</th>
                                <th
                                    class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold hidden xl:table-cell">
                                    Listing</th>
                                <th
                                    class="px-3 py-3.5 text-xs uppercase tracking-wider text-muted font-semibold text-center">
                                    Allotment Check</th>
                            </tr>
                        </thead>
                        <tbody id="ipoTbody">
                            @forelse ($data as $i => $ipo)
                                @php
                                    $status = $ipo['status'] ?? 'unknown';
                                    $gmp = $ipo['gmp_value'] ?? 0;
                                    $gmpPct = $ipo['gmp_percent'] ?? 0;
                                @endphp
                                <tr class="ipo-row row-hover border-b border-c" data-status="{{ $status }}"
                                    data-name="{{ strtolower($ipo['name'] ?? '') }}">

                                    <td class="px-4 py-3.5 text-muted text-xs">{{ $i + 1 }}</td>

                                    <td class="px-3 py-3.5">
                                        <div class="flex items-center gap-2.5">
                                            @if (!empty($ipo['icon_url']))
                                                <img src="{{ $ipo['icon_url'] }}" alt=""
                                                    class="w-8 h-8 rounded-lg object-cover flex-shrink-0"
                                                    onerror="this.style.display='none'">
                                            @endif
                                            <div class="min-w-0">
                                                <a href="/ipo/{{ $ipo['id'] }}/{{ $ipo['slug'] }}"
                                                    class="font-semibold text-sm leading-tight hover:text-green-500 transition-colors"
                                                    style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;display:block">{{ $ipo['name'] ?? '—' }}</a>
                                                @if (!empty($ipo['lead_managers']))
                                                    <div class="text-xs text-muted mt-0.5"
                                                        style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">
                                                        {{ implode(', ', array_slice($ipo['lead_managers'], 0, 1)) }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-3 py-3.5">
                                        @php
                                            $badgeClass =
                                                $status === 'open'
                                                    ? 'badge-open'
                                                    : ($status === 'upcoming'
                                                        ? 'badge-upcoming'
                                                        : 'badge-closed');
                                        @endphp
                                        <span
                                            class="px-2.5 py-1 rounded-lg text-xs font-bold uppercase tracking-wide {{ $badgeClass }}">
                                            {{ $status }}
                                        </span>
                                    </td>

                                    <td class="px-3 py-3.5 font-semibold text-main text-sm whitespace-nowrap">
                                        ₹{{ $ipo['price_band'] ?? '—' }}</td>

                                    <td class="px-3 py-3.5">
                                        @if ($gmp > 0)
                                            <div class="gmp-pos font-bold">+₹{{ $gmp }}</div>
                                            <div class="text-xs gmp-pos opacity-70">{{ $gmpPct }}%</div>
                                        @elseif($gmp < 0)
                                            <div class="gmp-neg font-bold">₹{{ $gmp }}</div>
                                            <div class="text-xs gmp-neg opacity-70">{{ $gmpPct }}%</div>
                                        @else
                                            <span class="gmp-zero">—</span>
                                        @endif
                                    </td>

                                    <td class="px-3 py-3.5 text-sub text-sm">{{ $ipo['lot_size'] ?? '—' }}</td>

                                    <td class="px-3 py-3.5 text-sub text-sm hidden lg:table-cell whitespace-nowrap">
                                        @if (!empty($ipo['issue_size_cr']))
                                            ₹{{ number_format((float) $ipo['issue_size_cr'], 0) }} Cr
                                        @else
                                            —
                                        @endif
                                    </td>
                                    <td class="px-3 py-3.5 text-sub text-xs hidden lg:table-cell whitespace-nowrap">
                                        {{ $ipo['open_date'] ?? '—' }}</td>
                                    <td class="px-3 py-3.5 text-sub text-xs hidden lg:table-cell whitespace-nowrap">
                                        {{ $ipo['close_date'] ?? '—' }}</td>
                                    <td class="px-3 py-3.5 hidden xl:table-cell whitespace-nowrap">
                                        <div class="text-sub text-xs">{{ $ipo['allotment_date'] ?? '—' }}</div>
                                    </td>
                                    <td class="px-3 py-3.5 hidden xl:table-cell whitespace-nowrap">
                                        <span
                                            class="text-green-500 text-xs font-semibold">{{ $ipo['listing_date'] ?? '—' }}</span>
                                    </td>
                                    <td class="px-3 py-3.5 text-center whitespace-nowrap">
                                        @if (!empty($ipo['allotment_link']))
                                            <a href="{{ $ipo['allotment_link'] }}" target="_blank"
                                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-green-500 text-white hover:bg-green-600 active:scale-95 transition-all shadow-sm shadow-green-500/30">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2.5"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Check
                                            </a>
                                        @else
                                            <span class="text-muted text-xs">—</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center py-16 text-muted">No IPO data available.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="px-4 py-3 border-t border-c flex items-center justify-between text-xs text-muted">
                    <span id="rowCount">Showing {{ count($data) }} IPOs</span>
                    <span>GMP data is indicative, not financial advice.</span>
                </div>
            </div>
        </section>

        {{-- ══════ MOBILE CARDS ══════ --}}
        <section class="fade-up d2 mobile-cards">
            <div class="space-y-3" id="mobileCardList">
                @forelse ($data as $i => $ipo)
                    @php
                        $status = $ipo['status'] ?? 'unknown';
                        $gmp = $ipo['gmp_value'] ?? 0;
                        $gmpPct = $ipo['gmp_percent'] ?? 0;
                    @endphp
                    <div class="bg-card-d border border-c rounded-2xl p-4 mobile-ipo-card"
                        data-status="{{ $status }}" data-name="{{ strtolower($ipo['name'] ?? '') }}">

                        <div class="flex items-start gap-3 mb-3">
                            @if (!empty($ipo['icon_url']))
                                <img src="{{ $ipo['icon_url'] }}" alt=""
                                    class="w-10 h-10 rounded-xl object-cover flex-shrink-0"
                                    onerror="this.style.display='none'">
                            @endif
                            <div class="flex-1 min-w-0">
                                <a href="/ipo/{{ $ipo['id'] }}/{{ $ipo['slug'] }}"
                                    class="font-semibold text-main text-sm leading-snug hover:text-green-500 transition-colors block">{{ $ipo['name'] ?? '—' }}</a>
                                @if (!empty($ipo['lead_managers']))
                                    <div class="text-xs text-muted mt-0.5 truncate">
                                        {{ implode(', ', array_slice($ipo['lead_managers'], 0, 1)) }}</div>
                                @endif
                            </div>
                            @php
                                $badgeClass =
                                    $status === 'open'
                                        ? 'badge-open'
                                        : ($status === 'upcoming'
                                            ? 'badge-upcoming'
                                            : 'badge-closed');
                            @endphp
                            <span
                                class="px-2.5 py-1 rounded-lg text-xs font-bold uppercase tracking-wide flex-shrink-0 {{ $badgeClass }}">
                                {{ $status }}
                            </span>
                        </div>

                        <div class="grid grid-cols-3 gap-2 text-xs">
                            <div class="inner-bg rounded-xl p-2.5">
                                <div class="text-muted mb-1">Price Band</div>
                                <div class="font-bold text-main text-sm">₹{{ $ipo['price_band'] ?? '—' }}</div>
                            </div>
                            <div class="inner-bg rounded-xl p-2.5">
                                <div class="text-muted mb-1">GMP</div>
                                @if ($gmp > 0)
                                    <div class="font-bold gmp-pos text-sm">+₹{{ $gmp }}</div>
                                    <div class="gmp-pos opacity-70">{{ $gmpPct }}%</div>
                                @elseif($gmp < 0)
                                    <div class="font-bold gmp-neg text-sm">₹{{ $gmp }}</div>
                                @else
                                    <div class="gmp-zero text-sm">—</div>
                                @endif
                            </div>
                            <div class="inner-bg rounded-xl p-2.5">
                                <div class="text-muted mb-1">Lot Size</div>
                                <div class="font-bold text-main text-sm">{{ $ipo['lot_size'] ?? '—' }}</div>
                            </div>
                            <div class="inner-bg rounded-xl p-2.5">
                                <div class="text-muted mb-1">Open</div>
                                <div class="font-semibold text-sub">{{ $ipo['open_date'] ?? '—' }}</div>
                            </div>
                            <div class="inner-bg rounded-xl p-2.5">
                                <div class="text-muted mb-1">Close</div>
                                <div class="font-semibold text-sub">{{ $ipo['close_date'] ?? '—' }}</div>
                            </div>
                            <div class="inner-bg rounded-xl p-2.5">
                                <div class="text-muted mb-1">Listing</div>
                                <div class="font-semibold text-green-500">{{ $ipo['listing_date'] ?? '—' }}</div>
                            </div>
                        </div>

                        @if (!empty($ipo['issue_size_cr']))
                            <div class="mt-2.5 text-xs text-muted">
                                Issue Size: <span
                                    class="text-sub font-semibold">₹{{ number_format((float) $ipo['issue_size_cr'], 0) }}
                                    Cr</span>
                            </div>
                        @endif

                        @if (!empty($ipo['allotment_link']))
                            <div class="mt-3">
                                <a href="{{ $ipo['allotment_link'] }}" target="_blank"
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold bg-green-500/10 text-green-500 border border-green-500/30 hover:bg-green-500/20 transition-colors w-full justify-center">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    Check Allotment Status
                                </a>
                            </div>
                        @endif
                    </div>
                @empty
                    <div class="text-center py-16 text-muted">No IPO data available.</div>
                @endforelse
            </div>

            <div class="mt-3 text-center text-xs text-muted" id="mobileCount">Showing {{ count($data) }} IPOs</div>
        </section>

    </main>

    <footer class="border-t border-c mt-12">
        <div class="max-w-7xl mx-auto px-4 py-5 flex items-center justify-between text-xs text-muted">
            <span class="font-display font-semibold text-sub">IPO Hub</span>
            <span>© {{ date('Y') }} Prime IPO · Developed by <span class="text-green-500 font-semibold">Sujal
                    Sodha</span></span>
        </div>
    </footer>

    <script>
        // ─── THEME TOGGLE ───
        const toggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        const iconSun = document.getElementById('iconSun');
        const iconMoon = document.getElementById('iconMoon');

        function applyTheme(dark) {
            if (dark) {
                html.classList.add('dark');
                iconMoon.classList.remove('hidden');
                iconSun.classList.add('hidden');
                toggle.checked = true;
            } else {
                html.classList.remove('dark');
                iconSun.classList.remove('hidden');
                iconMoon.classList.add('hidden');
                toggle.checked = false;
            }
        }

        // Light default
        applyTheme(false);

        toggle.addEventListener('change', () => applyTheme(toggle.checked));


        // ─── FILTER ───
        let currentStatus = 'all';
        let currentSearch = '';

        const allRows = [...document.querySelectorAll('#ipoTbody tr[data-status]')];
        const allCards = [...document.querySelectorAll('.mobile-ipo-card')];

        function filterStatus(status) {
            currentStatus = status;
            ['all', 'open', 'upcoming', 'closed'].forEach(s => {
                const btn = document.getElementById('tab-' + s);
                if (!btn) return;
                if (s === status) {
                    btn.classList.add('tab-active');
                    btn.classList.remove('tab-idle');
                } else {
                    btn.classList.remove('tab-active');
                    btn.classList.add('tab-idle');
                }
            });
            applyFilters();
        }

        function applyFilters() {
            const q = currentSearch.toLowerCase();
            let visible = 0;

            allRows.forEach(row => {
                const ok = (currentStatus === 'all' || row.dataset.status === currentStatus) &&
                    row.dataset.name.includes(q);
                row.style.display = ok ? '' : 'none';
                if (ok) visible++;
            });

            allCards.forEach(card => {
                const ok = (currentStatus === 'all' || card.dataset.status === currentStatus) &&
                    card.dataset.name.includes(q);
                card.style.display = ok ? '' : 'none';
            });

            document.getElementById('rowCount').textContent = `Showing ${visible} IPOs`;
            document.getElementById('mobileCount').textContent = `Showing ${visible} IPOs`;
        }

        // ─── SEARCH ───
        document.getElementById('searchInput').addEventListener('input', e => {
            currentSearch = e.target.value;
            applyFilters();
        });
    </script>
</body>

</html>
