<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CLIENTES CONFIANÇA</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <form action="index.php">
        <input type="search" name="search" placeholder="Pesquisar">
        <input type="hidden" name="a" value="search">
        <input type="submit" name="submit" value="Pesquisar">
    </form>
    <div class="novo d-grid gap-2">
    <a class="btn btn-success" href="./index.php?a=goToNew">Novo Cliente</a>
    </div>
    <div class="content">
        <table class="table table-responsive-sm table-dark table-striped table-hover table-bordered table-group-divider ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultData as $data): ?>
                    <tr>
                        <td> <?= $data["id"]; ?> </td>
                        <td> <?= $data["name"]; ?> </td>
                        <td> <?= $data["email"]; ?> </td>
                        <td> <?= $data["phone"]; ?> </td>
                        <td> 
                            <a class="btn btn-primary" href="./index.php?a=search&v=editCreate&search=<?= $data['id'] ?>">Editar</a>
                            <button class="btn btn-danger" onclick="verifyDelete(<?= $data['id'] ?>)">Deletar</button> 
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<script>
    function verifyDelete(id)
    {
        let result = confirm('Você tem certeza que deseja deletar o registro do cliente: '+id);
        console.log(result);
        if(result)
        {
            window.location.replace('./index.php?a=delete&id='+id);
        }
    }
    function reload()
    {
        window.location.replace('index.php');
    }
</script>
</html>