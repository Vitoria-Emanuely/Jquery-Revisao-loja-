<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Abas</title>

    <link rel="stylesheet" href="app/views/css/style.css">
    <link rel="shortcut icon" href="../favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            //Para testar o jquery
            // alert('Jquery OK');
            $("#abas ul li").addClass("selecionado");
            //Ao clicar em qualquer li
            $("#abas ul li").click(function () {
                //Alterna entre selecionado e não
                $(this).toggleClass("selecionado");

                //Descobrir id de quem foi clicado
                var meuId = $(this).attr("id");

                //Alterna a exibição do conteúdo correspondente
                $("."+meuId).toggle();

            });

        });

    </script>

</head>
<body>
<div id="abas">
    <?php foreach ($categorias as $categoria): ?>
        <ul>
            <li id="aba<?= $categoria->getId(); ?>"><?= $categoria->getNome(); ?></li>
        </ul>
    <?php endforeach; ?>
</div>

<div id="conteudos">
    <?php foreach ($produtos as $produto): ?>
        <div>
            <div class="conteudo<?= $produto->getId(); ?>"><?= $produto->getNome(); ?></div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>