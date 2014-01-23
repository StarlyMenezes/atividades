<?php
function validaPessoa($nome, $cpf, $nascimento, $sexo, $estado, $telefone, $observacoes){

    $formValidados = true;
    
    
    $nome = trim($nome);
    if(empty($nome)){
        echo "Por Favor Digite o Nome.";
        echo"</br>";
        $formValidados = false;
    }
    else if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉíÍìÌôÔõÕóÓúÚùÙûÛçÇ\s]+$/", $nome)){
        echo "Formato Inválido Para o Campo Nome";
        echo"</br>";
        $formValidados = false;
    }
    
    $cpf = trim($cpf); 
    if(empty($cpf)){
        echo "O Campo CPF é Obrigatório <br/> ";
        $formValidados = false;
    }
    else if(!preg_match("/^\d{3}\\.\d{3}\\.\d{3}\\-\d{2}$/", $cpf)){
        echo "Formato inválido para o campo cpf";
        echo"</br>";
        $formValidados = false;
    }
    
    $sexo = null;
    if(!isset($sexo)){
        $sexo = $sexo;
    }
    else{
        echo "Selecione um Sexo";
        echo"</br>";
        $formValidados = false;
    }
    
    
    if($estado == -1){
        print"Por Favor Selecione Um Estado.";
        echo"</br>";
        $formValidados = false;   
    }
    
    
    $telefone = trim($telefone);
    if(empty($telefone)){
        echo "O Campo Telefone é Obrigatório <br/> ";
        $formValidados = false;
    }
    if(!preg_match("/^\d{4}-\d{4}$/", $telefone) and
       (!preg_match("/^\d{3}?\s\d{4}\\-\d{4}$/" , $telefone))){
        echo "Formato inválido para o campo telefone";
        echo"</br>";
        $formValidados = false;
    }

    $observacoes = trim($observacoes);
    if(empty($observacoes)){
        echo "O Campo Observações é Obrigatório";
        echo"</br>";
        $formValidados = false;
    }
    else if(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉíÍìÌôÔõÕóÓúÚùÙûÛçÇ\s\\.\\,]+$/", $observacoes)){
        echo "Formato Inválido Para o Campo Observacão.";
        echo"</br>";
        $formValidados = false;
    }
    $sexo = null;
    if(!isset($sexo["sexo"])){
        $sexo = $sexo["sexo"];
    }
    else{
        echo "Por Favor,Selecione o Sexo.";
        echo"</br>";
        $formValidados = false;
    } 
    
    $nascimento = trim($nascimento);
        if(empty($nascimento)){
            echo "Por favor preencha a data <br/>";
            $formValidados = false;       
        }
        else if(!preg_match("/^\d{2}\\/\d{2}\\/\d{4}$/", $nascimento)){
            echo "Formato inválido de data. Utilize o formato dd/mm/aaaa";
            $formValidos = false;               
        }
        else{
            $pedacos = explode('/', $nascimento);
            $dia = $pedacos[0];
            $mes = $pedacos[1];
            $ano = $pedacos[2];    

            if(!checkdate($mes, $dia, $ano)){
                echo "Data  é inválida";
                echo"</br>";
                $formValidados = false;                           
            }
            
            else{

                $dataYmd = $ano.$mes.$dia;
                $dataAtual = date('Ymd');
                
           
                
             if($dataAtual < $dataYmd){
                    echo "Não Existe Nascimento No Futuro.<br/>" ;
                    $formValidados = false;
                }
                
                
               
            }
        }       
    
    return $formValidados;
}
    


?>
