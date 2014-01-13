
<style>
    .Preto{
        color :Black;
    } .Vermelho{
        color :red;
    } .Branco{
        color :White;
    }
</style> <center> <?php

    
    require_once("menu.php");
  
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        print "<dl>"; foreach($cadastros as $produto){
            $nome = $produto["nome"]; $novo = $produto["novo"]; $entrega =
            $produto["entrega"]; $detalhes = $produto["detalhes"]; $aceito =
            $produto["aceito"]; $cor = $produto["cor"];
            
        } if($produto != null){
                print "<dd>Nome do Produto: " . $nome . "</dd>"; print
                "<dd>Prazo Entrega do produto : " . $produto["entrega"] .
                "</dd>"; print "<dd>Detalhes do produto :" .
                $produto["detalhes"] . "</dd>";
                 print "<dd>Cor do Produto :" . $produto["cor"] . "</dd>";
                print "<dd>Produto Novo ?: ";
                
                if($aceito){
                    echo "Sim";
                }
            
                else{
                    print "Não";
                } print "</dd>";
              
        }
        
    }
    
    else{
        print "Não Existem Produtos Cadastrados";
    }

?>

</center>
