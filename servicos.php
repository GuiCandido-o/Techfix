<?php include 'templates/header.php'; ?>
<?php include 'config/conexao.php'; ?>

<?php

// Quando o botão "Contratar" for clicado
if(isset($_POST['contratar'])){

    $nome_cliente = $_POST['nome_cliente'];
    $id_servico = $_POST['id_servico'];

    // 1. Cadastra o cliente
    $sql_cliente = "INSERT INTO clientes (nome, email) VALUES ('$nome_cliente', '$nome_cliente@email.com')";
    mysqli_query($conn, $sql_cliente);

    // Pega o id do cliente que acabou de ser criado
    $id_cliente = mysqli_insert_id($conn);

    // 2. Cria o pedido
    $sql_pedido = "INSERT INTO pedidos (id_cliente, status) VALUES ($id_cliente, 'Pendente')";
    mysqli_query($conn, $sql_pedido);

    // Pega o id do pedido que acabou de ser criado
    $id_pedido = mysqli_insert_id($conn);

    // 3. Liga o pedido ao serviço escolhido (relacionamento N:N)
    $sql_ps = "INSERT INTO pedido_servico (id_pedido, id_servico, quantidade) VALUES ($id_pedido, $id_servico, 1)";
    mysqli_query($conn, $sql_ps);

    echo '<div class="alert alert-success text-center">Pedido realizado com sucesso!</div>';

}

// Busca os serviços para mostrar na tela
$sql = "SELECT * FROM servicos";
$resultado = mysqli_query($conn, $sql);

?>

<div class="text-center mb-5">

    <h1>Nossos Serviços</h1>

    <p>
        Conheça os serviços disponíveis da TechFix
    </p>

</div>

<div class="row">

    <?php while($servico = mysqli_fetch_assoc($resultado)){ ?>

        <div class="col-md-4 mb-4">

            <div class="card p-3 h-100">

                <h3>
                    <?= $servico['nome'] ?>
                </h3>

                <p>
                    <?= $servico['descricao'] ?>
                </p>

                <p>

                    <strong>
                        Categoria:
                    </strong>

                    <?= $servico['categoria'] ?>

                </p>

                <h5>
                    R$ <?= $servico['preco'] ?>
                </h5>

                <?php if($servico['preco'] > 500){ ?>

                    <span class="badge bg-success mb-3">

                        Serviço Premium

                    </span>

                <?php } else { ?>

                    <span class="badge bg-secondary mb-3">

                        Serviço Padrão

                    </span>

                <?php } ?>

                <form method="POST" class="mt-3">

                    <input type="hidden" name="id_servico" value="<?= $servico['id_servico'] ?>">

                    <input
                        type="text"
                        name="nome_cliente"
                        class="form-control mb-2"
                        placeholder="Seu nome"
                        required>

                    <button type="submit" name="contratar" class="btn btn-primary w-100">

                        Contratar

                    </button>

                </form>

            </div>

        </div>

    <?php } ?>

</div>

<?php include 'templates/footer.php'; ?>