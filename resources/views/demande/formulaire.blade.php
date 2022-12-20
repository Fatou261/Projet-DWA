@extends('template')

@section('title', 'Formulaire de reclamation')

@section('body') <br> <br>
    <div class="container">
        <div class="row g-2">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulaire d'ajout d'une demande</h4>
                        <form action="{{ route('demande.store') }}" method="POST">
                            @csrf
                            <div class="row">
                             <!--<div class="col-12 col-md-6">
                                <div class="mb-3">
                                     <label for="nom" class="form-label">Nom Complet</label>
                                        <input type="text" class="form-control" name="nom" id="nom"
                                            aria-describedby="helpNomId" placeholder="Saisisser votre nom">
                                </div>
                                </div>-->
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="objet" class="form-label">Objet</label>
                                        <input type="text" class="form-control" name="objet" id="objet"
                                            aria-describedby="helpNomId" placeholder="Objet de la demande">
                                    </div>
                                </div>
                               
                                <!--<div class="col-12 col-md-6">
                                <div class="mb-3">
                                     <label for="mail" class="form-label">Adresse mail</label>
                                        <input type="text" class="form-control" name="mail" id="mail"
                                            aria-describedby="helpNomId" placeholder="Saisisser votre adresse email">
                                </div>
                                </div>-->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="reset" class="btn btn-secondary">Reinitialiser</button>
                                    <button type="submit" class="btn btn-primary">Soumettre la demande</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection