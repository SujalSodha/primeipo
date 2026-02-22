<!DOCTYPE html>
<html lang="en" >

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

        input[type=text]:focus {
            outline: none;
            border-color: #22c55e !important;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, .15)
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

        /* stat pill */
        .stat-pill {
            transition: all .2s
        }

        .stat-pill:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, .15)
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
                {{-- breadcrumb --}}
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

        {{-- ══════ HERO SECTION ══════ --}}
        @php
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

            // IPO details table3
            $details = [];
            foreach ($data['tables'][3]['rows'] ?? [] as $row) {
                if (isset($row[0], $row[1])) {
                    $details[$row[0]] = $row[1];
                }
            }

            // status guess from dates (simple)
            $status = 'upcoming';
        @endphp

        <div class="fu grid grid-cols-1 lg:grid-cols-3 gap-5 mb-6">

            {{-- Left: Company card --}}
            <div class="lg:col-span-1">
                <div class="bg-card border bdr rounded-2xl overflow-hidden h-full">
                    {{-- Top gradient strip --}}
                    <div class="h-1.5 bg-gradient-to-r from-green-500 to-emerald-400"></div>
                    <div class="p-5">
                        {{-- Logo + name --}}
                        <div class="flex flex-col items-center text-center mb-5">
                            @php $iconUrl = "https://assets.ipopremium.in/images/ipo/{$data['id']}.png"; @endphp
                            <div
                                class="w-20 h-20 rounded-2xl bg-inner border bdr flex items-center justify-center mb-3 overflow-hidden">
                                <img src="{{ $iconUrl }}" alt="{{ $data['h1'] }}"
                                    class="w-full h-full object-contain p-1"
                                    onerror="this.parentElement.innerHTML='<span class=\'font-display font-bold text-2xl text-green-500\'>{{ substr($data['h1'] ?? 'I', 0, 1) }}</span>'">
                            </div>
                            <h1 class="font-display font-bold text-lg text-main leading-tight">{{ $data['h1'] ?? '—' }}
                            </h1>
                            <p class="text-xs text-dim mt-1">Feb 26, 2026 – Mar 2, 2026</p>
                            <span
                                class="mt-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide badge-upcoming">Upcoming</span>
                        </div>

                        {{-- Key stats --}}
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

            {{-- Right: Quick stats grid + IPO details --}}
            <div class="lg:col-span-2 space-y-5">

                {{-- Quick KPI pills --}}
                @php
                    $kpiRows = $data['tables'][5]['rows'] ?? [];
                    $kpiHeaders = $kpiRows[0] ?? [];
                    $kpiData = array_slice($kpiRows, 1);
                @endphp
                @if (count($kpiData))
                    <div class="bg-card border bdr rounded-2xl p-5">
                        <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                            <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Key
                                Performance Indicators</h2>
                        </div>
                        <div class="grid grid-cols-3 gap-3">
                            @foreach ($kpiData as $kRow)
                                <div class="kpi-card rounded-xl p-3 stat-pill">
                                    <div class="text-dim text-xs mb-2 font-semibold uppercase tracking-wider">
                                        {{ $kRow[0] ?? '' }}</div>
                                    @foreach (array_slice($kpiHeaders, 1) as $hi => $hLabel)
                                        <div class="flex items-center justify-between mt-1">
                                            <span class="text-xs text-dim">{{ $hLabel }}</span>
                                            <span
                                                class="text-sm font-bold text-green-500">{{ $kRow[$hi + 1] ?? '—' }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- IPO Details table --}}
                <div class="bg-card border bdr rounded-2xl p-5">
                    <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                        <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">IPO Details</h2>
                    </div>
                    <div class="tbl-scroll">
                        <table class="w-full text-sm" style="min-width:400px">
                            @foreach ($details as $key => $val)
                                <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                    <td class="py-2.5 pr-4 text-dim text-xs font-semibold w-1/2">{{ $key }}
                                    </td>
                                    <td class="py-2.5 text-main text-sm font-medium">{{ $val }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- ══════ LOT DISTRIBUTION ══════ --}}
        @php $lotTable = $data['tables'][1] ?? null; @endphp
        @if ($lotTable)
            <div class="fu d1 bg-card border bdr rounded-2xl overflow-hidden mb-5">
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
                                            class="px-5 py-3.5 {{ $ci === 0 ? 'font-semibold text-main' : 'text-sub' }}
                            {{ $ci === 3 ? 'font-mono text-green-500' : '' }}">
                                            @if ($ci === 3)
                                                ₹{{ number_format((int) $cell) }}
                                            @else
                                                {{ $cell }}
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

        {{-- ══════ 2-COL: RESERVATION + IPO RESERVATION ══════ --}}
        <div class="fu d2 grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">

            {{-- Simple reservation --}}
            @php $resTable = $data['tables'][2] ?? null; @endphp
            @if ($resTable)
                <div class="bg-card border bdr rounded-2xl overflow-hidden">
                    <div class="section-hdr px-5 py-3">
                        <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Category
                            Reservation</h2>
                    </div>
                    <div class="p-5">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b bdr">
                                    @foreach ($resTable['rows'][0] ?? [] as $th)
                                        <th
                                            class="pb-3 text-left text-xs uppercase tracking-wider text-dim font-semibold">
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

            {{-- Investor category reservation --}}
            @php $ipoResTable = $data['tables'][4] ?? null; @endphp
            @if ($ipoResTable)
                <div class="bg-card border bdr rounded-2xl overflow-hidden">
                    <div class="section-hdr px-5 py-3">
                        <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">IPO Reservation
                        </h2>
                    </div>
                    <div class="p-5">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b bdr">
                                    @foreach ($ipoResTable['rows'][0] ?? [] as $th)
                                        <th
                                            class="pb-3 text-left text-xs uppercase tracking-wider text-dim font-semibold">
                                            {{ $th }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($ipoResTable['rows'], 1) as $row)
                                    <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                        <td class="py-3 font-semibold text-main text-sm">{{ $row[0] ?? '' }}</td>
                                        <td class="py-3 text-sub text-sm">{{ $row[1] ?? '' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>

        {{-- ══════ FINANCIALS ══════ --}}
        @php $finTable = $data['tables'][6] ?? null; @endphp
        @if ($finTable)
            <div class="fu d3 bg-card border bdr rounded-2xl overflow-hidden mb-5">
                <div class="section-hdr px-5 py-3">
                    <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Company Financials
                        <span class="text-dim font-normal normal-case">(₹ Crore)</span></h2>
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
                                            class="px-5 py-3.5 {{ $ci === 0 ? 'font-semibold text-main text-left' : 'text-right' }}
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
        <div class="fu d4 grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
            @php
                $peer1 = $data['tables'][7] ?? null;
                $peer2 = $data['tables'][8] ?? null;
            @endphp

            @if ($peer1)
                <div class="bg-card border bdr rounded-2xl overflow-hidden">
                    <div class="section-hdr px-5 py-3">
                        <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Peer Comparison —
                            Valuation</h2>
                    </div>
                    <div class="tbl-scroll p-0">
                        <table class="w-full text-sm" style="min-width:380px">
                            <thead>
                                <tr class="tbl-head border-b bdr">
                                    @foreach ($peer1['rows'][0] ?? [] as $hi => $th)
                                        <th
                                            class="px-5 py-3 {{ $hi === 0 ? 'text-left' : 'text-right' }} text-xs uppercase tracking-wider text-dim font-semibold">
                                            {{ $th }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($peer1['rows'], 1) as $ri => $row)
                                    <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                        @foreach ($row as $ci => $cell)
                                            <td
                                                class="px-5 py-3.5 {{ $ci === 0 ? 'font-semibold text-main text-left' : 'text-right text-sub' }}
                                {{ $ri === 0 && $ci === 0 ? 'text-green-500' : '' }}">
                                                {{ $cell }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            @if ($peer2)
                <div class="bg-card border bdr rounded-2xl overflow-hidden">
                    <div class="section-hdr px-5 py-3">
                        <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">Peer Comparison —
                            Performance</h2>
                    </div>
                    <div class="tbl-scroll p-0">
                        <table class="w-full text-sm" style="min-width:380px">
                            <thead>
                                <tr class="tbl-head border-b bdr">
                                    @foreach ($peer2['rows'][0] ?? [] as $hi => $th)
                                        <th
                                            class="px-5 py-3 {{ $hi === 0 ? 'text-left' : 'text-right' }} text-xs uppercase tracking-wider text-dim font-semibold">
                                            {{ $th }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($peer2['rows'], 1) as $ri => $row)
                                    <tr class="tbl-row border-b bdr last:border-0 transition-colors">
                                        @foreach ($row as $ci => $cell)
                                            <td
                                                class="px-5 py-3.5 {{ $ci === 0 ? 'font-semibold text-main text-left' : 'text-right text-sub' }}
                                {{ $ri === 0 && $ci === 0 ? 'text-green-500' : '' }}">
                                                {{ $cell }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>

        {{-- ══════ STRENGTH & WEAKNESS ══════ --}}
        @php
            // Extract strength / weakness text from divs
            $strengthText = '';
            $weaknessText = '';
            $foundStrength = false;
            $foundWeakness = false;
            foreach ($data['all_divs_with_class'] ?? [] as $div) {
                if (str_contains($div['text'] ?? '', 'Strength') && str_contains($div['class'], 'col-12')) {
                    $strengthText = $div['text'];
                    $foundStrength = true;
                }
            }
        @endphp

        {{-- ══════ ABOUT + STRENGTH/WEAKNESS (from div text) ══════ --}}
        <div class="fu d5 bg-card border bdr rounded-2xl p-5 mb-5">
            <div class="section-hdr px-3 py-2 rounded-lg mb-4">
                <h2 class="font-display font-bold text-sm text-main uppercase tracking-wider">About Company & Analysis
                </h2>
            </div>

            @php
                // Parse strength and weakness from the content div
                $contentDiv = '';
                foreach ($data['all_divs_with_class'] ?? [] as $div) {
                    if ($div['class'] === 'col-12' && str_contains($div['text'] ?? '', 'Strength')) {
                        $contentDiv = $div['text'];
                        break;
                    }
                }
                // Split by Strength / Weakness
                $parts = preg_split('/(Strength|Weakness)/', $contentDiv, -1, PREG_SPLIT_DELIM_CAPTURE);
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                {{-- Strengths --}}
                <div class="bg-inner border bdr rounded-xl p-4">
                    <div class="flex items-center gap-2 mb-3">
                        <span
                            class="w-6 h-6 rounded-lg bg-green-500/20 flex items-center justify-center text-sm">💪</span>
                        <h3 class="font-display font-bold text-sm text-green-500 uppercase tracking-wider">Strengths
                        </h3>
                    </div>
                    <ul class="space-y-2.5 text-sm text-sub">
                        <li class="flex gap-2"><span class="text-green-500 mt-0.5 flex-shrink-0">✓</span>Asset-light
                            and licensing-driven model minimizes capex via licensing partnerships and outsourced
                            manufacturing.</li>
                        <li class="flex gap-2"><span class="text-green-500 mt-0.5 flex-shrink-0">✓</span>Dual-country
                            supply chain advantage reduces dependency on a single geography.</li>
                        <li class="flex gap-2"><span class="text-green-500 mt-0.5 flex-shrink-0">✓</span>Strong IP
                            portfolio with brands like Pugs at Play, Furry Pals, Gurliez, Fanster, and Beezy Kits.</li>
                        <li class="flex gap-2"><span class="text-green-500 mt-0.5 flex-shrink-0">✓</span>Pan-India
                            distribution network across urban and semi-urban markets with Amazon/Flipkart presence.</li>
                    </ul>
                </div>

                {{-- Weaknesses --}}
                <div class="bg-inner border bdr rounded-xl p-4">
                    <div class="flex items-center gap-2 mb-3">
                        <span
                            class="w-6 h-6 rounded-lg bg-red-500/20 flex items-center justify-center text-sm">⚠️</span>
                        <h3 class="font-display font-bold text-sm text-red-400 uppercase tracking-wider">Weaknesses
                        </h3>
                    </div>
                    <ul class="space-y-2.5 text-sm text-sub">
                        <li class="flex gap-2"><span class="text-red-400 mt-0.5 flex-shrink-0">✗</span>Customer
                            concentration risk — significant portion of revenue from key customers.</li>
                        <li class="flex gap-2"><span class="text-red-400 mt-0.5 flex-shrink-0">✗</span>Small team of
                            34 employees may limit scalability in high-growth scenarios.</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- ══════ LEAD MANAGER + ADDRESS + REGISTRAR ══════ --}}
        @php
            // Parse address and registrar from divs
            $addressText = '';
            $registrarText = '';
            $leadManager = '';
            foreach ($data['all_divs_with_class'] ?? [] as $div) {
                if ($div['class'] === 'card-body' && str_contains($div['text'] ?? '', 'Capitalsquare')) {
                    $leadManager = trim($div['text']);
                }
                if (
                    $div['class'] === 'card-body' &&
                    str_contains($div['text'] ?? '', 'Striders Impex Ltd.') &&
                    str_contains($div['text'], 'Mumbai')
                ) {
                    $addressText = trim($div['text']);
                }
                if ($div['class'] === 'card-body' && str_contains($div['text'] ?? '', 'MUFG')) {
                    $registrarText = trim($div['text']);
                }
            }
        @endphp

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
                        <p class="text-sm font-semibold text-main">
                            {{ $leadManager ?: 'Capitalsquare Advisors Private Limited' }}</p>
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
                        <p class="font-semibold text-main text-sm">Striders Impex Ltd.</p>
                        <p>14th Floor, Office No. 1406 & 1407</p>
                        <p>Ajmera Sikova Industrial Marg, LBS Marg</p>
                        <p>Ghatkopar(W), Mumbai, Maharashtra 400086</p>
                        <p class="mt-1.5"><a href="tel:02240158212"
                                class="text-green-500 hover:underline">022-40158212</a></p>
                        <p><a href="mailto:cs@striders.biz" class="text-green-500 hover:underline">cs@striders.biz</a>
                        </p>
                        <p><a href="https://www.striders.biz/" target="_blank"
                                class="text-green-500 hover:underline">www.striders.biz</a></p>
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
                        <p class="font-semibold text-main text-sm">MUFG Intime India Pvt. Ltd.</p>
                        <p class="text-dim">(Link Intime)</p>
                        <p class="mt-1.5"><a href="tel:+912249186270" class="text-green-500 hover:underline">+91 22
                                4918 6270</a></p>
                        <p><a href="mailto:stridersimpex.smeipo@in.mpms.mufg.com"
                                class="text-green-500 hover:underline truncate block">stridersimpex.smeipo@...</a></p>
                        <p><a href="https://in.mpms.mufg.com/Initial_Offer/public-issues.html" target="_blank"
                                class="text-green-500 hover:underline">Check Allotment →</a></p>
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
            if (dark) {
                html.classList.add('dark');
                iconMoon.classList.remove('hidden');
                iconSun.classList.add('hidden');
            } else {
                html.classList.remove('dark');
                iconSun.classList.remove('hidden');
                iconMoon.classList.add('hidden');
            }
        }
        applyTheme(false);
        toggle.addEventListener('change', () => applyTheme(toggle.checked));
    </script>
</body>

</html>
