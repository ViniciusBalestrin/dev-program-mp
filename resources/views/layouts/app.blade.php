<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/js/app.js')

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script src="https://www.mercadopago.com/v2/security.js" view="home"></script>
    <script src="https://www.mercadopago.com/v2/security.js" view="checkout" output="deviceId"></script>
</head>
<body>
    <header>
        <!-- Seu cabeçalho aqui -->
        <h1>Meu Cabeçalho</h1>
        <nav>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <!-- Adicione outros links conforme necessário -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
