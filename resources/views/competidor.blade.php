@extends('template')

@section('titulo', 'INFORMAÇÕES DO COMPETIDOR')
@section('aba-titulo', 'INFORMAÇÕES')

@section('conteudo_principal')

<div class="standing">
    <div class="container">
        <div class="standing-list-cover">
            <div class="standing-team-list">
                <h4 class="result-title">LISTA DE COMPETIDORES ORDEM ALFABÉTICA</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Equipe</th>
                        </tr>
                    </thead>
                    @foreach($competidor as $competidores)
                        <tr>
                            <td>
                            <a href="{{route('informacao.competidor')}}">
                                <span class="single-team">
                                <span class="logo">
                                    <img src="assets/img/team-1.png" alt="">
                                </span>
                                <span class="text">
                                <span class="diff"> {{$competidores->nome}}</span>
                                </span>
                                </span>
                            </a>
                            </td>
                            <td style="margin-right: 50px;">{{$competidores->descricao}}</td>
                        </tr>
                    @endforeach
                </table>
             </div>
        </div>
    </div>
</div>

@endsection