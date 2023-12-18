<?php   
    if(isset($_POST['submit']))
    {
        //print_r('ID do Cliente: ' . $_POST['ID']);
        //print_r('<br>');
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);

        include_once('config.php');

        $cliente_id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $result = mysqli_query($conexao, "INSERT INTO clientes(cliente_id, nome, email, telefone) VALUES ('$cliente_id', '$nome', '$email', '$telefone')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Farmácia Norte</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(16, 44, 23), rgb(57, 59, 59));
        }
        .box{
            color: white;
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        header {
        background-color: #2f332f;
        padding: 8px 5px;
        text-align: center;
        color: white;
        }

        nav {
        background-color: #336935;
        overflow: hidden;
        display: block;
        color: white;
        text-align: center;
        padding: 10px 14px;
        text-decoration: none;
        }
        nav a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 15px 20px;
        margin: 0 px;
        text-decoration: none;
        }

        nav a:hover {
        background-color: #ddd;
        color: black;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(23, 47, 73), rgb(7, 44, 13));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(23, 47, 73), rgb(7, 44, 13));
        }
    </style>
</head>
<body>
    <header>
        <h1>Farmácia</h1>
        <img src="Imagens/icon-farmacia.png" alt="">
        <nav>
            <a href="inicio.php">Início</a>
            <a href="login.php">Login</a>
            <a href="funcionario.php">Funcionários</a>
            <a href="medicamento.php">Medicamentos</a>
            <a href="cliente.php">Clientes</a>
            <a href="historico-compra.php">Histórico de Compras</a>
            <a href="historico-venda.php">Histórico de Vendas</a>
            <a href="fornecedor.php">Fornecedores</a>
          </nav>
          </header>
    <div class="box">
        
    </div>
</body>
</html>