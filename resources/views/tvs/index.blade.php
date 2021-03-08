<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

@forelse( $teles as $tv)

<li>
<h3>{{ $tv->brand}} {{$tv->screen_size}} {{$tv->model }}</h3>
<h3>{{$tv->tipe}} {{$tv->screen_resolution}}</h3>
<h3>Tipo de montura: {{$tv->munt_tipe}}</h3>
<h3>Tecnologia de la pantalla: {{$tv->screen_technology}}</h3>
<h3>Numero de serie: {{$tv->serial_number}}</h3>
<p>{{$tv->description}}</p>
<br>
</li>

@empty
    <h1>La tabla no tiene datos</h1>

@endforelse