<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="container">
<h1>Formulario para crear un nuevo registro:</h1>

<form action="{{route('fridge.store')}}" method="post">

@csrf
    <div>
         <label for="">Marca:</label>
         <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
    </div>
    <div>
         <label for="">Color:</label>
         <input class="form-control" type="text" name="color" id="" placeholder="Color">
    </div>
    <div>
         <label for="">Tipo de refrigerador:</label>
         <input class="form-control" type="text" name="refrigerator_type" id="" placeholder="Tipo de refrigerador">
    </div>
    <div>
         <label for="">Numero de puertas:</label>
         <input class="form-control" type="number" name="doors_number" id="" placeholder="Numero de puertas">
    </div>
    <div>
         <label for="">Funciones:</label>
         <input class="form-control" type="text" name="functions" id="" placeholder="Funciones">
    </div>
    <div>
         <label for="">Localizacion del congelador:</label>
         <input class="form-control" type="text" name="freezer_location" id="" placeholder="Localizacion de el congelador">
    </div>
    <div>
         <label for="">Medidas:</label>
         <input class="form-control" type="text" name="measurements" id="" placeholder="Medidas">
    </div>
    <div>
         <label for="">Peso:</label>
         <input class="form-control" type="number" name="weight" id="" placeholder="Peso">
    </div>
    <div>
         <label for="">Modelo:</label>
         <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
    </div>
    <div>
         <label for="">Voltage:</label>
         <input class="form-control" type="number" name="voltage" id="" placeholder="Voltage">
    </div>
    <div>
         <label for="">Descripsion:</label>
         <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">

</form>

</div>


