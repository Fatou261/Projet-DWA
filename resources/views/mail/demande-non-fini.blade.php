@component('mail::message')

# Rappel pour la demande - {{$demande->objet}}

Bonjour administrateur  ,
Ceci est un rappel pour la demande non traitée suivante :
*Nom du client:*__{{$demande->user->name}}
*Objet:* __{{$demande->objet}}__
*Description:* __{{$demande->description}}__

@component('mail::button', ['url' => route('demande.show',compact('demande'))])
Afficher la demande
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
