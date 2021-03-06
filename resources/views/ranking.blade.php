@extends('template')

@section('titulo', 'RANKING BRASILEIRÃO')
@section('aba-titulo', 'RANKING')

@section('conteudo_principal')

<div class="standing">
    <div class="container">
        <div class="standing-list-cover">
            <div class="standing-team-list">
                <h4 class="result-title">LISTAGEM DE PONTUAÇÃO</h4>
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
                            <td scope="row">{{$competidores->id}}</td>
                            <td>
                                <span class="single-team">
                                <span class="logo">
                                    <img src="assets/img/team-1.png" alt="">
                                </span>
                                <span class="text">
                                    {{$competidores->nome}}
                                </span>
                                </span>
                            </td>
                            <td style="margin-right: 50px;"><span class="diff">{{$competidores->ponto}}</span></td>
                        </tr>
                    @endforeach
                </table>
             </div>
        </div>
    </div>
</div>

@endsection
