@extends('template')

@section('titulo', 'lISTAGEM BRASILEIRÃO')
@section('aba-titulo', 'lISTAGEM')
@section('conteudo_principal')


<div class="standing">
    <div class="container">
        <div class="standing-list-cover">
            <div class="standing-team-list">
                <h4 class="result-title">LISTA DE COMPETIDORES ORDEM FALBÉTICA</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Equipe</th>
                            <th scope="col">Pontos</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="single-team">
                                <span class="logo">
                                    <img src="assets/img/team-1.png" alt="">
                                </span>
                                <span class="text">
                                    Khulna Tigers
                                </span>
                                </span>
                            </td>
                            <td style="margin-right: 50px;">103</td>
                        </tr>
                </table>
             </div>
        </div>
    </div>
</div>






@endsection