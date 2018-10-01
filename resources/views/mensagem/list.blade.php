<h1>Lista de Mensagens</h1>
<hr>
 @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($mensagens as $mensagem)
	
	<p><b>Titulo:</b> {{$mensagem->titulo}}</p>
	<p><b>Texto:</b> {{$mensagem->texto}}</p>
	<p><b>Autor:</b> {{$mensagem->autor}}</p>
	@auth
	<p>Ações: 
    <a href="/mensagem/{{$mensagem->id}}">Ver Mais</a>
    <a href="/mensagem/{{$mensagem->id}}/edit">Editar</a> 
    <a href="/mensagem/{{$mensagem->id}}/delete">Deletar</a>
  </p>
  @endauth
	<br>
@endforeach
<br><br>

{{$mensagens->links()}}

<br>
@auth
<p><a href="/mensagem/create">Criar novo registro</a></p>
@endauth


<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->