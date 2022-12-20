
@extends('template')

@section('title', 'Tableau de bord')

@section('body')
<h1>Votre Tableau de bord</h1>
<h3>Resumé de l'etat de vos demandes:</h3> <br>
  <div class="container">
    <div class="row g-2">
    <div class="col -12 text-center">
        <!--nombres de demandes en attente :{{$enatt}}-->
        Nombres de demandes en cours de traitement: {{ $enc}} <br>
        Nombres de demandes traitees              : {{ $trait}} <br>
        Nombres de demandes rejetées              :{{$rej}} <br>

    </div>
    </div>
  </div> <br> <br>
    <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0">

                </blockquote>


                 <div class="table-responsive-sm">
                <h3> Demande en cours de traitement</h3>
                <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">objet</th>
                                <th scope="col">Description</th>
                                {{-- <th scope="col">Statut</th> --}}
                                <th scope="col">Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                @foreach ($encours as $encour)
                            <tr class="">

                                <td> {{( $encour->objet)}} </td>
                                <td>{{ $encour->description }}</td>
                                 {{-- <td><span class="badge rounded-pill text-bg-warning" >En cours de traitement</span>
                                </td> --}}
                                <td>
                                    <a href="/valider{{$encour->id}}" class="btn btn-primary">Valider</a>
                                    <a href="/rejet{{$encour->id}}" class="btn btn-danger">Rejeter</a>
                                </td>




                            </tr>
                 @endforeach

                        </tbody>
                    </table>
                </div>
                 <div class="table-responsive-sm">
                <h3> Demandes traites</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">objet</th>
                                <th scope="col">Description</th>
                                <th scope="col">Statut</th>
                            </tr>
                        </thead>
                        <tbody>

                @foreach ( $traites as  $traite)
                            <tr class="">

                                <td> {{( $traite->objet)}} </td>
                                <td>{{ $traite->description }}</td>
                                 <td>

                                   <span class="badge rounded-pill text-bg-success" >Traité</span>
                                </td>


                                </tr>
                @endforeach
                        </tbody>
                    </table>
                </div>
                 <div class="table-responsive-sm">
                <h3> demandes rejetes</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">objet</th>
                                <th scope="col">Description</th>
                                <th scope="col">Statut</th>
                            </tr>
                        </thead>
                        <tbody>

                @foreach ($rejets as $rejet)
                            <tr class="">

                                <td> {{ $rejet->objet}} </td>
                                <td>{{ $rejet->description }}</td>
                                 <td>

                                   <span class="badge rounded-pill text-bg-secondary" >Rejeté</span>
                                </td>
                                 </tr>

                 @endforeach
                        </tbody>
                    </table>
                </div>




              </div>
            </div>
        </div>
    </div> <br> <br> <br>

    <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0">

                </blockquote>
 <div class="table-responsive-sm">
                <h3> demande en attente</h3>
                <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">objet</th>
                                <th scope="col">Description</th>
                                <th scope="col">Statut</th>
                                 <th scope="col">Details</th>

                            </tr>
                        </thead>
                        <tbody>

                @foreach ($demandes as $demande)
                            <tr class="">
                                <td> {{ $demande->objet}} </td>
                                <td>{{ $demande->description }}</td>

                                 <td>
                                    <span class="badge rounded-pill text-bg-secondary" >en attente</span>
                                </td>
                                <td>
                                  <a href="{{ route('demande.show',compact('demande')) }}" class="btn btn-warning">Voir</a>
                                </td>





                            </tr>

                 @endforeach
                        </tbody>
                    </table>
                </div>
             </div>
            </div>
        </div>
    </div>
@endsection


