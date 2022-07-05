@extends('layouts.app')

@section('template_title')
    Reporte
@endsection

@section('content')

<?php

$host = "localhost";
$user = "root";
$password = "1040";
$database = "ejercicio6";
$con = ($GLOBAL["___mysqli_ston"] = mysqli_connect($host, $user, $password));

mysqli_query($GLOBAL["___mysqli_ston"], "SET CHARACTER SET utf8 ");
((bool)mysqli_query( $con, "USE ". $database));

$sql = "select s.nombre as Nombre, l.titulo as Libro, p.fechaprestamo as Fechap from suscriptores s
INNER JOIN libros l
INNER JOIN prestamos p
ON p.docsuscriptor = s.documento
AND p.codigolibro = l.codigo";

$exe = mysqli_query($con,$sql);
?>
  <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reporte Libreria') }}
                            </span>

                             
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        
										<th>Suscriptor</th>
										<th>Libro</th>
										<th>Fecha Prestamo</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    while($row = mysqli_fetch_array($exe)){
                                        $Nombre = $row['Nombre'];
                                        $Libro = $row['Libro'];
                                        $Fechap = $row['Fechap'];

                                    
                                    
                                    ?>
                                        <tr>
                                            <td><?=$Nombre?></td>
                                            <td><?=$Libro?></td>
                                            <td><?=$Fechap?></td>                                           
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>







@endsection