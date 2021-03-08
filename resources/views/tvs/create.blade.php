<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">
<div class="container">
    
    <h1>Formulario para crear un nuevo registro:</h1>
    <form action="{{ route('tv.store')}}" method="post">

        @csrf
          <div>
              <label for="">Tipo:</label>
              <input class="form-control" type="text" name="tipe" id="" placeholder="Tipo">
          </div>
          <div>
              <label for="">Marca:</label>
              <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
          </div>
          <div>
              <label for="">Modelo:</label>
              <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
          </div>
          <div>
              <label for="">Tipo de montaje:</label>
              <input class="form-control" type="text" name="munt_tipe" id="" placeholder="Tipo de montaje">
          </div>
          <div>
              <label for="">Resolucion de pantalla:</label>
              <input class="form-control" type="text" name="screen_resolution" id="" placeholder="Resolucion de pantalla">
          </div>
          <div>
              <label for="">Tecnologia de pantalla:</label>
              <input class="form-control" type="text" name="screen_technology" id="" placeholder="Tecnologia de pantalla">
          </div>
          <div>
              <label for="">Tamaño de pantalla:</label>
              <input class="form-control" type="text" name="screen_size" id="" placeholder="Tamaño de pantalla">
          </div>
          <div>
              <label for="">Numero de serie:</label>
              <input class="form-control" type="text" name="serial_number" id="" placeholder="Numero de serie">
          </div>
          <div>
              <label for="">Descripsión:</label>
              <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
          </div>
          <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
</div>