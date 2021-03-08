<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

@forelse( $shoes as $shoe)
<li>
<h3>{{$shoe->type}} {{$shoe->brand}}</h3>
<h3>{{$shoe->model}}</h3>
<h3>Numero:{{$shoe->size_number}}</h3>
<h3>Color: {{$shoe->color}}</h3>
<h3>Genero: {{$shoe->gender}}</h3>
<h3>Exterior: {{$shoe->exterior}}</h3>
<h3>Interior: {{$shoe->inside}}</h3>
<h3>Suela: {{$shoe->sole}}</h3>
<h3>Descripsion:</h3>
<p>{{$shoe->description}}</p>
</li>

@empty
    <h1>La tabla no tiene datos</h1>

@endforelse