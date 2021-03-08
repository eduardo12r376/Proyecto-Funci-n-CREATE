<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

@forelse( $washers as $washer)

<li>
<h3>{{ $washer->brand}} {{$washer->model }}</h3>
<h3>Color: {{$washer->color}}</h3>
<h3>Tipo: {{$washer->type}}</h3>
<h3>Capacidad: {{$washer->capacity}} kg</h3>
<h3>Peso: {{$washer->weight}} kg</h3>
<h3>Medidas: {{$washer->measurements}}</h3>
<h2>Descripsion:</h2>
<p>{{$washer->description}}</p>
<br>
</li>

@empty
    <h1>La tabla no tiene datos</h1>

@endforelse