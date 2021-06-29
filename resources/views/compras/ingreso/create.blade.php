
<!--Plantilla que  contiene los formularios y botones para crear un ingreso de articulos al almacen-->
<!--extiende del panel de administracion-->

@extends ('layouts.admin')
@section ('contenido')
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <h3>Nuevo ingreso</h3>
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

      {!!Form::open(array('url'=>'compras/ingreso','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="row">
              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="form-group">
              <label for="proveedor">Proveedor</label>
              <select name="idproveedor" id="idproveedor"  class="form-control selectpicker" data-live-search="true">
                        @foreach($personas as $persona)
                        <option value="{{$persona->idpersona}}">{{$persona->nombre}}</option>
                        @endforeach
                  </select>

            </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
              <div class="form-group">
                <label>Tipo comprobante</label>
                <select name="tipo_comprobante" class="form-control">
                              <option value="Factura">Factura</option>
                              <option value="Ticket">Ticket</option>
                </select>
            </div>
              </div>
           
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
              <div class="form-group">
              <label for="serie_comprobante">Serie comprobante</label>
              <input type="text" name="serie_comprobante"  value="{{old('serie_comprobante')}}" class="form-control" placeholder="Serie comprobante...">
            </div>
              </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="num_comprobante">Número comprobante</label>
                  <input type="text" name="num_comprobante"  required value="{{old('num_comprobante')}}" class="form-control" placeholder="Número comprobante...">
            </div>
                  </div>
            </div>
            <div class="row">
                  <div class="panel panel-primary">
                       <div class="panel-body">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="form-group">
                              <label>Artículo</label>
                              <select name="pidarticulo" class="form-control selectpicker" id="pidarticulo" data-live-search="true">
                                    @foreach($articulos as $articulo)
                                    <option value="{{$articulo->idarticulo}}">{{$articulo->articulo}}</option>
                                    @endforeach
                              </select>
                        </div>
                  </div>

 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
    <label for="cantidad">Cantidad</label>
                  <input type="number" name="pcantidad"  id="pcantidad" class="form-control" placeholder="Cantidad">

               </div>
                </div>
                   <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                              <label for="precio_compra">Precio de compra</label>
                  <input type="number" name="pprecio_compra"  id="pprecio_compra" class="form-control" placeholder="precio de compra">
               </div>
                </div>
                   <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="form-group">
                                 <label for="precio_venta">Precio de venta</label>
                  <input type="number" name="pprecio_venta"  id="pprecio_venta" class="form-control" placeholder="precio de venta">

               </div>
                </div>

                 <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        <div class="form-group">
                    <button class="btn btn-primary" id="bt_add" type="button">Agregar</button>

               </div>
                </div>

                   <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                  <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                        <thead style="background-color:#A9D0F5 ">
                              <th>Opciones</th>
                              <th>Artículo</th>
                              <th>Cantidad</th>
                              <th>Precio de compra</th>
                              <th>Precio de venta</th>
                              <th>Subtotal</th>

                        </thead> 
                        <tfoot>
                                <th>Total</th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th><h4 id="total">$ 0.00</h4></th>
                        </tfoot>  
                        <tbody>
                              
                        </tbody> 

                  </table>

               </div>

                        

                  </div>
   

                  </div>
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
            <div class="form-group">
                  <input name"_token" value="{{ csrf_token() }}" type="hidden"></input>
              <button class="btn btn-primary" type="submit">Guardar</button>
              <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </div>
            </div>

      {!!Form::close()!!}   
 @push ('scripts')
<!--Fecha : 06/02/2019-->
 <!--se abre el script donde se realizaran los calculos matematicos-->
 <script>
 $(document).ready(function(){
       $('#bt_add').click(function(){
             agregar();
       });
 });

 //se declaran las variables para calcular el total y el array de subtotales de ingresos
 var cont=0;
 total=0;
 subtotal=[];
 $("#guardar").hide();

//Descripción: funcion que permite agregar articulos como nuevos ingresos al almacen
 function agregar()
 {
idarticulo=$("#pidarticulo").val();
articulo=$("#pidarticulo option:selected").text();
cantidad=$("#pcantidad").val();
precio_compra=$("#pprecio_compra").val();
precio_venta=$("#pprecio_venta").val();
//validacion de campos nulos
if (idarticulo!=" " && cantidad!=" " && cantidad>0 && precio_compra!=" " && precio_venta!=" ")
  //en caso de que no sean nulos se ejecuta el metodo de la cantidad de articulos por el precio de adquisición por cada articulo ingresado se va almacenando en el array de subtotales 
{
      subtotal[cont]=(cantidad*precio_compra);
      total=total+subtotal[cont];
      var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_compra[]" value="'+precio_compra+'"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'"></td><td>'+subtotal[cont]+'</td></tr>';
cont++;
limpiar();
$("#total").html("$ "+ total);
evaluar();
$('#detalles').append(fila);
}
else
  //alerta por si  el valor de las cajas de texto son nulas
{
      alert("Error al ingresar el detalle del ingreso,revise los datos del artículo");
}
 }
 //funcion para limpiar el contenido del formulario
function limpiar(){
      $("#pcantidad").val("");
      $("#pprecio_compra").val("");
      $("#pprecio_venta").val("");
}

//funcion para evaluar el total ,si es mayor a 0 se muestra ,sino se oculta el resultado
function evaluar()
{
      if (total>0)
      {
            $("#guardar").show();
      }
      else
      {
            $("#guardar").hide(); 
      }
}

//funcion que permite eliminar un ingreso  a punto de mandarse al almacen 
function eliminar(index){
      total=total-subtotal[index];
      $("#total").html("$ " + total);
      $("#fila" + index).remove();
      evaluar();
}


 </script>

 @endpush
@endsection