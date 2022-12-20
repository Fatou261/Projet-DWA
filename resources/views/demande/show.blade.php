
@extends('template')

@section('title', 'Détails de la demande ')

@section('body')

    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Demande faite par :
                    {{$demande->user->name}}
            </h4>



            <p class="card-text">Description:  {{ $demande->description }}</p>
            <p class="card-text">Objet:  {{ $demande->objet }}</p>
            <p class="card-text">Statut:  {{ $demande->statut }} </p> <br>
            <a href="/alouer{{$demande->id}}" class="btn btn-primary">Traiter la demande</a>
            <a href="/rejet{{$demande->id}}" class="btn btn-danger">Rejeter</a>


        </div>

    </div>

@endsection
