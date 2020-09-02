@extends("layout.plantilla")

@section('title', 'Listado de compras')


@section('contenido')


<div style="background-color: white;">
<p align="center"> <font face="Verdana" size="5" color="#666666"><u>Listado compras</u></font></p>

<div align="center">
  <center>
 <table border="1" cellpadding="0" cellspacing="0"  bordercolor="#CCCCCC" style="border-collapse: collapse" width="90%">

  <tr>
      <td width="10%" height="35"><p align="left"><font face="Verdana" size="4" >N°</font></i></td>
	  <td width="40%" height="35"><p align="left"><font face="Verdana" size="4" >Lugar</font></i></td>



	  </tr>

     @foreach ( $compras as $compra)

  <tr>
    <td width="10%" height="35">  <p align="center"><font face="Verdana" size="4"></font> </p>{{ $compra['comId']}}</font></i></td>
	<td width="40%" height="35">  <p align="left"><font face="Verdana" size="4"></font></p>{{ $compra['comVendedor']}}</font></i></td>

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
