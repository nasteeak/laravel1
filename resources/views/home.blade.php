<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>сайт</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brilliance" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16M1 8a7 7 0 0 0 7 7 3.5 3.5 0 1 0 0-7 3.5 3.5 0 1 1 0-7 7 7 0 0 0-7 7" />
            </svg>
        </div>
        <nav>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/array">Массивы</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <img src="{{ Vite::asset('resources/images/1.jpg') }}" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Rerum accusantium odit, eaque id porro ipsa doloribus doloremque 
            necessitatibus modi iure a suscipit amet quis quidem at asperiores 
            ullam natus voluptatibus?</p>
    </main>
    <footer>
        <p>$copy; Ахмалетдинова Анастасия Денисона 2026 г.</p>
    </footer>
</body>

</html>