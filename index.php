<?php include 'templates/header.php'; ?>

<?php

$servicos = [
    [
        "nome" => "Formatação",
        "descricao" => "Limpeza e otimização do computador",
        "preco" => 150
    ],

    [
        "nome" => "Criação de Sites",
        "descricao" => "Desenvolvimento de sites modernos",
        "preco" => 800
    ],

    [
        "nome" => "Instalação de Redes",
        "descricao" => "Configuração de redes empresariais",
        "preco" => 300
    ]
];

?>

<div class="text-center mb-5">

    <h1>Bem-vindo à TechFix</h1>

    <p>
        Soluções em tecnologia para sua empresa
    </p>

</div>

<p>
    A TechFix é uma empresa especializada em suporte técnico,
    manutenção de computadores, desenvolvimento de sites e
    soluções tecnológicas para empresas e clientes particulares.
</p>
<h2>Diferenciais</h2>

<ul>

    <li>Atendimento rápido</li>

    <li>Equipe qualificada</li>

    <li>Suporte remoto e presencial</li>

    <li>Orçamento sem compromisso</li>

</ul>


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

                <h5>
                    R$ <?= $servico['preco'] ?>
                </h5>

                <?php if($servico['preco'] > 500){ ?>

                    <span class="badge bg-success">
                        Serviço Premium
                    </span>

                <?php } ?>

                <button class="btn btn-primary mt-3">
                    Contratar
                </button>

            </div>

        </div>

    <?php } ?>

</div>

<div class="text-center mt-4">

    <button
        class="btn btn-success"
        onclick="mostrarPremium()">

        Ver Serviços Premium

    </button>

</div>

<h2>Precisa de ajuda?</h2>

    <p>
         Entre em contato conosco e solicite um orçamento.
    </p> 
    
    <a href="contato.php" class="btn btn-primary">
        Fale Conosco 
    </a>

<?php include 'templates/footer.php'; ?>