@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Club des Usagers de l'Espace galactique
@stop
@section('titre_contenu')
Liste des membres
@stop
@section('contenu')
@if(Auth::user()->isAdmin == 1)
<div class="contain">
<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Rôle</th>
      <th scope="col">Approuvé</th>
      <th scope="col">Outil</th>
    </tr>
</thead>
<tbody>
@foreach ($les_users as $user)
<h3>
        <tr>
            <td>
                {{ $user->id }}
            </td>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                <form action="admin/approuveadmin/{{$user->id}}" method="get">
                @if($user->isAdmin == 0)
                <input type="submit" value="Donner rôle admin"> 
                @endif
                @if($user->isAdmin == 1)
                <input type="submit" value="Enlever rôle admin"> 
                @endif
                </form>
            </td>
            <td>
                <form action="admin/verify/{{$user->id}}" method="get">
                @if($user->isVerified == 0)
                
                    <input type="submit" value="Approuver l'utilisateur"> 
                
                @endif
                @if($user->isVerified == 1)
                    <input type="submit" value="Dé-approuver l'utilisateur"> 
                @endif
            </form>
            </td>
            <td>
                <form action="admin/delete/{{$user->id}}" method="get">
                <input type="submit" value="Supprimer l'utilisateur"> 
                </form>
            </td>
        </tr>
</h3>
@auth
<div class='h2'>
{{ $user->adresse }}
</div>
@endauth
@endforeach
</tbody>
</table>
</div>
@endif
@stop
@section('pied_page')
LicenceProServicetique 2022
@stop