<?php include 'templates/header.php'; ?>

<?php

if(isset($_POST['enviar'])){

    echo '

    <div class="alert alert-success">

        Mensagem enviada com sucesso!

    </div>

    ';

}

?>

<h1 class="text-center mb-4 titulo-principal">

    Contato

</h1>

<div class="card p-4 formulario-contato">

    <form method="POST">

        <label class="form-label">

            Nome

        </label>

        <input
            type="text"
            class="form-control mb-3"
            name="nome">

        <label class="form-label">

            Email

        </label>

        <input
            type="email"
            class="form-control mb-3"
            name="email">

        <label class="form-label">

            Mensagem

        </label>

        <textarea
            class="form-control mb-3"
            rows="4"
            name="mensagem"></textarea>

        <button
            type="submit"
            name="enviar"
            class="btn btn-primary">

            Enviar

        </button>

    </form>

</div>

<?php include 'templates/footer.php'; ?>