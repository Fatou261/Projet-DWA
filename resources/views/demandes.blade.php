@extends('template')

@section('title', 'Tableau de bord')

@section('body')
<h2>Récapitulatif des demandes</h2>
<div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0"></blockquote>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>



       <th style="background-color:grey; color:white; " class="text-center"> Nombres de demandes en attente  </th>
              <th style="background-color:rgb(0, 76, 255); color:white; "> Nombres de demandes en cours de traitement</th>
       <th  style="background-color:green; color:white; " class="text-center"> Nombres de demandes traitees </th>
        <th style="background-color:rgb(249, 5, 22); color:white; ">Nombres de demandes rejetées </th>

        </tr>
                        </thead>
        <tbody>
            <td style="background-color:grey; color:white; ">{{$demandes}}</td>
            <td style="background-color:rgb(0, 76, 255); color:white; ">{{ $encours}}</td>
            <td style="background-color:green; color:white;"> {{ $traites}}</td>
            <td style="background-color:rgb(249, 5, 22); color:white; ">{{$rejets}}</td>


     </tbody>
                    </table>
                </div>


                </div>

            </div>
        </div>
     </div> <br> <br>




<h4> Administrateur Awa Thiare</h4>


<div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0"></blockquote>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>


                                <th scope="col">nombre de demandes en cours de taitement</th>
                                <th scope="col">nombre de demandes rejetées</th>
                                 <th scope="col">nombre de demandes traitées</th>

                            </tr>
                        </thead>
                        <tbody>


                                 <td>{{ $enc}}</td>
                                  <td>{{$rej}}</td>
                                   <td>{{$trait}}</td>

                        </tbody>
                    </table>
                </div>


                </div>

            </div>
        </div>
     </div> <br> <br>


<h4> Administrateur Fatou Dieye</h4>


<div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0"></blockquote>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>


                                <th scope="col">nombre de demandes en cours de taitement</th>
                                <th scope="col">nombre de demandes rejetées</th>
                                 <th scope="col">nombre de demandes traitées</th>

                            </tr>
                        </thead>
                        <tbody>


                                 <td>{{ $ence}}</td>
                                  <td>{{$reje}}</td>
                                   <td>{{$traite}}</td>

                        </tbody>
                    </table>
                </div>


                </div>

            </div>
        </div>
     </div> <br> <br>



<h4> Administrateur Khady Diop</h4>


<div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0"></blockquote>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>


                                <th scope="col">nombre de demandes en cours de taitement</th>
                                <th scope="col">nombre de demandes rejetées</th>
                                 <th scope="col">nombre de demandes traitées</th>

                            </tr>
                        </thead>
                        <tbody>


                                 <td>{{ $ences}}</td>
                                  <td>{{$rejes}}</td>
                                   <td>{{$traits}}</td>

                        </tbody>
                    </table>
                </div>


                </div>

            </div>
        </div>
     </div>





@endsection
