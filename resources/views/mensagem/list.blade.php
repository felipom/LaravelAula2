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
	<h3>{{$mensagem->autor}}</h3>
	<p><a href="/mensagem/{{$mensagem->id}}">{{$mensagem->titulo}}</a></p>
	<p>{{$mensagem->texto}}</p>
	<br>
@endforeach

<br>
<p><a href="/mensagem/create">Criar novo registro</a></p>



<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->