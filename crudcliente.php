<?php
    require_once 'conexao.inc.php';
    if (isset($_GET['opc'])){
        switch ($_GET['opc']) {
            case 1:
                $nome = $_POST['nome'];
                $cpf = $_POST['cpf'];
                $email = $_POST['email'];
                
                $sql = "insert into clientes (id, nome, cpf, email) values (null,'$nome', '$cpf', '$email')";
                if (mysqli_query($conexao, $sql)) {
                    header("Location: index.php?pg=listar");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
                }
                break;
            case 2:
                $id = 0;
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                $sql = "delete from clientes where id=$id";// (id, nome, cpf, email) values (null,'$nome', '$cpf', '$email')";
                if(mysqli_query($conexao, $sql)){
                    header("Location: index.php?pg=listar");                    
                }else{
                    echo "erro ao deletar";
                }
                
                /*
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<p><strong>"+$row['id']+"</strong> - "+$row['nome']+$row['email']+"</p><br>";
                    }
                } else {
                    echo "Sem resultado!";
                }*/
                break;
            default:
                header("Location: index.php");
                /*<script language= "JavaScript">
                location.href="http://www.site_a_ser_redirecionado.com"
                </script>*/
                break;
        }
    }else{
        $sql = "SELECT * from clientes";// (id, nome, cpf, email) values (null,'$nome', '$cpf', '$email')";
        //echo "teste1<br>";
        $result = mysqli_query($conexao, $sql);
        //echo "teste2<br>";
        if($result){
            $num = mysqli_num_rows($result);
            //echo $num."<br>!!!";
            if ( $num > 0) {
                //echo "teste3<br>";
                echo "<table>";
                echo "<tr><td>ID</td><td>Nome</td><td>CPF</td><td>E-mail</td><td>Deletar</td></tr>";
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "  <td>".$row['id']."</td>";
                    echo "  <td>".$row['nome']."</td>";
                    echo "  <td>".$row['cpf']."</td>";
                    echo "  <td>".$row['email']."</td>";
                    echo "  <td><a href='crudcliente.php?opc=2&id=".$row['id']."'>X</a></td>";
                    //echo "<p><strong>".$row['id']."</strong> - ".$row['nome'].$row['email']."</p><br>";
                    echo "<tr>";
                }
                echo "</table>";
            } else {
                echo "Sem resultado!";
            }
        }
        
    }
    mysqli_close($conexao);
?>
