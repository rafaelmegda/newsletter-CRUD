<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Emails</title>
</head>
<body>

<div class="container">
    <div class="form-group">
        <h1>Cadastro de Emails </h1>
            <form action="cadastrar.php">
                <label for="seu email">Email:</label>
                <input type="email" class="form-control" name="emailLogin" aria-describedby="emailHelp">
                <button type="submit" class="btn btn-primary">CADASTRAR EMAIL</button>
            </form>
    </div>
    <form action="listar.php">
        <div class="listarEmail">
            <h1>Listar Emails</h1>
            <button type="submit" class="btn btn-primary">Listar Emails</button>
        </div>
    </form>
</div>
    
</body>
</html>