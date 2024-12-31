<?php
    include("banco_dados.php");
    $conector=new conexaoDB();
    $conexao=$conector->conectar();
    if (mysqli_errno($conexao)) {
        echo mysqli_error($conexao);
    } else {
        if ($query = mysqli_query($conexao, "select * from apresentacao")) {
            if ($linha = mysqli_fetch_row($query)) {
                $apresentacao = array(
                    "img" => $linha[2],
                    "alt" => $linha[3],
                    "autor" => $linha[0],
                    "descr" => $linha[1]
                );
                mysqli_free_result($query);
            }
        }
    
        if ($query = mysqli_query($conexao, "select * from postagem")) {
            $i = 1;
            $postagens = array();
            while ($linha = mysqli_fetch_row($query)) {
                $postagens[$i] = array(
                    "titulo" => $linha[1],
                    "subt" => $linha[2],
                    "data" => $linha[4],
                    "descr" => $linha[5],
                    "comentarios" => $linha[7],
                    "img" => $linha[3],
                    "alt" => $linha[6]
                );
                $i++;
            }
            mysqli_free_result($query);
        }
    
        if ($query = mysqli_query($conexao, "select * from top5")) {
            $i = 1;
            $populares = array();
            while ($linha = mysqli_fetch_row($query)) {
                $populares[$i] = array(
                    "img" => $linha[3],
                    "titulo" => $linha[1],
                    "comentarios" => $linha[2]
                );
                $i++;
            }
            mysqli_free_result($query);
        }
        if ($query = mysqli_query($conexao, "select * from categoria")) {
            $i = 0;
            $categorias = array();
            while ($linha = mysqli_fetch_row($query)) {
                $categorias[$i] = $linha[1];
                $i++;
            }
            mysqli_free_result($query);
        }
    }
    mysqli_close($conexao);
    include("blog.php");
?>