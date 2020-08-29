@extends('template')

@section('titulo', 'CADASTRAR COMPETIDOR')
@section('aba-titulo', 'CRIAR COMPETIDOR')
@section('conteudo_principal')


        <div class="register">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-8">
                        <div class="section-title">
                            <h2>REGISTRE-SE PARA PREVER AGORA</h2>
                            <p> Brasileirão e Série A, é a liga brasileira de futebol profissional entre clubes do Brasil, sendo a principal competição futebolística no país.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9">
                        </div>
                        <div class="all-form">
                            <div class="single-form" id="first-step">
                                <form action="{{route('salvarcompetidor')}}" method="post">
                                    @csrf 
                                    <div>
                                        <label for="firstName">Nome</label>
                                        <input type="text" value="" id="firstName" placeholder="Ex: Mundial@gmail.com"/>  
                                    </div>
                                    <div>
                                        <label for="lastName">Descrição</label>
                                        <input type="text" value="" id="lastName" placeholder="Ex: Mundial@gmail.com"/>
                                    </div>
                                    <div>
                                        <label for="emailAdd">imagem</label>
                                        <input type="image" id="emailAdd" placeholder="Ex: Mundial@gmail.com"/>
                                    </div>
                                    <div>
                                        <input type="number" value="" id="dOb" placeholder="Ex: Mundial@gmail.com"/>
                                        <label for="dOb">Pontos</label>
                                    </div><p>Ao clicar em "CADASTRAR", você confirma que leu e entendeu Privacy & Coockie Policy, e concorda com seus termos.</p>
                                    <input class="next" type="submit">CADASTRAR</input>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection