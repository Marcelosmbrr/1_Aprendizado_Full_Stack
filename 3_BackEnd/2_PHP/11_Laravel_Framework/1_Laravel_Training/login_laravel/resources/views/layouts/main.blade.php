<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fonts - Roboto -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Folha de estilo do layout -->
        <link rel="stylesheet" href="assets/css/layout.css">

        <!-- Folha de estilo variável da view -->
        <link rel= "stylesheet" href = "assets/css/@yield("style_file")">
        <title>Aprendendo Laravel</title>
    </head>
    <body>
        <header class = "layout_header">

            <h1><img src="assets/img/laravel-logo.png" alt="Laravel Logo" width="230px"></h1>
            
        </header>

        <section class = "layout_section">
            @yield("content")
        </section>

        <footer class = "layout_footer">
            <p>Aprendendo Laravel &copy; 2021</p>
        </footer>
    </body>
</html>
