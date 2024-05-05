@props([
    'css' => '<link rel="stylesheet" href="' . asset('css/loginForm.css') . '">',
    'title' => 'Login',
])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! $css !!}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>{{ $title }}</title>

    @livewireStyles

    @vite('resources/css/filament/admin/theme.css')
    @if (request()->routeIs('app.home'))
    @vite('resources/js/app.js')
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >

{{ $slot }}
@livewire('notifications')
@livewireScripts
</body>

</html>
