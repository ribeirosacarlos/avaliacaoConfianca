<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/index.css">
    <title>Clientes</title>
</head>
<body>
    <a class="btn btn-dark" href="index.php">Voltar</a>
    <h1>Editar clientes</h1>
    <div class="content">
        <form action="index.php" method="POST">
            <div class="mb-3 edit">
                <label for="name" class="form-label">Nome:</label>
                <input class="form-control" type="text" placeholder="Insira o nome do cliente" value="<?= isset($resultData[0]['name']) ? $resultData[0]['name'] : '' ?>" name="name" required>
            </div>
            <br><br>
            <div class="mb-3 edit">
                <label for="email" class="form-label">Email:</label>
                <input class="form-control" type="email" placeholder="Insira o email do cliente" value="<?= isset($resultData[0]['email']) ? $resultData[0]['email'] : '' ?>" name="email" required>
            </div>
            <br><br>
            <div class="mb-3 edit">
                <label for="phone" class="form-label">Telefone:</label>
                <input class="form-control" type="number" placeholder="Insira o telefone do cliente" value="<?= isset($resultData[0]['phone']) ? $resultData[0]['phone'] : '' ?>" name="phone" required>
            </div>
            <br><br>
            <input type="hidden" name="a" value="<?= isset($resultData[0]['id']) ? 'edit' : 'new' ?>">
            <input type="hidden" name="id" value="<?= isset($resultData[0]['id']) ? $resultData[0]['id'] : '' ?>">
            <input class="btn btn-primary" type="submit" name="submit" value="Confirmar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>