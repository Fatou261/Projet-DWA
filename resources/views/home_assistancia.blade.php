@extends('layouts.app')

<!--@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenu  <span>Assistancia</span></h1>
          <h2>Voici la liste et l'etat de toutes les demandes effectuées  <span></span></h2>
            <a href="{{route('assistancia.index')}}" class="btn-book animated fadeInUp scrollto">DEMANDES</a>
            <a href="{{route('admin.create')}}" class="btn-book animated fadeInUp scrollto">Ajouter un administrateur</a>


          <!--<div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>-->
        </div>


      </div>
    </div>
  </section>

<main id="main">
