
<!--Plantilla que  contiene los formularios y botones para editar los proveedores -->
<!--extiende del panel de administracion-->
@extends ('layouts.admin')
@section ('contenido')
   <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <h3>Editar proveedor: {{ $persona->nombre}}</h3>
         @if (count($errors)>0)
         <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
            </ul>
         </div>
         @endif
</div>
</div>
         {!!Form::model($persona,['method'=>'PATCH','route'=>['compras.proveedor.update',$persona->idpersona]])!!}
            {{Form::token()}}

                        <div clsass="row">
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                  <label for="nombre">Nombre de Empresa</label>
                  <input type="text" name="nombre" required value="{{$persona->nombre}}" class="form-control" placeholder="Nombre de Empresa...">
            </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" name="direccion"  value="{{$persona->direccion}}" class="form-control" placeholder="Direccion...">
            </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                        <label>Documento</label>
                        <select name="tipo_documento" class="form-control">
                              @if ($persona->tipo_documento='IFE')
                              <option value="IFE">IFE</option>
                              <option value="INE">INE</option>
                              <option value="PASAPORTE">PASAPORTE</option>
                              <option value="SMN">SMN</option>
                              <option value="RFC">RFC</option>
                              <option value="CURP">CURP</option>
                              @elseif ($persona->tipo_documento='INE')
                              <option value="IFE">IFE</option>
                              <option value="INE">INE</option>
                              <option value="PASAPORTE">PASAPORTE</option>
                              <option value="SMN">SMN</option>
                              <option value="RFC">RFC</option>
                              <option value="CURP">CURP</option>
                              @elseif ($persona->tipo_documento='PASAPORTE')
                              <option value="IFE">IFE</option>
                              <option value="INE">INE</option>
                              <option value="PASAPORTE">PASAPORTE</option>
                              <option value="SMN">SMN</option>
                              <option value="RFC">RFC</option>
                              <option value="CURP">CURP</option>
                              @elseif ($persona->tipo_documento='SMN')
                              <option value="IFE">IFE</option>
                              <option value="INE">INE</option>
                              <option value="PASAPORTE">PASAPORTE</option>
                              <option value="SMN">SMN</option>
                              <option value="RFC">RFC</option>
                              <option value="CURP">CURP</option>
                              @elseif ($persona->tipo_documento='RFC')
                              <option value="IFE">IFE</option>
                              <option value="INE">INE</option>
                              <option value="PASAPORTE">PASAPORTE</option>
                              <option value="SMN">SMN</option>
                              <option value="RFC">RFC</option>
                              <option value="CURP">CURP</option>
                               @else 
                               <option value="IFE">IFE</option>
                               <option value="INE">INE</option>
                               <option value="PASAPORTE">PASAPORTE</option>
                               <option value="SMN">SMN</option>
                               <option value="RFC">RFC</option>
                              <option value="CURP"  selected>CURP</option>
                        </select>
            </div>
              </div>
           
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                  <label for="num_documento">Número documento</label>
                  <input type="text" name="num_documento"  value="{{$persona->num_documento}}" class="form-control" placeholder="Número del documento...">
            </div>
                  </div>
                     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                  <label for="telefono">Télefono</label>
                  <input type="text" name="telefono"  value="{{$persona->telefono}}" class="form-control" placeholder="Número de Télefono...">
            </div>
                  </div>
                     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                  <div class="form-group">
                  <label for="email">Email </label>
                  <input type="email" name="email"  value="{{$persona->email}}" class="form-control" placeholder="Email...">
            </div>
                  </div>
                  
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </div>
            </div>

          
            

         {!!Form::close()!!}     
            

@endsection