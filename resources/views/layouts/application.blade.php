<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rodrigo Fuentealba Cartes - @yield("title")</title>
        <meta name="author" content="Rodrigo Fuentealba Cartes">
        <meta name="description" content="My Homepage">
        @vite("resources/js/app.js")
    </head>
    <body>
        <div class="w-full mx-auto flex flex-col h-screen items-center">
            <header class="container w-full">
                @include("partials/header")
            </header>
            <nav class="w-full">
                @include("partials/nav")
            </nav>
            <main class="container mx-auto w-2/3 grow">
                @yield("content")
            </main>
            <footer class="w-full">
                @include("partials/footer")
            </footer>
        </div>
    </body>
</html>
