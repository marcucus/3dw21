<!DOCTYPE html>
<html>
    <head>
    <!-- Licence Pro Servicetique -->
    <link rel='stylesheet' href='css/mon_style.css'>
    @yield('entete')
    <title>
    @yield('titre')
    </title>
    </head>
    <body>
        <div class="container">
        <div class="titre_contenu">
        @yield('titre_contenu')
        </div>
        <div class="contenu">
        @yield('contenu')
        </div>
        <div class="pied_page">@yield('pied_page')</div>
        </div>
    </body>
</html>