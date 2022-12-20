<!--<div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0">

                </blockquote>


                 <div class="table-responsive-sm">
                <h3> Demandes en cours de traitement</h3>
                <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">objet</th>
                                <th scope="col">Description</th>
                                <th scope="col">Statut</th>
                                 <th scope="col">Administrateur en charge</th>

                            </tr>
                        </thead>
                        <tbody>

                @foreach ($encours as $encour)
                            <tr class="">

                                <td> {{( $encour->objet)}} </td>
                                <td>{{ $encour->description }}</td>
                                 <td><span class="badge rounded-pill text-bg-warning" >En cours de traitement</span>
                                </td>
                                <td>{{$encour->admin->name}}</td>




                            </tr>
                 @endforeach

                        </tbody>
                    </table>
                </div>
                      </div>
             </div>
            </div>
        </div>  <br><br><br>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0">

                </blockquote>

                 <div class="table-responsive-sm">
                <h3> Demandes traites</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">objet</th>
                                <th scope="col">Description</th>
                                <th scope="col">Statut</th>
                                 <th scope="col">Administrateur en charge</th>
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
                                <td>{{$traite->admin->name}}</td>


                                </tr>
                @endforeach
                        </tbody>
                    </table>
                </div>
    </div>
                      </div>
             </div>
            </div> <br><br><br>
        
      <div class="row">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                 <div class="table-responsive-sm">
                <h3> demandes rejetes</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>

                                <th scope="col">objet</th>
                                <th scope="col">Description</th>
                                <th scope="col">Statut</th>
                                <th scope="col">Administrateur en charge</th>
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
                                <td> {{$rejet->admin->name}}</td>
                                 </tr>

                 @endforeach
                        </tbody>
                    </table>
                </div>




              </div>
            </div>
        </div>
    </div>-->