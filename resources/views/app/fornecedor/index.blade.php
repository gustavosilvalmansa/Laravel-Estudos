{{-- Comentario --}}


@php
   //Bloco puro de PHP
@endphp 

{{-- Printa array @dd($fornecedores)--}}

{{-- Estrutura do comando IF
@if(count($fornecedores) > 0  && count($fornecedores)<10)
    <h1>Menos de 10</h1>
@elseif(count($fornecedores) >10)
    <h3> Mais de 10 </h3>
@else
    <h3>Nenhum fornecedor</h3>
@endif


Estrutura do comando unless
Fornecedor: {{$fornecedores[0]['Nome']}}
<br>
Fornecedor: {{$fornecedores[0]['Status']}}
<br>
@unless($fornecedores[0]['Status'] == 'S')
    Inativo
@endunless  

isset
@isset($fornecedores[0]['CNPJ'])
        CNPJ: {{$fornecedores[0]['CNPJ']}}

        @empty($fornecedores[0]['CNPJ'])
            - Vazio
        @endempty
    @endisset
--}}

@isset($fornecedores)

    Fornecedor: {{$fornecedores[0]['Nome']}}
    <br>
    Ativo: {{$fornecedores[0]['Status']}}
    <br>
    CNPJ: {{ $fornecedores[0]['CNPJ'] ?? ' VAZIO ' }}
    <br>
    TELEFONE ({{ $fornecedores[0]['DDD'] ?? '' }})  {{ $fornecedores[0]['TELEFONE'] ?? '' }}
    <br>
    @switch($fornecedores[0]['DDD'])
        @case('51')
            Porto Alegre - RS 
            @break
        @case('48')
            Florianopolis - SC
            @break
        @case('11')
            São Paulo - SP
            @break
        @default
            Indefinido   
    @endswitch
@endisset