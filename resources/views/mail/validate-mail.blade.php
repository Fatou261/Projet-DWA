@component('mail::message')

# Reclamation traitee avec succes

Bonjour votre reclamation a ete traitee avec succes
Voici les détails :
*Objet:* __{{$demande->objet}}__
*Description:* __{{$demande->description}}__

@component('mail::button', ['url' => route('demande.show',compact('demande'))])
Afficher la demande
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
