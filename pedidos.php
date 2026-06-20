<?php include 'templates/header.php'; ?>

<?php

$pedidos = [

    [
        "cliente" => "João",
        "servico" => "Formatação",
        "valor" => 150
    ],

    [
        "cliente" => "Maria",
        "servico" => "Criação de Sites",
        "valor" => 800
    ],

    [
        "cliente" => "Carlos",
        "servico" => "Instalação de Redes",
        "valor" => 300
    ]

];

?>

<div class="row justify-content-center">

    <div class="col-md-10">

        <div class="card p-4">

            <h2 class="text-center mb-4">
                Lista de Pedidos
            </h2>

            <?php if(empty($pedidos)){ ?>

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

                        <?php foreach($pedidos as $pedido){ ?>

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