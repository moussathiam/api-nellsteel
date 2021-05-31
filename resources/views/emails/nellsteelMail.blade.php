@component('mail::message')
# {{ $details['title'] }}




@component('mail::table')
| Produits      | Type          | Quantite |
| ------------- |:-------------:| --------:|
@foreach ($produits as $produit)
| {{ $produit['nom'] }}     | {{ $produit['type'] }}        |  {{ $produit['quantite'] }}     |
    
@endforeach
@endcomponent



{{-- @component('mail::button',['url' => $details['url']])
Button Text
@endcomponent --}}

Merci,<br>
{{ config('app.name') }}
@endcomponent
