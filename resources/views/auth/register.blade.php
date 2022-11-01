<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Registrar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="/register" method="POST">
                    @csrf
                <div class = "form-group">
                <label for="username">Nombre de usuario: </label>
                <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class = "form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class = "form-group">
                <label for="password">Contraseña: </label>
                <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class = "form-group">
                <label for="password_confirmation">Ingrese nuevamente contraseña</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                </div>
                <input type="submit" class="btn btn-primary" value="Registrarse"></input>
                <a href="/login" class="btn btn-success" >presione para Loguearse</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>