@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

{{-- estes são as sessões do título, css, body e js --}}

@section('css')

@endsection

@section('body')
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <img src="{{asset('img/tata.jpg')}}" alt="" width="100%" height="250px">
            <p>Nosso projeto da Wikipédia em português não é necessariamente, nem principalmente, um projeto de tradução da versão inglesa. Temos como objetivo criar a nossa própria enciclopédia, mesmo que traduzindo e adaptando alguns artigos de outras línguas. Começamos no final do ano 2001 e, nessa altura, ocorreu uma fase de "recrutamento" de pessoas interessadas em participar, em grande ou pequena escala.

            As primeiras políticas e normas de criação de páginas e algumas regras de organização foram então criadas, tendo sido, essencialmente, transpostas da versão inglesa.
            
            O mais importante a salientar é que isto não é um fórum de debates. É uma enciclopédia e portanto o conteúdo deve ser o mais imparcial de opiniões possível, sempre tentando entrar num consenso geral de ideias.
            
            Ajude-nos a divulgar o projeto e participe você também!</p>


            <img src="{{asset('img/tulla.jpg')}}" alt="" width="100%" height="250px">

            <p>GitHub é uma plataforma de hospedagem de código-fonte e arquivos com controle de versão usando o Git. Ele permite que programadores, utilitários ou qualquer usuário cadastrado na plataforma contribuam em projetos privados e/ou Open Source de qualquer lugar do mundo. GitHub é amplamente utilizado por programadores para divulgação de seus trabalhos ou para que outros programadores contribuam com o projeto, além de promover fácil comunicação através de recursos que relatam problemas ou misturam repositórios remotos (issues, pull request).

                O GitHub é mundialmente usado e chega a ter mais de 36 milhões de usuários ativos mundialmente contribuindo em projetos comerciais ou pessoais. Hoje o GitHub abriga mais de 100 milhões de projetos,[1] alguns deles que são conhecidos mundialmente. WordPress, GNU/Linux, Atom, Electron. GitHub também oferece suporte ao recurso de organização que é amplamente utilizado por aqueles que querem uma escala maior para seus projetos. Na maioria das vezes, o recurso é usado por empresas já existentes como a Google, Microsoft e WordPress.</p>
        
        
        
        </div>
        
        <div class="col"></div>
     
    </div>
@endsection

@section('js')
    <script>
        console.log("Sejam bem-vindos kkk")</script>
@endsection