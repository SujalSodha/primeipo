<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['h1'] ?? 'IPO Detail' }} — Prime IPO</title>
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
                        body: ['DM Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        * {
            box-sizing: border-box
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            max-width: 100vw
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

        /* DARK */
        .dark body {
            background: #0f1117;
            color: #cbd5e1;
        }

        .dark .bg-page {
            background: #0f1117;
        }

        .dark .bg-card {
            background: #16181f;
            border-color: #1e2230;
        }

        .dark .bg-inner {
            background: #0f1117;
        }

        .dark .bg-hdr {
            background: rgba(15, 17, 23, .9);
            border-color: #1e2230;
        }

        .dark .text-main {
            color: #f1f5f9;
        }

        .dark .text-sub {
            color: #94a3b8;
        }

        .dark .text-dim {
            color: #475569;
        }

        .dark .bdr {
            border-color: #1e2230;
        }

        .dark .inp {
            background: #16181f;
            border-color: #1e2230;
            color: #e2e8f0;
        }

        .dark .tbl-head {
            background: #1a1d26;
        }

        .dark .tbl-row:hover {
            background: #1a1d26;
        }

        .dark .section-hdr {
            background: linear-gradient(90deg, #16a34a22, transparent);
            border-left: 3px solid #22c55e;
        }

        .dark .kpi-card {
            background: #1a1d26;
            border: 1px solid #1e2230;
        }

        /* LIGHT */
        body {
            background: #f8fafc;
            color: #1e293b;
        }

        .bg-page {
            background: #f8fafc;
        }

        .bg-card {
            background: #ffffff;
            border-color: #e2e8f0;
        }

        .bg-inner {
            background: #f8fafc;
        }

        .bg-hdr {
            background: rgba(248, 250, 252, .92);
            border-color: #e2e8f0;
        }

        .text-main {
            color: #0f172a;
        }

        .text-sub {
            color: #475569;
        }

        .text-dim {
            color: #94a3b8;
        }

        .bdr {
            border-color: #e2e8f0;
        }

        .inp {
            background: #f1f5f9;
            border-color: #e2e8f0;
            color: #1e293b;
        }

        .tbl-head {
            background: #f0fdf4;
        }

        .tbl-row:hover {
            background: #f8fafc;
        }

        .section-hdr {
            background: linear-gradient(90deg, #dcfce7, transparent);
            border-left: 3px solid #22c55e;
        }

        .kpi-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
        }

        /* SHARED */
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

        .glow-logo {
            box-shadow: 0 0 20px rgba(34, 197, 94, .3);
        }

        .gmp-pos {
            color: #22c55e
        }

        .gmp-neg {
            color: #f87171
        }

        .gmp-zero {
            color: #94a3b8
        }

        /* SWITCH */
        .switch {
            position: relative;
            width: 50px;
            height: 26px;
            flex-shrink: 0
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
            position: absolute
        }

        .slider {
            position: absolute;
            inset: 0;
            background: #334155;
            border-radius: 26px;
            cursor: pointer;
            transition: background .3s
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
            box-shadow: 0 1px 4px rgba(0, 0, 0, .3)
        }

        input:checked+.slider {
            background: #22c55e
        }

        input:checked+.slider::before {
            transform: translateX(24px)
        }

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

        .fu {
            animation: fadeUp .45s ease forwards
        }

        .d1 {
            animation-delay: .08s;
            opacity: 0
        }

        .d2 {
            animation-delay: .16s;
            opacity: 0
        }

        .d3 {
            animation-delay: .24s;
            opacity: 0
        }

        .d4 {
            animation-delay: .32s;
            opacity: 0
        }

        .d5 {
            animation-delay: .40s;
            opacity: 0
        }

        .d6 {
            animation-delay: .48s;
            opacity: 0
        }

        .d7 {
            animation-delay: .56s;
            opacity: 0
        }

        .tbl-scroll::-webkit-scrollbar {
            height: 3px
        }

        .tbl-scroll::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px
        }

        .tbl-scroll {
            overflow-x: auto
        }

        .stat-pill {
            transition: all .2s
        }

        .stat-pill:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, .15)
        }

        /* KPI responsive grid */
        .kpi-grid {
            display: grid;
            gap: 0.75rem;
            grid-template-columns: repeat(2, 1fr);
        }

        @media(min-width:640px) {
            .kpi-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media(min-width:1024px) {
            .kpi-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* recommend badge */
        .rec-apply {
            background: #052e16;
            color: #4ade80;
            border: 1px solid #166534;
        }

        .rec-avoid {
            background: #450a0a;
            color: #f87171;
            border: 1px solid #7f1d1d;
        }

        .rec-neutral {
            background: #1e293b;
            color: #94a3b8;
            border: 1px solid #334155;
        }
    </style>
</head>

<body class="min-h-screen bg-page">

    {{-- ══════ HEADER ══════ --}}
    <header class="bg-hdr border-b bdr sticky top-0 z-30 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-3 md:px-4 py-3 flex items-center gap-3">
            <a href="/" class="flex items-center gap-2 flex-shrink-0">
                <div class="w-8 h-8 rounded-lg bg-green-500 flex items-center justify-center glow-logo">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                    </svg>
                </div>
                <span class="font-display text-lg font-bold text-main tracking-tight">Prime <span
                        class="text-green-500">IPO</span></span>
            </a>
            <div class="flex-1 min-w-0">
                <div class="flex items-center gap-1.5 text-xs text-dim">
                    <a href="/" class="hover:text-green-500 transition-colors">Dashboard</a>
                    <span>›</span>
                    <span class="text-sub truncate">{{ $data['h1'] ?? 'IPO Detail' }}</span>
                </div>
            </div>
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

        @php
            /*
    ══════════════════════════════════════════════════════════════
    TABLE INDEX MAP (matches actual scraped data structure)
    ══════════════════════════════════════════════════════════════
    tables[0]  → Hero quick info  (Price, GMP, Lot size, Issue size, Allotment, Listing)
    tables[1]  → Subscription by shares (Category / Offered / Applied / Times)
    tables[2]  → Application-Wise Breakup (approx apps)
    tables[3]  → Subscription Demand in ₹ crore
    tables[4]  → QIB Interest Cost per share
    tables[5]  → Lot Distribution (Category / Lot(s) / Qty / Amount / Reserved)
    tables[6]  → Category Reservation (Shares Offered / %)
    tables[7]  → IPO Details (Total Issue Size, Fresh Issue, OFS, Face Value, etc.)
    tables[8]  → KPI (ROE, ROCE, EPS, P/E Pre/Post)
    tables[9]  → Company Financials (Assets, Total Income, PAT, EBITDA, etc.)
    tables[10] → Peer Comparison – Valuation (P/E, CMP, Face Value)
    tables[11] → Peer Comparison – Financial Performance (NAV, RoNW, EPS)
    tables[12] → Reviewers (Reviewer / Recommendation / File)
    ══════════════════════════════════════════════════════════════
    */

            // Hero quick-info
            $table0 = collect($data['tables'][0]['rows'] ?? []);
            $infoMap = [];
            foreach ($table0 as $row) {
                if (isset($row[0], $row[1])) {
                    $infoMap[$row[0]] = $row[1];
                }
            }
            $price = $infoMap['Price'] ?? '—';
            $gmpRaw = $infoMap['GMP Rumors *'] ?? '₹0';
            $gmpNum = (int) preg_replace('/[^0-9-]/', '', $gmpRaw);
            $lotSize = $infoMap['Lot size'] ?? '—';
            $issueSize = $infoMap['Issue size'] ?? '—';
            $allotment = $infoMap['Allotment'] ?? '—';
            $listing = $infoMap['Listing'] ?? '—';

            // IPO Details (table 7)
            $ipoDetails = [];
            foreach ($data['tables'][7]['rows'] ?? [] as $row) {
                if (isset($row[0], $row[1])) {
                    $ipoDetails[$row[0]] = $row[1];
                }
            }

            // Subscription shares (table 1)
            $subSharesTable = $data['tables'][1] ?? null;

            // Subscription ₹ crore (table 3)
            $subCroreTable = $data['tables'][3] ?? null;

            // Lot Distribution (table 5)
            $lotTable = $data['tables'][5] ?? null;

            // Category Reservation (table 6)
            $resTable = $data['tables'][6] ?? null;

            // KPI (table 8)
            $kpiTable = $data['tables'][8] ?? null;

            // Financials (table 9)
            $finTable = $data['tables'][9] ?? null;

            // Peer Valuation (table 10)
            $peer1 = $data['tables'][10] ?? null;

            // Peer Performance (table 11)
            $peer2 = $data['tables'][11] ?? null;

            // Reviewers (table 12)
            $reviewTable = $data['tables'][12] ?? null;

            // Strength / Weakness text
            $swDiv = '';
            foreach ($data['all_divs_with_class'] ?? [] as $div) {
                if (
                    ($div['class'] ?? '') === 'col-12' &&
                    str_contains($div['text'] ?? '', 'Strength') &&
                    str_contains($div['text'] ?? '', 'Weakness')
                ) {
                    $swDiv = $div['text'];
                    break;
                }
            }
            // Parse individual strength/weakness points
            $strengthPoints = [];
            $weaknessPoints = [];
            if ($swDiv) {
                if (preg_match('/Strength(.*?)Weakness/s', $swDiv, $m)) {
                    preg_match_all('/([A-Z][^:]+):\s*([^.]+\.(?:[^.]+\.)*)/u', trim($m[1]), $sm);
                    foreach ($sm[1] as $i => $title) {
                        $strengthPoints[] = ['title' => trim($title), 'body' => trim($sm[2][$i] ?? '')];
                    }
                }
                if (preg_match('/Weakness(.*?)$/s', $swDiv, $m)) {
                    preg_match_all('/([A-Z][^:]+):\s*([^.]+\.(?:[^.]+\.)*)/u', trim($m[1]), $wm);
                    foreach ($wm[1] as $i => $title) {
                        $weaknessPoints[] = ['title' => trim($title), 'body' => trim($wm[2][$i] ?? '')];
                    }
                }
            }

            // Lead Manager
            $leadManager = '';
            foreach ($data['all_divs_with_class'] ?? [] as $div) {
                if (
                    ($div['class'] ?? '') === 'card-body' &&
                    isset($prev_header) &&
                    str_contains($prev_header, 'Lead Manager')
                ) {
                    $leadManager = trim($div['text']);
                    break;
                }
                $prev_header = $div['text'] ?? '';
            }
            // Fallback: find lead manager card-body after Lead Manager header
            $foundLM = false;
            foreach ($data['all_divs_with_class'] ?? [] as $div) {
                if ($foundLM && ($div['class'] ?? '') === 'card-body') {
                    $leadManager = trim($div['text']);
                    $foundLM = false;
                }
                if (
                    str_contains($div['text'] ?? '', 'Lead Manager') &&
                    str_contains($div['class'] ?? '', 'card-header')
                ) {
                    $foundLM = true;
                }
            }

            // Address
            $addressDiv = '';
            $foundAddr = false;
            foreach ($data['all_divs_with_class'] ?? [] as $div) {
                if ($foundAddr && ($div['class'] ?? '') === 'card-body') {
                    $addressDiv = trim($div['text']);
                    $foundAddr = false;
                }
                if (str_contains($div['text'] ?? '', 'Address') && str_contains($div['class'] ?? '', 'card-header')) {
                    $foundAddr = true;
                }
            }

            // Registrar
            $registrarDiv = '';
            $foundReg = false;
            foreach ($data['all_divs_with_class'] ?? [] as $div) {
                if ($foundReg && ($div['class'] ?? '') === 'card-body') {
                    $registrarDiv = trim($div['text']);
                    $foundReg = false;
                }
                if (str_contains($div['text'] ?? '', 'Registrar') && str_contains($div['class'] ?? '', 'card-header')) {
                    $foundReg = true;
                }
            }

            // About Company text
            $aboutText = '';
            foreach ($data['all_divs_with_class'] ?? [] as $div) {
                if (
                    ($div['class'] ?? '') === 'col-12' &&
                    str_contains($div['text'] ?? '', 'Incorporated') &&
                    !str_contains($div['text'] ?? '', 'Strength')
                ) {
                    $aboutText = $div['text'];
                    break;
                }
            }
            // Also try content-wrapper or card-body with about info
            if (!$aboutText) {
                foreach ($data['all_divs_with_class'] ?? [] as $div) {
                    if (
                        ($div['class'] ?? '') === 'col-12' &&
                        strlen($div['text'] ?? '') > 200 &&
                        !str_contains($div['text'] ?? '', 'Strength') &&
                        !str_contains($div['text'] ?? '', 'Category')
                    ) {
                        $aboutText = $div['text'];
                        break;
                    }
                }
            }

            $status = 'upcoming'; // upcoming | open | closed
        @endphp

        {{-- ══════ HERO ══════ --}}
        <div class="fu grid grid-cols-1 lg:grid-cols-3 gap-5 mb-6">

            {{-- Company card --}}
            <div class="lg:col-span-1">
                <div class="bg-card border bdr rounded-2xl overflow-hidden h-full">
                    <div class="h-1.5 bg-gradient-to-r from-green-500 to-emerald-400"></div>
                    <div class="p-5">
                        <div class="flex flex-col items-center text-center mb-5">
                            @php
                                $iconUrl = "https://assets.ipopremium.in/images/ipo/{$data['id']}.png";
                                $logoInitial = substr($data['h1'] ?? 'I', 0, 1);
                            @endphp
                            <div class="w-20 h-20 rounded-2xl bg-inner border bdr flex items-center justify-center mb-3 overflow-hidden"
                                id="logo-wrap">
                                <img src="{{ $iconUrl }}" alt="{{ $data['h1'] }}"
                                    class="w-full h-full object-contain p-1"
                                    onerror="this.parentElement.innerHTML='<span style=&quot;font-family:Syne,sans-serif;font-weight:700;font-size:1.5rem;color:#22c55e&quot;>{{ $logoInitial }}</span>'">
                            </div>
                            <h1 class="font-display font-bold text-lg text-main leading-tight">{{ $data['h1'] ?? '—' }}
                            </h1>
                            @php
                                // Extract date range from content-wrapper div
                                $dateRange = '';
                                foreach ($data['all_divs_with_class'] ?? [] as $div) {
                                    if (
                                        preg_match(
                                            '/(\w+ \d+, \d{4})\s*[–-]\s*(\w+ \d+, \d{4})/',
                                            $div['text'] ?? '',
                                            $dm,
                                        )
                                    ) {
                                        $dateRange = $dm[1] . ' – ' . $dm[2];
                                        break;
                                    }
                                }
                            @endphp
                            @if ($dateRange)
                                <p class="text-xs text-dim mt-1">{{ $dateRange }}</p>
                            @endif
                            <span
                                class="mt-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide badge-{{ $status }}">{{ ucfirst($status) }}</span>
                        </div>

                        <div class="space-y-2.5">
                            @foreach ([['Price Band', $price, '💰'], ['GMP Rumors', $gmpRaw, '📊'], ['Lot Size', $lotSize, '📦'], ['Issue Size', $issueSize, '🏦'], ['Allotment', $allotment, '📅'], ['Listing', $listing, '🚀']] as [$label, $val, $ico])
                                <div class="flex items-center justify-between py-2 border-b bdr last:border-0">
                                    <span class="text-dim text-xs flex items-center gap-1.5">{{ $ico }}
                                        {{ $label }}</span>
                                    <span
                                        class="font-semibold text-sm text-main
                                @if ($label === 'GMP Rumors' && $gmpNum > 0) gmp-pos
                                @elseif($label === 'GMP Rumors' && $gmpNum < 0) gmp-neg
                                @elseif($label === 'GMP Rumors') gmp-zero
                                @elseif($label === 'Listing') text-green-500 @endif">{{ $val }}</span>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4 pt-3 border-t bdr text-center">
                            <p class="text-xs text-dim italic">* GMP is indicative, not investment advice.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: KPI + IPO Details --}}
            <div class="lg:col-span-2 space-y-5">

                {{-- ── KPI (table 8) ── --}}
                @if ($kpiTable && count($kpiTable['rows'] ?? []) > 1)
                    @php
                        $kpiHeaders = $kpiTable['rows'][0] ?? [];
                        $kpiRows = array_slice($kpiTable['rows'], 1);
                    @endphp
                    <div class="bg-card border bdr rounded-2xl p-5">
                        <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                            <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Key
                                Performance Indicators</h2>
                        </div>
                        <div class="kpi-grid">
                            @foreach ($kpiRows as $kRow)
                                <div class="kpi-card rounded-xl p-3 stat-pill">
                                    <div class="text-dim text-xs mb-2 font-bold uppercase tracking-wider leading-tight">
                                        {{ $kRow[0] ?? '' }}</div>
                                    @foreach (array_slice($kpiHeaders, 1) as $hi => $hLabel)
                                        @php $val = $kRow[$hi+1] ?? ''; @endphp
                                        @if ($val !== '')
                                            <div class="flex items-center justify-between mt-1.5 gap-1">
                                                <span class="text-xs text-dim truncate">{{ $hLabel }}</span>
                                                <span
                                                    class="text-xs font-bold text-green-500 flex-shrink-0">{{ $val }}</span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- ── IPO Details (table 7) ── --}}
                @if (count($ipoDetails))
                    <div class="bg-card border bdr rounded-2xl p-5">
                        <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                            <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">IPO Details
                            </h2>
                        </div>
                        <div class="tbl-scroll">
                            <table class="w-full text-sm" style="min-width:320px">
                                @foreach ($ipoDetails as $key => $val)
                                    <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                        <td class="py-2.5 pr-4 text-dim text-xs font-semibold w-1/2 align-top">
                                            {{ $key }}</td>
                                        <td class="py-2.5 text-main text-sm font-medium">{{ $val }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        {{-- ══════ SUBSCRIPTION (shares) ══════ --}}
        @if ($subSharesTable && count($subSharesTable['rows'] ?? []) > 1)
            <div class="fu d1 bg-card border bdr rounded-2xl overflow-hidden mb-5">
                <div class="section-hdr px-5 py-3">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Subscription Status
                        <span class="text-dim font-normal normal-case text-xs">(shares)</span>
                    </h2>
                </div>
                <div class="tbl-scroll">
                    <table class="w-full text-sm" style="min-width:480px">
                        <thead>
                            <tr class="tbl-head border-b bdr">
                                @foreach ($subSharesTable['rows'][0] as $th)
                                    <th
                                        class="px-5 py-3 text-left text-xs uppercase tracking-wider text-dim font-semibold">
                                        {{ $th }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($subSharesTable['rows'], 1) as $row)
                                <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                    @foreach ($row as $ci => $cell)
                                        <td
                                            class="px-5 py-3
                                    {{ $ci === 0 ? 'font-semibold text-main' : 'text-sub' }}
                                    {{ $ci === 3 ? 'font-bold ' . ($cell >= 1 ? 'text-green-500' : 'text-red-400') : '' }}">
                                            {{ $cell }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- ══════ SUBSCRIPTION (₹ crore) ══════ --}}
        @if ($subCroreTable && count($subCroreTable['rows'] ?? []) > 2)
            @php
                $croreRows = $subCroreTable['rows'];
                // row 0 is title row, row 1 is header
                $croreTitle = $croreRows[0][0] ?? 'Subscription Demand (in ₹ crore)';
                $croreHeaders = $croreRows[1] ?? [];
                $croreData = array_slice($croreRows, 2);
            @endphp
            <div class="fu d1 bg-card border bdr rounded-2xl overflow-hidden mb-5">
                <div class="section-hdr px-5 py-3">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">{{ $croreTitle }}
                    </h2>
                </div>
                <div class="tbl-scroll">
                    <table class="w-full text-sm" style="min-width:480px">
                        <thead>
                            <tr class="tbl-head border-b bdr">
                                @foreach ($croreHeaders as $th)
                                    <th
                                        class="px-5 py-3 text-left text-xs uppercase tracking-wider text-dim font-semibold">
                                        {{ $th }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($croreData as $row)
                                <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                    @foreach ($row as $ci => $cell)
                                        <td
                                            class="px-5 py-3
                                    {{ $ci === 0 ? 'font-semibold text-main' : 'text-sub' }}
                                    {{ $ci === 3 && is_numeric($cell) && $cell >= 1 ? 'text-green-500 font-bold' : '' }}
                                    {{ $ci === 3 && is_numeric($cell) && $cell < 1 && $cell > 0 ? 'text-red-400 font-bold' : '' }}">
                                            {{ $cell }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- ══════ LOT DISTRIBUTION (table 5) ══════ --}}
        @if ($lotTable && count($lotTable['rows'] ?? []) > 1)
            <div class="fu d2 bg-card border bdr rounded-2xl overflow-hidden mb-5">
                <div class="section-hdr px-5 py-3">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Lot Distribution</h2>
                </div>
                <div class="tbl-scroll">
                    <table class="w-full text-sm" style="min-width:500px">
                        <thead>
                            <tr class="tbl-head border-b bdr">
                                @foreach ($lotTable['rows'][0] ?? [] as $th)
                                    <th
                                        class="px-5 py-3 text-left text-xs uppercase tracking-wider text-dim font-semibold">
                                        {{ $th }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($lotTable['rows'], 1) as $row)
                                <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                    @foreach ($row as $ci => $cell)
                                        <td
                                            class="px-5 py-3.5
                                    {{ $ci === 0 ? 'font-semibold text-main' : 'text-sub' }}
                                    {{ $ci === 3 ? 'font-mono text-green-500 font-bold' : '' }}">
                                            @if ($ci === 3)
                                                ₹{{ number_format((int) $cell) }}@else{{ $cell }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- ══════ 2-COL: RESERVATION (table 6) ══════ --}}
        @if ($resTable && count($resTable['rows'] ?? []) > 1)
            <div class="fu d3 bg-card border bdr rounded-2xl overflow-hidden mb-5">
                <div class="section-hdr px-5 py-3">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Category Reservation
                    </h2>
                </div>
                <div class="p-5">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b bdr">
                                @foreach ($resTable['rows'][0] ?? [] as $th)
                                    <th class="pb-3 text-left text-xs uppercase tracking-wider text-dim font-semibold">
                                        {{ $th }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($resTable['rows'], 1) as $row)
                                <tr class="border-b bdr last:border-0">
                                    @foreach ($row as $ci => $cell)
                                        <td
                                            class="py-3 {{ $ci === 0 ? 'font-bold text-main' : 'text-green-500 font-bold' }}">
                                            {{ $cell }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- ══════ FINANCIALS (table 9) ══════ --}}
        @if ($finTable && count($finTable['rows'] ?? []) > 1)
            <div class="fu d4 bg-card border bdr rounded-2xl overflow-hidden mb-5">
                <div class="section-hdr px-5 py-3">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Company Financials
                        <span class="text-dim font-normal normal-case">(₹ Crore)</span>
                    </h2>
                </div>
                <div class="tbl-scroll">
                    <table class="w-full text-sm" style="min-width:500px">
                        <thead>
                            <tr class="tbl-head border-b bdr">
                                @foreach ($finTable['rows'][0] ?? [] as $hi => $th)
                                    <th
                                        class="px-5 py-3 {{ $hi === 0 ? 'text-left' : 'text-right' }} text-xs uppercase tracking-wider text-dim font-semibold">
                                        {{ $th }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($finTable['rows'], 1) as $row)
                                <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                    @foreach ($row as $ci => $cell)
                                        <td
                                            class="px-5 py-3.5
                                    {{ $ci === 0 ? 'font-semibold text-main text-left' : 'text-right' }}
                                    {{ $ci > 0 && is_numeric($cell) ? 'font-mono text-sub' : '' }}">
                                            {{ $cell }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- ══════ PEER COMPARISON ══════ --}}
        @if ($peer1 || $peer2)
            <div class="fu d4 grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                @if ($peer1 && count($peer1['rows'] ?? []) > 1)
                    <div class="bg-card border bdr rounded-2xl overflow-hidden">
                        <div class="section-hdr px-5 py-3">
                            <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Peer
                                Comparison — Valuation</h2>
                        </div>
                        <div class="tbl-scroll p-0">
                            <table class="w-full text-sm" style="min-width:320px">
                                <thead>
                                    <tr class="tbl-head border-b bdr">
                                        @foreach ($peer1['rows'][0] ?? [] as $hi => $th)
                                            <th
                                                class="px-4 py-3 {{ $hi === 0 ? 'text-left' : 'text-right' }} text-xs uppercase tracking-wider text-dim font-semibold">
                                                {{ $th }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (array_slice($peer1['rows'], 1) as $ri => $row)
                                        <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                            @foreach ($row as $ci => $cell)
                                                <td
                                                    class="px-4 py-3
                                            {{ $ci === 0 ? 'font-semibold text-main text-left' : 'text-right text-sub' }}
                                            {{ $ri === 0 && $ci === 0 ? 'text-green-500' : '' }}">
                                                    {{ $cell }}
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                @if ($peer2 && count($peer2['rows'] ?? []) > 1)
                    <div class="bg-card border bdr rounded-2xl overflow-hidden">
                        <div class="section-hdr px-5 py-3">
                            <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Peer
                                Comparison — Performance</h2>
                        </div>
                        <div class="tbl-scroll p-0">
                            <table class="w-full text-sm" style="min-width:320px">
                                <thead>
                                    <tr class="tbl-head border-b bdr">
                                        @foreach ($peer2['rows'][0] ?? [] as $hi => $th)
                                            <th
                                                class="px-4 py-3 {{ $hi === 0 ? 'text-left' : 'text-right' }} text-xs uppercase tracking-wider text-dim font-semibold">
                                                {{ $th }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (array_slice($peer2['rows'], 1) as $ri => $row)
                                        <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                            @foreach ($row as $ci => $cell)
                                                <td
                                                    class="px-4 py-3
                                            {{ $ci === 0 ? 'font-semibold text-main text-left' : 'text-right text-sub' }}
                                            {{ $ri === 0 && $ci === 0 ? 'text-green-500' : '' }}">
                                                    {{ $cell }}
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        @endif

        {{-- ══════ ABOUT + STRENGTH / WEAKNESS ══════ --}}
        <div class="fu d5 bg-card border bdr rounded-2xl p-5 mb-5">
            <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">About Company & Analysis
                </h2>
            </div>

            {{-- About text --}}
            @if ($aboutText)
                <div class="text-sm text-sub leading-relaxed mb-5 space-y-2">
                    @foreach (array_filter(explode("\n", wordwrap($aboutText, 300, "\n", true))) as $para)
                        @if (strlen(trim($para)) > 30)
                            <p>{{ trim($para) }}</p>
                        @endif
                    @endforeach
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                {{-- Strengths --}}
                <div class="bg-inner border bdr rounded-xl p-4">
                    <div class="flex items-center gap-2 mb-3">
                        <span
                            class="w-6 h-6 rounded-lg bg-green-500/20 flex items-center justify-center text-sm">💪</span>
                        <h3 class="font-display font-bold text-sm text-green-500 uppercase tracking-wider">Strengths
                        </h3>
                    </div>
                    @if (count($strengthPoints))
                        <ul class="space-y-3 text-sm text-sub">
                            @foreach ($strengthPoints as $pt)
                                <li class="flex gap-2">
                                    <span class="text-green-500 mt-0.5 flex-shrink-0">✓</span>
                                    <span><strong class="text-main">{{ $pt['title'] }}:</strong>
                                        {{ $pt['body'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-sm text-dim italic">Strength data not available.</p>
                    @endif
                </div>

                {{-- Weaknesses --}}
                <div class="bg-inner border bdr rounded-xl p-4">
                    <div class="flex items-center gap-2 mb-3">
                        <span
                            class="w-6 h-6 rounded-lg bg-red-500/20 flex items-center justify-center text-sm">⚠️</span>
                        <h3 class="font-display font-bold text-sm text-red-400 uppercase tracking-wider">Weaknesses
                        </h3>
                    </div>
                    @if (count($weaknessPoints))
                        <ul class="space-y-3 text-sm text-sub">
                            @foreach ($weaknessPoints as $pt)
                                <li class="flex gap-2">
                                    <span class="text-red-400 mt-0.5 flex-shrink-0">✗</span>
                                    <span><strong class="text-main">{{ $pt['title'] }}:</strong>
                                        {{ $pt['body'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-sm text-dim italic">Weakness data not available.</p>
                    @endif
                </div>
            </div>
        </div>

        {{-- ══════ REVIEWER TABLE (table 12) ══════ --}}
        @if ($reviewTable && count($reviewTable['rows'] ?? []) > 1)
            <div class="fu d5 bg-card border bdr rounded-2xl overflow-hidden mb-5">
                <div class="section-hdr px-5 py-3">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Analyst
                        Recommendations</h2>
                </div>
                <div class="tbl-scroll">
                    <table class="w-full text-sm" style="min-width:360px">
                        <thead>
                            <tr class="tbl-head border-b bdr">
                                @foreach ($reviewTable['rows'][0] ?? [] as $hi => $th)
                                    @if ($th !== 'File')
                                        <th
                                            class="px-5 py-3 text-left text-xs uppercase tracking-wider text-dim font-semibold">
                                            {{ $th }}</th>
                                    @endif
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($reviewTable['rows'], 1) as $row)
                                <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                    <td class="px-5 py-3 font-semibold text-main text-sm">{{ $row[0] ?? '' }}</td>
                                    <td class="px-5 py-3">
                                        @php
                                            $rec = strtolower($row[1] ?? '');
                                            $cls = str_contains($rec, 'apply')
                                                ? 'rec-apply'
                                                : (str_contains($rec, 'avoid')
                                                    ? 'rec-avoid'
                                                    : 'rec-neutral');
                                        @endphp
                                        <span
                                            class="px-2.5 py-1 rounded-full text-xs font-bold uppercase tracking-wide {{ $cls }}">{{ $row[1] ?? '—' }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- ══════ LEAD MANAGER + ADDRESS + REGISTRAR ══════ --}}
        <div class="fu d6 grid grid-cols-1 md:grid-cols-3 gap-5 mb-5">

            {{-- Lead Manager --}}
            <div class="bg-card border bdr rounded-2xl p-5">
                <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Lead Manager(s)</h2>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-lg bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-sm">🏛️</span>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-main">{{ $leadManager ?: '—' }}</p>
                        <p class="text-xs text-dim mt-1">Book Running Lead Manager</p>
                    </div>
                </div>
            </div>

            {{-- Address --}}
            <div class="bg-card border bdr rounded-2xl p-5">
                <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Company Address</h2>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-lg bg-orange-500/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-sm">📍</span>
                    </div>
                    <div class="text-xs text-sub space-y-0.5">
                        @php
                            // Parse address lines from div text
                            $addrLines = array_filter(
                                array_map(
                                    'trim',
                                    explode(
                                        "\n",
                                        str_replace(
                                            ['Address', 'E-Mail:', 'Website:', 'Phone:'],
                                            ["\n", '|E-Mail: ', '|Website: ', '|Phone: '],
                                            $addressDiv,
                                        ),
                                    ),
                                ),
                            );
                            $addrClean = [];
                            foreach ($addrLines as $l) {
                                $l = trim($l);
                                if ($l && strlen($l) > 2) {
                                    $addrClean[] = $l;
                                }
                            }
                        @endphp
                        @foreach (array_slice($addrClean, 0, 8) as $line)
                            @if (str_starts_with($line, '|E-Mail: '))
                                @php $em = trim(substr($line,9)); @endphp
                                <p><a href="mailto:{{ $em }}"
                                        class="text-green-500 hover:underline">{{ $em }}</a></p>
                            @elseif(str_starts_with($line, '|Website: '))
                                @php $wb = trim(substr($line,10)); @endphp
                                <p><a href="{{ $wb }}" target="_blank"
                                        class="text-green-500 hover:underline">{{ $wb }}</a></p>
                            @elseif(str_starts_with($line, '|Phone: '))
                                @php $ph = trim(substr($line,8)); @endphp
                                <p><a href="tel:{{ preg_replace('/\s/', '', $ph) }}"
                                        class="text-green-500 hover:underline">{{ $ph }}</a></p>
                            @else
                                <p>{{ $line }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Registrar --}}
            <div class="bg-card border bdr rounded-2xl p-5">
                <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Registrar</h2>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-lg bg-purple-500/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-sm">📋</span>
                    </div>
                    <div class="text-xs text-sub space-y-0.5">
                        @php
                            // Parse registrar info
                            $regLines = array_filter(
                                array_map('trim', preg_split('/\n|Phone:|Email:|Website:|Address:/', $registrarDiv)),
                            );
                            $regClean = [];
                            foreach ($regLines as $l) {
                                $l = trim($l, " \t\n\r:.,");
                                if ($l && strlen($l) > 2) {
                                    $regClean[] = $l;
                                }
                            }
                        @endphp
                        @foreach (array_slice($regClean, 0, 6) as $i => $line)
                            @if ($i === 0)
                                <p class="font-semibold text-main text-sm">{{ $line }}</p>
                            @elseif(str_contains($line, '@'))
                                <p><a href="mailto:{{ $line }}"
                                        class="text-green-500 hover:underline truncate block max-w-[160px]">{{ $line }}</a>
                                </p>
                            @elseif(str_contains($line, 'http') || str_contains($line, 'www'))
                                <p><a href="{{ $line }}" target="_blank"
                                        class="text-green-500 hover:underline">Check Allotment →</a></p>
                            @elseif(preg_match('/^\+?[\d\s\-]{8,}$/', $line))
                                <p><a href="tel:{{ preg_replace('/\s/', '', $line) }}"
                                        class="text-green-500 hover:underline">{{ $line }}</a></p>
                            @else
                                <p>{{ $line }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Back button --}}
        <div class="mt-2 mb-6">
            <a href="/"
                class="inline-flex items-center gap-2 text-sm text-dim hover:text-green-500 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Dashboard
            </a>
        </div>

    </main>

    <footer class="border-t bdr mt-4">
        <div class="max-w-7xl mx-auto px-4 py-5 flex items-center justify-between text-xs text-dim">
            <span class="font-display font-semibold text-sub">Prime IPO</span>
            <span>© {{ date('Y') }} · GMP data is indicative, not financial advice.</span>
        </div>
    </footer>

    <script>
        const toggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        const iconSun = document.getElementById('iconSun');
        const iconMoon = document.getElementById('iconMoon');

        function applyTheme(dark) {
            dark ? html.classList.add('dark') : html.classList.remove('dark');
            iconMoon.classList.toggle('hidden', !dark);
            iconSun.classList.toggle('hidden', dark);
        }
        applyTheme(false);
        toggle.addEventListener('change', () => applyTheme(toggle.checked));
    </script>
</body>

</html>
