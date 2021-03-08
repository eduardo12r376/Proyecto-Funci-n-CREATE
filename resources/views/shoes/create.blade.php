<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="container">
<h1>Formulario para crear un nuevo registro:</h1>

<form action="{{route('shoe.store')}}" method="post">

@csrf
    <div>
         <label for="">Tipo:</label>
         <input class="form-control" type="text" name="type" id="" placeholder="Tipo">
    </div>
    <div>
         <label for="">Color:</label>
         <input class="form-control" type="text" name="color" id="" placeholder="Color">
    </div>
    <div>
         <label for="">Numero:</label>
         <input class="form-control" type="text" name="size_number" id="" placeholder="Numero">
    </div>
   
    <div>
         <label for="">Exterior:</label>
         <input class="form-control" type="text" name="exterior" id="" placeholder="Exterior">
    </div>
    <div>
         <label for="">Interior:</label>
         <input class="form-control" type="text" name="inside" id="" placeholder="interior">
    </div>
    <div>
         <label for="">Genero:</label>
         <input class="form-control" type="text" name="gender" id="" placeholder="Genero">
    </div>
  
    <div>
         <label for="">Suela:</label>
         <input class="form-control" type="text" name="sole" id="" placeholder="Suela">
    </div>
    <div>
         <label for="">Modelo:</label>
         <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
    </div>
    <div>
         <label for="">Marca:</label>
         <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
    </div>
  
    <div>
         <label for="">Descripsion:</label>
         <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">

</form>