@component('mail::message')

# Nouvelle demande - {{$demande->objet}}

Bonjour administrateur  ,
Une nouvelle demande a été créée, voici les détails :
*Nom du client:*__{{$demande->user->name}}
*Objet:* __{{$demande->objet}}__
*Description:* __{{$demande->description}}__

@component('mail::button', ['url' => route('demande.show',compact('demande'))])
Afficher la demande
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
