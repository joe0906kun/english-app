<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? '英語学習アプリ' }}</title>
    @stack('css')
</head>

<body class="bg-gray-100">
    <nav class="bg-white p-6">
        <div class="flex justify-between">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-6 py-3 rounded bg-blue-500 text-white">ログアウト</button>
            </form>
        </div>
    </nav>

    <div class="p-6">
        {{ $slot }}
    </div>
</body>

</html>
