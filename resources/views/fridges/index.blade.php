<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

@forelse( $refrigerador as $fridge)


<li>
<h3>{{$fridge->brand}} {{$fridge->model}}</h3>
<h3>Tipo de refrigerador: {{$fridge->refrigerator_type}}</h3>
<h3>Color: {{$fridge->color}}</h3>
<h3>Numero de puertas: {{$fridge->doors_number}}</h3>
<h3>Funcion: {{$fridge->functions}}</h3>
<h3>Localizacion de l congelador: {{$fridge->freezer_location}}</h3>
<h3>Medidas: {{$fridge->measurements}}</h3>
<h3>Peso: {{$fridge->weight}} kg</h3>
<h3>Voltage: {{$fridge->voltage}} volts</h3>
<h3>Descripsion:</h3>
<p>{{$fridge->description}}</p>
</li>
<br>
@empty
    <h1>La tabla no tiene datos</h1>

@endforelse