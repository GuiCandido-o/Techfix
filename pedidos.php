<?php include 'templates/header.php'; ?>
<?php include 'config/conexao.php'; ?>

<?php

// Junta pedidos + clientes + pedido_servico + servicos
$sql = "SELECT c.nome AS cliente, s.nome AS servico, s.preco AS valor
        FROM pedidos p
        INNER JOIN clientes c ON p.id_cliente = c.id_cliente
        INNER JOIN pedido_servico ps ON p.id_pedido = ps.id_pedido
        INNER JOIN servicos s ON ps.id_servico = s.id_servico";

$resultado = mysqli_query($conn, $sql);

?>

<div class="row justify-content-center">

    <div class="col-md-10">

        <div class="card p-4">

            <h2 class="text-center mb-4">
                Lista de Pedidos
            </h2>

            <?php if(mysqli_num_rows($resultado) == 0){ ?>

                <div class="alert alert-danger">

                    Nenhum pedido encontrado.

                </div>

            <?php } else { ?>

                <table class="table table-striped">

                    <thead>

                        <tr>
                            <th>Cliente</th>
                            <th>Serviço</th>
                            <th>Valor</th>
                            <th>Status</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php while($pedido = mysqli_fetch_assoc($resultado)){ ?>

                            <tr>

                                <td>
                                    <?= $pedido['cliente'] ?>
                                </td>

                                <td>
                                    <?= $pedido['servico'] ?>
                                </td>

                                <td>
                                    R$ <?= $pedido['valor'] ?>
                                </td>

                                <td>

                                    <?php if($pedido['valor'] > 500){ ?>

                                        <span class="badge bg-success">
                                            Prioritário
                                        </span>

                                    <?php } else { ?>

                                        <span class="badge bg-secondary">
                                            Normal
                                        </span>

                                    <?php } ?>

                                </td>

                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            <?php } ?>

        </div>

    </div>

</div>

<?php include 'templates/footer.php'; ?>