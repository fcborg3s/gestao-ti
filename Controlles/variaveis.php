<?php
//acao
if(isset($_POST['acao'])){
    $acao= filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['acao'])) {
   $acao= filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $acao=""; 
}


//codEmpresa
if(isset($_POST['codEmpresa'])){
    $codEmpresa= filter_input(INPUT_POST, 'codEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codEmpresa'])) {
   $codEmpresa= filter_input(INPUT_POST, 'codEmpresa', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codEmpresa=0; 
}

//nomeEmpresa
if(isset($_POST['nomeEmpresa'])){
    $nomeEmpresa= filter_input(INPUT_POST, 'nomeEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['nomeEmpresa'])) {
   $nomeEmpresa= filter_input(INPUT_POST, 'nomeEmpresa', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $nomeEmpresa=0; 
}


//cnpj
if(isset($_POST['cnpj'])){
    $cnpj= filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['cnpj'])) {
   $cnpj= filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $cnpj=0; 
}


//cidade
if(isset($_POST['cidade'])){
    $cidade= filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['cidade'])) {
   $cidade= filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $cidade=0; 
}

//codDepartamento
if(isset($_POST['codDepartamento'])){
    $codDepartamento= filter_input(INPUT_POST, 'codDepartamento', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codDepartamento'])) {
   $codDepartamento= filter_input(INPUT_POST, 'codDepartamento', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codDepartamento=0; 
}

//nomeDepartamento
if(isset($_POST['nomeDepartamento'])){
    $nomeDepartamento= filter_input(INPUT_POST, 'nomeDepartamento', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['nomeDepartamento'])) {
   $nomeDepartamento= filter_input(INPUT_POST, 'nomeDepartamento', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $nomeDepartamento=0; 
}


//codMarca
if(isset($_POST['codMarca'])){
    $codMarca= filter_input(INPUT_POST, 'codMarca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codMarca'])) {
   $codMarca= filter_input(INPUT_POST, 'codMarca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codMarca=0; 
}


//nomeMarca
if(isset($_POST['nomeMarca'])){
    $nomeMarca= filter_input(INPUT_POST, 'nomeMarca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['nomeMarca'])) {
   $nomeMarca= filter_input(INPUT_POST, 'nomeMarca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $nomeMarca=0; 
}

//codUsuario
if(isset($_POST['codUsuario'])){
    $codUsuario= filter_input(INPUT_POST, 'codUsuario', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codUsuario'])) {
   $codUsuario= filter_input(INPUT_POST, 'codUsuario', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codUsuario=0; 
}


//nomeUsuario
if(isset($_POST['nomeUsuario'])){
    $nomeUsuario= filter_input(INPUT_POST, 'nomeUsuario', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['nomeUsuario'])) {
   $nomeUsuario= filter_input(INPUT_POST, 'nomeUsuario', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $nomeUsuario=0; 
}


//login
if(isset($_POST['login'])){
    $login= filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['login'])) {
   $login= filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $login=0; 
}



//senha
if(isset($_POST['senha'])){
    $senha= filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['senha'])) {
   $senha= filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $senha=0; 
}


//codSituacao
if(isset($_POST['codSituacao'])){
    $codSituacao= filter_input(INPUT_POST, 'codSituacao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codSituacao'])) {
   $codSituacao= filter_input(INPUT_POST, 'codSituacao', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codSituacao=0; 
}


//situacao
if(isset($_POST['situacao'])){
    $situacao= filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['situacao'])) {
   $situacao= filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $situacao=0; 
}


//codTipoMaquina
if(isset($_POST['codTipoMaquina'])){
    $codTipoMaquina= filter_input(INPUT_POST, 'codTipoMaquina', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codTipoMaquina'])) {
   $codTipoMaquina= filter_input(INPUT_POST, 'codTipoMaquina', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codTipoMaquina=0; 
}

//tipo
if(isset($_POST['tipo'])){
    $tipo= filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['tipo'])) {
   $tipo= filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $tipo=0; 
}


//modelo
if(isset($_POST['modelo'])){
    $modelo= filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['modelo'])) {
   $modelo= filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $modelo=0; 
}

//valor
if(isset($_POST['valor'])){
    $valor= filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['valor'])) {
   $valor= filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $valor=0; 
}


//disco
if(isset($_POST['disco'])){
    $disco= filter_input(INPUT_POST, 'disco', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['disco'])) {
   $disco= filter_input(INPUT_POST, 'disco', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $disco=0; 
}

//memoria
if(isset($_POST['memoria'])){
    $memoria= filter_input(INPUT_POST, 'memoria', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['memoria'])) {
   $memoria= filter_input(INPUT_POST, 'memoria', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $memoria=0; 
}


//sistemaOperacional
if(isset($_POST['sistemaOperacional'])){
    $sistemaOperacional= filter_input(INPUT_POST, 'sistemaOperacional', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['sistemaOperacional'])) {
   $sistemaOperacional= filter_input(INPUT_POST, 'sistemaOperacional', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $sistemaOperacional=0; 
}

//processador
if(isset($_POST['processador'])){
    $processador= filter_input(INPUT_POST, 'processador', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['processador'])) {
   $processador= filter_input(INPUT_POST, 'processador', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $processador=0; 
}


//idAnydesk
if(isset($_POST['idAnydesk'])){
    $idAnydesk= filter_input(INPUT_POST, 'idAnydesk', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['idAnydesk'])) {
   $idAnydesk= filter_input(INPUT_POST, 'idAnydesk', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $idAnydesk=0; 
}



//senhaAnydesk
if(isset($_POST['senhaAnydesk'])){
    $senhaAnydesk= filter_input(INPUT_POST, 'senhaAnydesk', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['senhaAnydesk'])) {
   $senhaAnydesk= filter_input(INPUT_POST, 'senhaAnydesk', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $senhaAnydesk=0; 
}


//ip
if(isset($_POST['ip'])){
    $ip= filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['ip'])) {
   $ip= filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $ip=0; 
}

//nomeMaquina
if(isset($_POST['nomeMaquina'])){
    $nomeMaquina= filter_input(INPUT_POST, 'nomeMaquina', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['nomeMaquina'])) {
   $nomeMaquina= filter_input(INPUT_POST, 'nomeMaquina', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $nomeMaquina=0; 
}


//codEstadoMaquina
if(isset($_POST['codEstadoMaquina'])){
    $codEstadoMaquina= filter_input(INPUT_POST, 'codEstadoMaquina', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codEstadoMaquina'])) {
   $codEstadoMaquina= filter_input(INPUT_POST, 'codEstadoMaquina', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codEstadoMaquina=0; 
}


//codMaquina
if(isset($_POST['codMaquina'])){
    $codMaquina= filter_input(INPUT_POST, 'codMaquina', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codMaquina'])) {
   $codMaquina= filter_input(INPUT_POST, 'codMaquina', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codMaquina=0; 
}


//codManutencao
if(isset($_POST['codManutencao'])){
    $codManutencao= filter_input(INPUT_POST, 'codManutencao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codManutencao'])) {
   $codManutencao= filter_input(INPUT_POST, 'codManutencao', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codManutencao=0; 
}

//descricaoReparo
if(isset($_POST['descricaoReparo'])){
    $descricaoReparo= filter_input(INPUT_POST, 'descricaoReparo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['descricaoReparo'])) {
   $descricaoReparo= filter_input(INPUT_POST, 'descricaoReparo', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $descricaoReparo=0; 
}

//dataRecebimento
if(isset($_POST['dataRecebimento'])){
    $dataRecebimento= filter_input(INPUT_POST, 'dataRecebimento', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['dataRecebimento'])) {
   $dataRecebimento= filter_input(INPUT_POST, 'dataRecebimento', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $dataRecebimento=0; 
}


//dataDevolucao
if(isset($_POST['dataDevolucao'])){
    $dataDevolucao= filter_input(INPUT_POST, 'dataDevolucao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['dataDevolucao'])) {
   $dataDevolucao= filter_input(INPUT_POST, 'dataDevolucao', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $dataDevolucao=0; 
}

//status
if(isset($_POST['status'])){
    $status= filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['status'])) {
   $status= filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $status=0; 
}


//descricaoProblema
if(isset($_POST['descricaoProblema'])){
    $descricaoProblema= filter_input(INPUT_POST, 'descricaoProblema', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['descricaoProblema'])) {
   $descricaoProblema= filter_input(INPUT_POST, 'descricaoProblema', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $descricaoProblema=0; 
}

//codGarantia
if(isset($_POST['codGarantia'])){
    $codGarantia= filter_input(INPUT_POST, 'codGarantia', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codGarantia'])) {
   $codGarantia= filter_input(INPUT_POST, 'codGarantia', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codGarantia=0; 
}

//dataInicio
if(isset($_POST['dataInicio'])){
    $dataInicio= filter_input(INPUT_POST, 'dataInicio', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['dataInicio'])) {
   $dataInicio= filter_input(INPUT_POST, 'dataInicio', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $dataInicio=0; 
}

//notaFiscal
if(isset($_POST['notaFiscal'])){
    $notaFiscal= filter_input(INPUT_POST, 'notaFiscal', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['notaFiscal'])) {
   $notaFiscal= filter_input(INPUT_POST, 'notaFiscal', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $notaFiscal=0; 
}



//dataTermino
if(isset($_POST['dataTermino'])){
    $dataTermino= filter_input(INPUT_POST, 'dataTermino', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['dataTermino'])) {
   $dataTermino= filter_input(INPUT_POST, 'dataTermino', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $dataTermino=0; 
}


//codLicenca
if(isset($_POST['codLicenca'])){
    $codLicenca= filter_input(INPUT_POST, 'codLicenca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codLicenca'])) {
   $codLicenca= filter_input(INPUT_POST, 'codLicenca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codLicenca=0; 
}

//Licenca
if(isset($_POST['licenca'])){
    $licenca= filter_input(INPUT_POST, 'licenca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codLicenca'])) {
   $licenca= filter_input(INPUT_POST, 'licenca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $licenca=0; 
}



//Categoria
if(isset($_POST['categoria'])){
    $categoria= filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['categoria'])) {
   $categoria= filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $categoria=0; 
}



//quantidade
if(isset($_POST['quantidade'])){
    $quantidade= filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['quantidade'])) {
   $quantidade= filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $quantidade=0; 
}

//emUso
if(isset($_POST['emUso'])){
    $emUso= filter_input(INPUT_POST, 'emUso', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['emUso'])) {
   $emUso= filter_input(INPUT_POST, 'emUso', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $emUso=0; 
}

//sobressalente
if(isset($_POST['sobressalente'])){
    $sobressalente= filter_input(INPUT_POST, 'sobressalente', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['sobressalente'])) {
   $sobressalente= filter_input(INPUT_POST, 'sobressalente', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $sobressalente=0; 
}


//numero serie
if(isset($_POST['numeroSerie'])){
    $numeroSerie= filter_input(INPUT_POST, 'numeroSerie', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['numeroSerie'])) {
   $numeroSerie= filter_input(INPUT_POST, 'numeroSerie', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $numeroSerie=0; 
}

//vencimento
if(isset($_POST['vencimento'])){
    $vencimento= filter_input(INPUT_POST, 'vencimento', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['vencimento'])) {
   $vencimento= filter_input(INPUT_POST, 'vencimento', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $vencimento=0; 
}


//codMudanca
if(isset($_POST['codMudanca'])){
    $codMudanca= filter_input(INPUT_POST, 'codMudanca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codMudanca'])) {
   $codMudanca= filter_input(INPUT_POST, 'codMudanca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codMudanca=0; 
}


//dataMudanca
if(isset($_POST['dataMudanca'])){
    $dataMudanca= filter_input(INPUT_POST, 'dataMudanca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['dataMudanca'])) {
   $dataMudanca= filter_input(INPUT_POST, 'dataMudanca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $dataMudanca=0; 
}


//tipoMudanca
if(isset($_POST['tipoMudanca'])){
    $tipoMudanca= filter_input(INPUT_POST, 'tipoMudanca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['tipoMudanca'])) {
   $tipoMudanca= filter_input(INPUT_POST, 'tipoMudanca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $tipoMudanca=0; 
}


//codEmpresaAnterior
if(isset($_POST['codEmpresaAnterior'])){
    $codEmpresaAnterior= filter_input(INPUT_POST, 'codEmpresaAnterior', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codEmpresaAnterior'])) {
   $codEmpresaAnterior= filter_input(INPUT_POST, 'codEmpresaAnterior', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codEmpresaAnterior=0; 
}

//codEmpresaNova
if(isset($_POST['codEmpresaNova'])){
    $codEmpresaNova= filter_input(INPUT_POST, 'codEmpresaNova', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codEmpresaNova'])) {
   $codEmpresaNova= filter_input(INPUT_POST, 'codEmpresaNova', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codEmpresaNova=0; 
}



//codDepartamentoAnterior
if(isset($_POST['codDepartamentoAnterior'])){
    $codDepartamentoAnterior= filter_input(INPUT_POST, 'codDepartamentoAnterior', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codDepartamentoAnterior'])) {
   $codDepartamentoAnterior= filter_input(INPUT_POST, 'codDepartamentoAnterior', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codDepartamentoAnterior=0; 
}



//codDepartamentoNovo
if(isset($_POST['codDepartamentoNovo'])){
    $codDepartamentoNovo= filter_input(INPUT_POST, 'codDepartamentoNovo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codDepartamentoNovo'])) {
   $codDepartamentoNovo= filter_input(INPUT_POST, 'codDepartamentoNovo', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codDepartamentoNovo=0; 
}


//qtMaquina
if(isset($_POST['qtMaquina'])){
    $qtMaquina= filter_input(INPUT_POST, 'qtMaquina', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['qtMaquina'])) {
   $qtMaquina= filter_input(INPUT_POST, 'qtMaquina', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $qtMaquina=0; 
}


//codServidor
if(isset($_POST['codServidor'])){
    $codServidor= filter_input(INPUT_POST, 'codServidor', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codServidor'])) {
   $codServidor= filter_input(INPUT_POST, 'codServidor', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codServidor=0; 
}


//ipServidor
if(isset($_POST['ipServidor'])){
    $ipServidor= filter_input(INPUT_POST, 'ipServidor', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['idServidor'])) {
   $ipServidor= filter_input(INPUT_POST, 'ipServiodor', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $ipServidor=0; 
}


//servico
if(isset($_POST['servico'])){
    $servico= filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['servico'])) {
   $servico= filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $servico=0; 
}

//usuarioServidor
if(isset($_POST['usuarioServidor'])){
    $usuarioServidor= filter_input(INPUT_POST, 'usuarioServidor', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['usuarioServidor'])) {
   $usuarioServidor= filter_input(INPUT_POST, 'usuarioServidor', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $usuarioServidor=0; 
}

//senhaServidor
if(isset($_POST['senhaServidor'])){
    $senhaServidor= filter_input(INPUT_POST, 'senhaServidor', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['senhaServidor'])) {
   $senhaServidor= filter_input(INPUT_POST, 'senhaServidor', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $senhaServidor=0; 
}

//sistemaOperacional
if(isset($_POST['sistemaOperacional'])){
    $sistemaOperacional= filter_input(INPUT_POST, 'sistemaOperacional', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['sistemaOperacional'])) {
   $sistemaOperacional= filter_input(INPUT_POST, 'sistemaOperacional', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $sistemaOperacional=0; 
}

//portaLocal
if(isset($_POST['portaLocal'])){
    $portaLocal= filter_input(INPUT_POST, 'portaLocal', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['portaLocal'])) {
   $portaLocal= filter_input(INPUT_POST, 'portaLocal', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $portaLocal=0; 
}


//portaExterna
if(isset($_POST['portaExterna'])){
    $portaExterna= filter_input(INPUT_POST, 'portaExterna', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['portaExterna'])) {
   $portaExterna= filter_input(INPUT_POST, 'portaExterna', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $portaExterna=0; 
}

//dvrs

//codDvr
if(isset($_POST['codDvr'])){
    $codDvr= filter_input(INPUT_POST, 'codDvr', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codDvr'])) {
   $codDvr= filter_input(INPUT_POST, 'codDvr', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codDvr=0; 
}

//ipDvr
if(isset($_POST['ipDvr'])){
    $ipDvr= filter_input(INPUT_POST, 'ipDvr', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['ipDvr'])) {
   $ipDvr= filter_input(INPUT_POST, 'ipDvr', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $ipDvr=0; 
}

//nomeDvr
if(isset($_POST['nomeDvr'])){
    $nomeDvr= filter_input(INPUT_POST, 'nomeDvr', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['nomeDvr'])) {
   $nomeDvr= filter_input(INPUT_POST, 'nomeDvr', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $nomeDvr=0; 
}

//porta
if(isset($_POST['porta'])){
    $porta= filter_input(INPUT_POST, 'porta', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['porta'])) {
   $porta= filter_input(INPUT_POST, 'porta', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $porta=0; 
}


//porta
if(isset($_POST['local'])){
    $local= filter_input(INPUT_POST, 'local', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['local'])) {
   $local= filter_input(INPUT_POST, 'local', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $local=0; 
}


//codCustoFixo
if(isset($_POST['codCustoFixo'])){
    $codCustoFixo= filter_input(INPUT_POST, 'codCustoFixo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codCustoFixo'])) {
   $codCustoFixo= filter_input(INPUT_POST, 'codCustoFixo', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codCustoFixo=0; 
}

//nomeServico
if(isset($_POST['nomeServico'])){
    $nomeServico= filter_input(INPUT_POST, 'nomeServico', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['nomeServico'])) {
   $nomeServico= filter_input(INPUT_POST, 'nomeServico', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $nomeServico=0; 
}


//qtLicenca
if(isset($_POST['qtLicenca'])){
    $qtLicenca= filter_input(INPUT_POST, 'qtLicenca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['qtLicenca'])) {
   $qtLicenca= filter_input(INPUT_POST, 'qtLicenca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $qtLicenca=0; 
}


//valorMensal
if(isset($_POST['valorMensal'])){
    $valorMensal= filter_input(INPUT_POST, 'valorMensal', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['valorMensal'])) {
   $valorMensal= filter_input(INPUT_POST, 'valorMensal', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $valorMensal=0; 
}


//codRoteador
if(isset($_POST['codRoteador'])){
    $codRoteador= filter_input(INPUT_POST, 'codRoteador', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['codRoteador'])) {
   $codRoteador= filter_input(INPUT_POST, 'codRoteador', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $codRoteador=0; 
}

//marca
if(isset($_POST['marca'])){
    $marca= filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['marca'])) {
   $marca= filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $marca=0; 
}

//ip
if(isset($_POST['ip'])){
    $ip= filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['ip'])) {
   $ip= filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $ip=0; 
}



//nomeRede
if(isset($_POST['nomeRede'])){
    $nomeRede= filter_input(INPUT_POST, 'nomeRede', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['nomeRede'])) {
   $nomeRede= filter_input(INPUT_POST, 'nomeRede', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $nomeRede=0; 
}

//senhaWifi
if(isset($_POST['senhaWifi'])){
    $senhaWifi= filter_input(INPUT_POST, 'senhaWifi', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['senhaWifi'])) {
   $senhaWifi= filter_input(INPUT_POST, 'senhaWifi', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $senhaWifi=0; 
}


//local
if(isset($_POST['local'])){
    $local= filter_input(INPUT_POST, 'local', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['local'])) {
   $local= filter_input(INPUT_POST, 'local', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $local=0; 
}

//senha
if(isset($_POST['senha'])){
    $senha= filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['senha'])) {
   $senha= filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $senha=0; 
}


//usuario
if(isset($_POST['usuario'])){
    $usuario= filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset ($_GET['usuario'])) {
   $usuario= filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS); 
} else {
   $usuario=0; 
}

