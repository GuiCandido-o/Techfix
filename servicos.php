<?php include 'templates/header.php'; ?>

<?php

$servicos = [

    [
        "nome" => "Formatação",
        "descricao" => "Limpeza e otimização do computador",
        "preco" => 150,
        "categoria" => "Manutenção"
    ],

    [
        "nome" => "Criação de Sites",
        "descricao" => "Desenvolvimento de sites modernos",
        "preco" => 800,
        "categoria" => "Desenvolvimento"
    ],

    [
        "nome" => "Instalação de Redes",
        "descricao" => "Configuração de redes empresariais",
        "preco" => 300,
        "categoria" => "Redes"
    ],

    [
        "nome" => "Consultoria em TI",
        "descricao" => "Suporte e consultoria para empresas",
        "preco" => 1200,
        "categoria" => "Consultoria"
    ]

];

?>

<div class="text-center mb-5">

    <h1>Nossos Serviços</h1>

    <p>
        Conheça os serviços disponíveis da TechFix
    </p>

</div>

<div class="row">

    <?php foreach($servicos as $servico){ ?>

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