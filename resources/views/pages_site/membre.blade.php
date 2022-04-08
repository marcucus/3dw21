@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Liste
@stop
@section('titre_contenu')
@stop
@section('contenu')
<h2> Infos Membre </h2>
<h3>
{{ $un_membre->prenom }} {{ $un_membre->nom }}
</h3>
@auth
<div class='h2'>
{{ $un_membre->adresse }}
</div>
@endauth
@guest
  <div class='h2'>
<a href="/login">Connectez-vous</a> pour voir l'adresse email de l'utilisateur
</div>
@endguest
@stop
@section('pied_page')
LicenceProServicetique 2022
@stop