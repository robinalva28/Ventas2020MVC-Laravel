@extends("layout.plantilla")

@section('title', 'Listado de compras')


@section('contenido')


<div style="background-color: white;">
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado compras</u></font></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">

  <tr>
      <td width="10%" height="25"><p align="left"><font face="Verdana" size="4" >Fecha</font></i></td>
      <td width="5%" height="35"><p align="left"><font face="Verdana" size="4" >N°</font></i></td>
      <td width="25%" height="35"><p align="left"><font face="Verdana" size="4" >Vendedor</font></i></td>
      <td width="20%" height="35"><p align="left"><font face="Verdana" size="4" >Producto</font></i></td>
      <td width="5%" height="35"><p align="left"><font face="Verdana" size="4" >Cant</font></i></td>
      <td width="5%" height="35"><p align="left"><font face="Verdana" size="4" >Prec. Unit.</font></i></td>
      <td width="5%" height="35"><p align="left"><font face="Verdana" size="4" >Prec. Tot.</font></i></td>
    <td width="15%" height="35"><p align="left"><font face="Verdana" size="4" >Info</font></i></td>
   {{-- <td width="10%" height="35"><p align="left"><font face="Verdana" size="4" >Lugar</font></i></td>
--}}
	  </tr>

     @foreach ( $compras as $compra)

  <tr>
      <td width="10%" height="20">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra->created_at->format('d-m-y')}}</font></i></td>
      <td width="5%" height="35">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra['comId']}}</font></i></td>
      <td width="25%" height="35">  <p align="left"><font face="Verdana" size="4"></font></p>{{ $compra['comVendedor']}}</font></i></td>
      <td width="20%" height="35">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra['comNomProducto']}}</font></i></td>
      <td width="5%" height="35">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra['comStock']}}</font></i></td>
      <td width="5%" height="35">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra['comPrecio']}}</font></i></td>
      <td width="5%" height="35">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra['comPrecio']*$compra['comStock']}}</font></i></td>
      <td width="15%" height="35">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra['infoAdicional']}}</font></i></td>
      {{--<td width="10%" height="35">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra['infoAdicional']}}</font></i></td>
--}}
  </tr>

     @endforeach
  </table>
      <a href="/movimientos" class="btn btn-outline-secondary ">
          volver
      </a>
  </center>
</div>
</div>
@endsection
