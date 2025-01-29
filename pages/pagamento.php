<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pagamento.css">
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
    <h2 class="title">Pagamento</h2>
    <!-- Linha abaixo do título -->
    <div class="title-line"></div>

    <div class="container-wrapper">
        <!-- Container azul -->
        <div class="custom-container w-60">
            <form class="search-box">
                <h1> Dados do plano: </h1>
                <div class="input-group shadow">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="textempresa" class="form-label">Empresa:</label>
                            <input type="text" class="form-control" id="empresa" value="ACADEMIA AGUA VIVA">
                        </div>

                        <div class="col-md-6">
                            <label for="textempresa:" class="form-label">Consultor:</label>
                            <input type="text" class="form-control" id="consultor" placeholder="CONSULTOR">
                        </div>

                        <div class="col-md-4">
                            <label for="textaluno2" class="form-label">Aluno:</label>
                            <select id="aluno2" class="form-select">
                                <option selected>...</option>
                                <option>mesias</option>
                                <option>jose</option>
                                <option> cleito </option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="textplano" class="form-label">Plano:</label>
                            <select id="plano" class="form-select" onchange="updatePlano()">
                                <option selected>...</option>
                                <option value="90">Mensal - R$90 - (1 mês)</option>
                                <option value="230">Trimestral - R$230 - (3 meses)</option>
                                <option value="960">Anual - R$960 - (12 meses)</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="promo" class="form-label">Promoção:</label>
                            <select id="promo" class="form-select" onchange="updatePromocao(); calcularTotal();">
                                <option selected>...</option>
                                <option>0%</option>
                                <option>5%</option>
                                <option>10%</option>
                                <option>15%</option>
                            </select>
                        </div>

                        <h1> Resumo da venda: </h1>

                        <!-- Início da nova seção adicionada -->
                        <div class="container">
                            <div class="input-group shadow">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="textplano" class="form-label">Plano:</label>
                                        <input type="text" class="form-control" id="planoValor" value="..." readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="textadesao" class="form-label">Adesão:</label>
                                        <input type="text" class="form-control" id="adesao" value="R$ 6,70" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="texttaxa" class="form-label">Taxa:</label>
                                        <input type="text" class="form-control" id="taxa" value="R$ 4,70" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="textpromocao" class="form-label">Promoção:</label>
                                        <input type="text" class="form-control" id="promocao" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="texttotal" class="form-label">Total:</label>
                                        <input type="text" class="form-control" id="total" value="R$ 0,00" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fim da nova seção adicionada -->

                        <div class="cadastrarbtn">
                            <button type="submit" class="btn btn-primary">Próximo</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Referência aos arquivos JavaScript -->
    <script src="../scripts/pagamento.js"></script>
    <script src="../scripts/updatePromocao.js"></script>
    <script src="../scripts/updateTotal.js"></script>
    <script src="../scripts/calcularTotal.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>
