@component('mail::message')

# Rejet de Reclamation

Bonjour votre reclamation a ete rejetee,
Voici les détails :
*Objet:* __{{$demande->objet}}__
*Description:* __{{$demande->description}}__
*Motif:* __{{$motif}}__

@component('mail::button', ['url' => route('demande.show',compact('demande'))])
Afficher la demande
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
