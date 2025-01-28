<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dados.css">
    <title>Novo Cadastro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ícones do FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body style="background-image: url('../img/fundopiscina.png'); background-size: cover; background-repeat: no-repeat;">

    <!-- Título -->
    <h2 class="title">Novo Cadastro</h2>
    <!-- Linha abaixo do título -->
    <div class="title-line"></div>

    <div class="container-wrapper">
        <!-- Container azul -->
        <div class="custom-container w-60">
            <form class="search-box">
                <div class="input-group shadow">
                    <div class="row">

                        <!-- Dados Pessoais -->
                        <h3>Dados pessoais:</h3>
                        <div class="mb-3">
                            <label for="nomecompleto" class="form-label">Nome completo:</label>
                            <input type="text" class="form-control" id="nomecompleto" placeholder="NOME COMPLETO">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" id="email" placeholder="E-MAIL">
                        </div>
                        <div class="mb-4">
                            <label for="nomesocial" class="form-label">Nome social:</label>
                            <input type="text" class="form-control" id="nomesocial" placeholder="NOME SOCIAL">
                        </div>
                        <div class="col-md-6">
                            <label for="datadenascimento" class="form-label">Data de nascimento:</label>
                            <input type="date" class="form-control" id="datadenascimento">
                        </div>
                        <div class="col-md-4">
                            <label for="sexo" class="form-label">Sexo:</label>
                            <select id="sexo" class="form-select">
                                <option selected>...</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="cpf" placeholder="CPF">
                        </div>
                        <div class="col-md-6">
                            <label for="rg" class="form-label">RG:</label>
                            <input type="text" class="form-control" id="rg" placeholder="RG">
                        </div>
                        <div class="col-md-6">
                            <label for="estadocivil" class="form-label">Estado civil:</label>
                            <input type="text" class="form-control" id="estadocivil" placeholder="ESTADO CIVIL">
                        </div>
                        <div class="col-md-6">
                            <label for="profissao" class="form-label">Profissão:</label>
                            <input type="text" class="form-control" id="profissao" placeholder="PROFISSÃO">
                        </div>
                        <div class="col-md-6">
                            <label for="contato" class="form-label">Contato:</label>
                            <input type="text" class="form-control" id="contato" placeholder="CONTATO">
                        </div>
                        <div class="col-md-6">
                            <label for="whats" class="form-label">Whatsapp:</label>
                            <input type="text" class="form-control" id="whats" placeholder="WHATSAPP">
                        </div>

                        <!-- Dados de Emergência -->
                        <h3 class="emergencia">Dados de emergência:</h3>
                        <div class="col-md-6">
                            <label for="responsavel" class="form-label">Responsável:</label>
                            <input type="text" class="form-control" id="responsavel" placeholder="RESPONSÁVEL">
                        </div>
                        <div class="col-md-6">
                            <label for="contatoe" class="form-label">Contato:</label>
                            <input type="text" class="form-control" id="contatoe" placeholder="CONTATO">
                        </div>
                        <div class="col-md-4">
                            <label for="parentesco" class="form-label">Parentesco:</label>
                            <select id="parentesco" class="form-select">
                                <option selected>...</option>
                                <option>Pai</option>
                                <option>Mãe</option>
                                <option>Irmão (A) </option>
                                <option>Tio (A) </option>
                                <option>Primo (A) </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="obs" class="form-label">Observação:</label>
                            <textarea class="form-control" id="obs" rows="3" placeholder="OBSERVAÇÕES"></textarea>
                        </div>

                        <!-- Endereço -->
                        <h4 class="emergencia">Endereço:</h4>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="ENDEREÇO">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Complemento:</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, casa, estúdio, etc.">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Cidade:</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="CIDADE">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado:</label>
                            <select id="inputState" class="form-select">
                                <option selected>Escolha...</option>
                                <option>AC - Acre</option>
                                <option>AL - Alagoas</option>
                                <option>AP - Amapá</option>
                                <!-- Demais estados aqui -->
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="cep" class="form-label">CEP:</label>
                            <input type="text" class="form-control" id="cep" placeholder="00000-000">
                        </div>

                        <!-- Termos e Cadastro -->
                        <div class="termos">
                            <input class="form-check-input" type="checkbox" id="termos">
                            <label class="form-check-label" for="termos">
                                Você aceita todos os nossos <a href="URL_DO_LINK" style="font-weight: bold; text-decoration: none;">TERMOS</a>?
                            </label>
                        </div>
                        <div class="cadastrarbtn">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>
