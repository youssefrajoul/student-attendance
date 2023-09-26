<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Students</title>
</head>
<body class="grid-container">
    <header >
        <h2>Students - Home</h2>
    </header>
    <aside>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/form">Add new student</a>
            </li>
            <li>
                <a href="/delete">Delete student</a>
            </li>
    
        </ul>
    </aside>
    <main>
        @yield('content')
    </main>
    <footer>
        <h4>56060 | 59939 | JLC</h4>
    </footer>
</body>
</html>
