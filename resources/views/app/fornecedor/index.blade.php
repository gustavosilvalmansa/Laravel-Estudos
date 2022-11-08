{{-- Comentario --}}


@php
   //Bloco puro de PHP
@endphp 

{{--@dd($fornecedores)--}}

@if(count($fornecedores) > 0  && count($fornecedores)<10)
    <h1>Menos de 10</h1>
@elseif(count($fornecedores) >10)
    <h3> Mais de 10 </h3>
@else
    <h3>Nenhum fornecedor</h3>
@endif