const servicos = [

    {
        nome: "Formatação",
        preco: 150
    },

    {
        nome: "Criação de Sites",
        preco: 800
    },

    {
        nome: "Instalação de Redes",
        preco: 300
    }

];

// Função com parâmetro e return

function buscarServicosPremium(valorMinimo){

    // Validação

    if(servicos.length === 0){

        return [];

    }

    return servicos.filter(function(servico){

        return servico.preco > valorMinimo;

    });

}

// Função que mostra os serviços premium

function mostrarPremium(){

    const premium = buscarServicosPremium(500);

    let mensagem = "Serviços Premium:\n\n";

    if(premium.length > 0){

        premium.forEach(function(servico){

            mensagem += servico.nome + " - R$ " + servico.preco + "\n";

        });

    }else{

        mensagem += "Nenhum serviço premium encontrado.";

    }

    alert(mensagem);

}