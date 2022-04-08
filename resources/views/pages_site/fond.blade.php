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
    <ul>
  <li><a href="/membres">Accueil</a></li>
  <li><a href="/creer">Nouveau membre</a></li>
  @guest
  <li><a href="/login">Se connecter</a></li>
  <li><a href="/register">S'enregistrer</a></li>
  @endguest
  @auth
  <li><a href="/identite">Identité</a></li>
  <li><a href="/home">Profil</a></li>
  @endauth
</ul>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }
    </style>
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