<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">
<div class="container">
    
    <h1>Formulario para crear un nuevo registro:</h1>
    <form action="{{ route('washer.store')}}" method="post">

        @csrf
          <div>
              <label for="">Tipo:</label>
              <input class="form-control" type="text" name="type" id="" placeholder="Tipo">
          </div>
          <div>
              <label for="">Capacidad:</label>
              <input class="form-control" type="number" name="capacity" id="" placeholder="Capacidad">
          </div>
          <div>
              <label for="">Modelo:</label>
              <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
          </div>
          <div>
              <label for="">Color:</label>
              <input class="form-control" type="text" name="color" id="" placeholder="color">
          </div>
          <div>
              <label for="">Marca:</label>
              <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
          </div>
          <div>
              <label for="">Peso:</label>
              <input class="form-control" type="number" name="weight" id="" placeholder="Peso">
          </div>
          <div>
              <label for="">Medidas:</label>
              <input class="form-control" type="text" name="measurements" id="" placeholder="Medidias">
          </div>
         
          <div>
              <label for="">Descripsión:</label>
              <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
          </div>
          <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
</div>