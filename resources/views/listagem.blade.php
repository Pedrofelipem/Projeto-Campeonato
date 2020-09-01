@extends('template')

@section('titulo', 'lISTAGEM BRASILEIRÃO')
@section('aba-titulo', 'lISTAGEM')
@section('conteudo_principal')

<div class="standing">
    <div class="container">
        <div class="standing-list-cover">
            <div class="standing-team-list">
                <h4 class="result-title">LISTA DE COMPETIDORES ORDEM ALFABÉTICA</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Equipe</th>
                            <th scope="col">Pontos</th>
                        </tr>
                    </thead>
                    @foreach($competidor as $competidores)
                        <tr>
                            <td>{{$competidores->id}}</td>
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
                            <td style="margin-right: 50px;">{{$competidores->ponto}}</td>
                        </tr>
                    @endforeach
                </table>
             </div>
        </div>
    </div>
</div>

@endsection