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
     @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{$fornecedores[$i]['Nome']}}
        <br>
        Ativo: {{$fornecedores[$i]['Status']}}
        <br>
        CNPJ: {{ $fornecedores[$i]['CNPJ'] ?? ' VAZIO ' }}
        <br>
        TELEFONE ({{ $fornecedores[$i]['DDD'] ?? '' }})  {{ $fornecedores[$i]['TELEFONE'] ?? '' }}
        <br>
        @switch($fornecedores[$i]['DDD'])
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
        <hr>
    @endfor
--}}

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual {{ $loop ->iteration }}
        <br>
        Fornecedor: @{{ $fornecedor['Nome'] }}
        <br>
        Fornecedor: {{$fornecedor['Nome']}}
        <br>
        Ativo: {{$fornecedor['Status']}}
        <br>
        CNPJ: {{ $fornecedor['CNPJ'] ?? ' VAZIO ' }}
        <br>
        TELEFONE ({{ $fornecedor['DDD'] ?? '' }})  {{ $fornecedor['TELEFONE'] ?? '' }}
        <br>
        @switch($fornecedor['DDD'])
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
        <hr>
    @empty
    Vazio

    @endforelse
@endisset


