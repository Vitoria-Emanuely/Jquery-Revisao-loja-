<?php

require_once "app/models/CrudCategoria.php";
require_once "app/models/CrudProdutos.php";

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao) {
    case 'index':
        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();

        $prodcrud = new CrudProdutos();
        $produtos = $prodcrud->getProdutos();

        include 'app/views/templates/cabecalho.php';
        include 'app/views/principal/index.php';
        include 'app/views/templates/rodape.php';
        break;

}