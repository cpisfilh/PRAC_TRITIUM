@extends('layouts.app-master')

@section('content')


    <h1>Libros</h1>
    @auth
    <?php

    $sql = 'SELECT * FROM libros';
    $listalibros = json_encode(DB::select($sql), true);

    // $products = DB::table('products')->get();
    // print $products;
   /* $host="localhost";
    $bd="ptritium";
    $usuario="root";
    $contrasenia="";

   /* $host="localhost";
    $bd=env('BD_DATABASE');
    $usuario=env('BD_DATABASE');
    $contrasenia="";
    
        try {
            $conexion=new PDO("mysql:host=$host;dbname=$bd", $usuario,$contrasenia);
        
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    
    $sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
    $sentenciaSQL->execute();
    $listalibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
    */


    ?>
        <p>Bienvenido <span style="color:red">{{auth()->user()->name ?? auth()->user()->username }}</span>, estas autorizado</p>
        <p>
            
        </p>
        <div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>categoria</th>
                <th>descripcion</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach(json_decode($listalibros, true) as $libro){?>
            <tr>
                <td><?php echo $libro['id'];?></td>
                <td><?php echo $libro['name'];?></td>
                <td><?php echo $libro['categoria'];?></td>
                <td><?php echo $libro['descripcion'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="/logout" class="btn btn-dark">Logout</a>
</div>

    @endauth

    @guest

        <p>Logueate primero <a href="/login">aqui</a> </p>

    @endguest
    
</body>
</html>

@endsection