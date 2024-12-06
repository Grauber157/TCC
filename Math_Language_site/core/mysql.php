<?php
    //INSERE
    function Inserir(string $entidade, array $dados) : bool
    {
        $retorno = false;

        foreach ($dados as $campo => $dado)
        {
            $coringa[$campo] = '?';
            $tipo[] = gettype($dado) [0];
            $$campo = $dado;
        }

        $instrucao = Insert($entidade, $coringa);
        #atribui valor a variavel '$conexao'
        $conexao = conectar();
        #cria o statement
        $stmt = mysqli_prepare($conexao, $instrucao);
        echo('mysqli_stmt_bind_param($stmt, \'' . implode('', $tipo) . '\', $' . implode(', $', array_keys($dados)) . ');');
        eval('mysqli_stmt_bind_param($stmt, \'' . implode('', $tipo) . '\', $' . implode(', $', array_keys($dados)) . ');');

        mysqli_stmt_execute($stmt);

        $retorno = (boolean) mysqli_stmt_affected_rows($stmt);

        $_SESSION['errors'] = mysqli_stmt_error_list($stmt);

        mysqli_stmt_close($stmt);

        desconectar($conexao);

        return $retorno;
    }

    //ATUALIZA
    function Atualizar(string $entidade, array $dados, array $criterio = []) : bool
    {
        $retorno = false;

        foreach ($dados as $campo => $dado)
        {
            $coringa_dados[$campo] = '?';
            $tipo[] = gettype($dado) [0];
            $$campo = $dado;
        }

        foreach ($criterio as $expressao)
        {
            $dado = $expressao[count($expressao) -1];

            $tipo[] = gettype($dado) [0];
            $expressao[count($expressao) - 1] = '?';
            $coringa_criterio[] = $expressao;

            $nome_campo = (count($expressao) < 4) ? $expressao[0] : $expressao[1];

            if(isset($nome_campo))
            {
                $nome_campo = $nome_campo . '_' . rand();
            }
 
            $campos_criterio[] = $nome_campo;

            $$nome_campo = $dado;
        }

        $instrucao = update($entidade, $coringa_dados, $coringa_criterio);
        $conexao = conectar();

        $stmt = mysqli_prepare($conexao, $instrucao);

        if(isset($tipo))
        {
            $comando = 'mysqli_stmt_bind_param($stmt,';
            $comando .= "'" . implode('', $tipo) . "'";
            $comando .= ', $' . implode(', $', array_keys($dados));
            $comando .= ', $' . implode(', $', $campos_criterio);
            $comando .= ');';

            eval($comando);
        }

        mysqli_stmt_execute($stmt);

        $retorno = (boolean) mysqli_stmt_affected_rows($stmt);

        $_SESSION['errors'] = mysqli_stmt_error_list($stmt);

        mysqli_stmt_close($stmt);

        desconectar($conexao);

        return $retorno;
    }

    //DELETAR
    function Deletar(string $entidade, array $criterio = []) : bool
    {
        $retorno = false;
    
        $coringa_criterio = [];
    
        foreach ($criterio as $expressao) 
        {
            $dado = $expressao[count($expressao) -1];
    
            $tipo[] = gettype($dado)[0];
            $expressao[count($expressao) -1] = '?';
            $coringa_criterio[] = $expressao;
    
            $nome_campo = (count($expressao) < 4) ? $expressao[0] : $expressao[1];
    
            $campos_criterio[] = $nome_campo;
    
            $$nome_campo = $dado;
        }
    
        $instrucao = delete($entidade, $coringa_criterio);
    
        $conexao = conectar();
    
        $stmt = mysqli_prepare($conexao, $instrucao);
    
        if(isset($tipo))
        {
            $comando = 'mysqli_stmt_bind_param($stmt,';
            $comando .= "'" . implode('', $tipo). "'";
            $comando .= ', $' . implode(', $', $campos_criterio);
            $comando .= ');';
    
            eval($comando);
        }
    
        mysqli_stmt_execute($stmt);
    
        $retorno = (boolean) mysqli_stmt_affected_rows($stmt);
    
        $_SESSION['errors'] = mysqli_stmt_error_list($stmt);
    
        mysqli_stmt_close($stmt);
    
        desconectar($conexao);
    
        return $retorno;
    }

    //BUSCAR
    function Buscar(string $entidade, array $campos = ['*'], array $criterio = [], string $ordem = null) : array
    {
        $retorno = false;
        #'$coringa_criterio' será usado para construir a cláusula 'WHERE' da consulta com os valores substituídos por '?'
        $coringa_criterio = [];

        foreach ($criterio as $expressao) 
        {
            $dado = $expressao[count($expressao) -1];
            #pega os tipos da variavel, (ex: 's', 'i')
            $tipo [] = gettype($dado) [0];
            $expressao[count($expressao) -1] = '?';
            $coringa_criterio[] = $expressao;

            $nome_campo = (count($expressao) < 4) ? $expressao[0] : $expressao[1];
            
            if(isset($$nome_campo)) 
            {
                $nome_campo = $nome_campo . '_' . rand();
            }

            $campos_criterio[] = $nome_campo;

            $$nome_campo = $dado;
        }
        #pega os valores do banco
        $instrucao = select($entidade, $campos, $coringa_criterio, $ordem);
        #conecta com o banco
        $conexao = conectar();
        #prepara o comando MySQL
        $stmt = mysqli_prepare($conexao, $instrucao);

        if(isset($tipo))
        {
            $comando = 'mysqli_stmt_bind_param($stmt,';
            $comando .= "'" . implode('', $tipo). "'";
            $comando .= ', $' . implode(', $', $campos_criterio);
            $comando .= ');';

            eval($comando);
        }

        #executa o statement criado pelo 'eval()'
        mysqli_stmt_execute($stmt);

        if($result = mysqli_stmt_get_result($stmt))
        {
            $retorno = mysqli_fetch_all($result, MYSQLI_ASSOC);

            mysqli_free_result($result);
        }

        #armazena os erros na superglobal '$_SESSION'
        $_SESSION['errors'] = mysqli_stmt_error_list($stmt);
        mysqli_stmt_close($stmt);
        desconectar($conexao);
        $retorno = $retorno;
        return $retorno;
    }

    //BUSCA FORÇADA
    function BuscarSql(string $sql) : array
    {
        $retorno = false;
        $instrucao = $sql;
        #conecta com o banco
        $conexao = conectar();
        #prepara o comando MySQL
        $stmt = mysqli_prepare($conexao, $instrucao);

        #executa o statement criado pelo 'eval()'
        mysqli_stmt_execute($stmt);

        if($result = mysqli_stmt_get_result($stmt))
        {
            $retorno = mysqli_fetch_all($result, MYSQLI_ASSOC);

            mysqli_free_result($result);
        }

        #armazena os erros na superglobal '$_SESSION'
        $_SESSION['errors'] = mysqli_stmt_error_list($stmt);
        mysqli_stmt_close($stmt);
        desconectar($conexao);
        $retorno = $retorno;
        return $retorno;
    }

    //ATUALIZAR FORÇADA
    function DeletarSql(string $sql)
    {
        $instrucao = $sql;
        #conecta com o banco
        $conexao = conectar();
        #prepara o comando MySQL
        $stmt = mysqli_prepare($conexao, $instrucao);

        #executa o statement criado pelo 'eval()'
        mysqli_stmt_execute($stmt);

        if($result = mysqli_stmt_get_result($stmt))
        {
            mysqli_free_result($result);
        }

        #armazena os erros na superglobal '$_SESSION'
        $_SESSION['errors'] = mysqli_stmt_error_list($stmt);
        mysqli_stmt_close($stmt);
        desconectar($conexao);
    }

    //COMANDO MYSQL DIRETO
    function ComandoSql($sql)
    {
        $instrucao = $sql;
        #conecta com o banco
        $conexao = conectar();
        #prepara o comando MySQL
        $stmt = mysqli_prepare($conexao, $instrucao);
        #executa o statement
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        desconectar($conexao);
    }
?>