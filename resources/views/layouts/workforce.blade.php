<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>@yield('title', 'Workforce') — Xspaceweb</title>
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config={theme:{extend:{colors:{ink:'#0B1220',brand:'#2563EB'},fontFamily:{sans:['Inter','system-ui','sans-serif'],display:['"Plus Jakarta Sans"','Inter','sans-serif']},boxShadow:{soft:'0 1px 3px rgba(15,23,42,.06)'}}}};
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
<link rel="stylesheet" href="{{ asset('css/workforce.css') }}">
</head>
<body class="bg-[#F6F8FB] text-slate-800 font-sans antialiased">
@yield('shell')
<div id="modal-root"></div>
@yield('scripts')
<script src="{{ asset('js/interactions.js') }}"></script>
</body>
</html>
