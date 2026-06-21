<?php include 'templates/header.php'; ?>
<?php include 'config/conexao.php'; ?>

<?php

// Antes era um array fixo, agora os dados vêm do banco
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

                <button class="btn btn-primary">

                    Contratar

                </button>

            </div>

        </div>

    <?php } ?>

</div>

<?php include 'templates/footer.php'; ?>