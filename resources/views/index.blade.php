@extends ("layout")
@section ("content")
    <div class="jumbotron">
        <p class="h1 text-center py-4">Primeiro Exemplo</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="h1 text-center">Lado esquerdo da tela </p>
        </div>
        <div class="col-md-6">
            <p class="h1 text-center">Lado direito da tela</p>
            <a class="btn btn-primary" href="{{route('pagina2')}}">
                Link para a página 2
            </a>
        </div>
    </div>
@endsection

