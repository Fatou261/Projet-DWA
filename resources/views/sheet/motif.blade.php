
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

            <form action="/motif{{$demande->id}}">
                @csrf
                <div class="col-12">
                    <div class="mb-3">
                        <label for="motif" class="form-label">Motif du rejet</label>
                        <textarea class="form-control" name="motif" rows="2" ></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button type="reset" class="btn btn-secondary">Vider</button>
                    <button type="submit" class="btn btn-danger">Rejetter</button>
                </div>
            </form>


        </div>

    </div>

@endsection
