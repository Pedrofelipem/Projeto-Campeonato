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
                        <form action="{{route('salvar.competidor')}}" method="post">
                            @csrf 
                            <div>
                                <input type="text" name="nome"  id="firstName" placeholder="São Paulo FC"/>  
                            </div>
                            
                            <div>
                                <input type="text" name="descricao" placeholder=" São Paulo Futebol Clube é uma associação esportiva brasileira da cidade de São Paulo."/>
                            </div>
                            
                            <!-- <div>
                                <input type="image" name="imagem" id="emailAdd" placeholder="Ex: Click Upload Imagem"/>
                            </div>
                            -->
                            <div>
                                <input type="number" name="ponto" id="dOb" placeholder="Ex: 150"/>
                            </div><p>Ao clicar em "CADASTRAR", você confirma que leu e entendeu Privacy & Coockie Policy, e concorda com seus termos.</p>
                            <input class="next" type="submit" value="CADASTRAR"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection