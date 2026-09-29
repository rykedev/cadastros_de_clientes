<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome"><br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco">

        <button type="submit">Cadastrar</button>
    </form>

    <?php
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

    
        if (empty($nome)) {
            echo "<p id='msg' style='color:red;'>Erro: O nome do produto não pode ficar vazio.</p>";
        } elseif (!is_numeric($preco) || $preco <= 0) {
            echo "<p id='msg' style='color:red;'>Erro: O preço deve ser um número positivo.</p>";
        } else {
            $db = new PDO("sqlite:" . __DIR__ . "/exercicio.db");
            $db->exec("CREATE TABLE IF NOT EXISTS produtos (id INTEGER PRIMARY KEY AUTOINCREMENT, nome TEXT, preco REAL)");

            $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

            if ($db->exec($sql)) {
                echo "<p id='msg' style='color: Darkgreen;'>Produto cadastrado com sucesso!</p>";
            }
        }

        echo "
        <script>
            setTimeout(function() {
                var msg = document.getElementById('msg');
                if (msg) {
                    msg.style.display = 'none';
                }
            }, 5000);        
        </script>
        ";
    }
    ?>
</body>
</html>
