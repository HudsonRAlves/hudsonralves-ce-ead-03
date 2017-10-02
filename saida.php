<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Document</title>

<style>
#concluiu {
    color:red;
}

td, p, h1, table {
   text-align:center;
}

img {
    align-items:center;
}

</style>

    </head>
    <body>

        <?php
        $nomeAluno = $_POST['nomeAluno'];
        $nomeDisciplina = $_POST['nomeDisciplina'];
        $nomeCurso = $_POST['nomeCurso'];
        $linkImagem = $_POST['linkImagem'];
        $notaVa1 = $_POST['notaVa1'];
        $notaVa2 = $_POST['notaVa2'];
        $notaVa3 = $_POST['notaVa3'];
        $notaTrabalho = $_POST['notaTrabalho'];
        $nomeProfessor = $_POST['nomeProfessor'];
        $nomeCoordenador = $_POST['nomeCoordenador'];
        $mediaNotas = $notaVa1 + $notaVa2 + $notaVa3 + $notaTrabalho;
        


if ($mediaNotas >= 90) {
      $resultado = "Excelente";
      $concluiu = "";
    } else  {
    if ($mediaNotas >= 80) {
        $resultado = "Ótimo"; $concluiu = "";
    } else  {
        if ($mediaNotas >= 70) {
           $resultado = "Bom"; $concluiu = "";
        }  else {
           if ($mediaNotas >= 60) {
                 $resultado = "Ruim"; $concluiu = "";
            } else { 
                $resultado = "Péssimo";
                $concluiu = "NÃO";
            } 
          }
        }
}

 ?>

        <p><img src="<?= $linkImagem?>" alt="Imagem" width="200"></p>

        <h1>DECLARAÇÃO</h1>

        <p>Declaramos, para os devidos fins que <?= $nomeAluno;?>, <span id="concluiu"><?=$concluiu?></span> concluiu satisfatoriamente as atividade da disciplina <?= $nomeDisciplina; ?> do curso <?= $nomeCurso;?>.</p>

        <p>Segue desempenho do <?= $nomeAluno;?>.</p>

        <table border="1" align="center">
            <thead>
                <tr>
                    <th>
                    Critério
                    </th>

                    <th>
                    Valor Total
                    </th>
                    
                    <th>
                    Nota do Aluno
                    </th>

                    <th>
                    Desempenho(%)
                    </th>
                </tr>
            </thead>

                <tbody>
                    <tr>
                        <td>
                        Prova 1
                        </td>

                        <td>
                        15  
                        </td>

                        <td>
                        <?=$notaVa1?>
                        </td>

                        <td>
                        <?=round($notaVa1/15*100)?>%
                        </td> 

                    </tr>
                
                    <tr>
                        <td>
                        Prova 2
                        </td>

                        <td>
                        25
                        </td>

                        <td>
                        <?=$notaVa2?>
                        </td>

                        <td>
                        <?=round($notaVa2/25*100)?>%
                        </td> 

                    </tr>
                    
                    <tr>
                        <td>
                        Prova 3
                        </td>

                        <td>
                        35
                        </td>

                        <td>
                        <?=$notaVa3?>
                        </td>

                        <td>
                        <?=round($notaVa3/35*100)?>%
                        </td> 

                    </tr>

                    <tr>
                        <td>
                        Trabalhos
                        </td>

                        <td>
                        25
                        </td>

                        <td>
                        <?=$notaTrabalho?>
                        </td>

                        <td>
                        <?=round($notaTrabalho/25*100)?>%
                        </td> 

                    </tr>
                </tbody>
    </table>

        <p>Com esse resultado, o conceito de <?=$nomeAluno?> foi <?= $resultado;?>, já que o total de sua nota
        foi de <?= $mediaNotas;?> pontos. </p><br>

        <p>Belo Horizonte, <?= date("d/m/y");?>.</p><br>

        <p>_______________________________________________</p>
        <p><?= $nomeProfessor;?> - Professor(a)</p> <br>

        <p>_______________________________________________</p>
        <p><?= $nomeCoordenador;?> - Coordenador(a)</p> 

    </body>
</html>