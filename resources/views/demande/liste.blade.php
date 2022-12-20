@extends('template')

@section('title', 'Liste des demandes')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Liste des demandes</p>
                </blockquote>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">objet</th>
                                <th scope="col">Description</th>
                                <th scope="col">Statut</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($demandes as $demande)
                            <tr class="">
                                <td scope="row">{{$loop->index+1}}</td>
                                <td>{{ $demande->objet }}</td>
                                <td>{{ $demande->description }}</td>

                                <td>
                                   @if( $demande->statut ==1)
                                   <span class="badge rounded-pill text-bg-primary" >En attente</span>
                                   @elseif($demande->statut ==2)
                                     <span class="badge rounded-pill text-bg-warning" >En cours de traitement</span>
                                     @elseif($demande->statut ==3)
                                     <span class="badge rounded-pill text-bg-secondary" >Rejeté</span>
                                    @else
                                      <span class="badge rounded-pill text-bg-success" >Traité</span>
                                   @endif
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('demande.create') }}" class="btn btn-info">Faire une reclamation</a>

              </div>
            </div>
        </div>
    </div>
@endsection


