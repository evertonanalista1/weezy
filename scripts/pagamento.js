
// Valor plano automatico //
function updatePlano() {
    var planoSelect = document.getElementById("plano");
    var planoValor = document.getElementById("planoValor");
    var selectedValue = planoSelect.options[planoSelect.selectedIndex].value;

    if (selectedValue === "...") {
        planoValor.value = "...";
    } else {
        planoValor.value = `R$ ${parseFloat(selectedValue).toFixed(2).replace('.', ',')}`;
    }
}

// Event listener para atualizar o plano quando o campo for alterado
document.getElementById('plano').addEventListener('change', updatePlano);

// Inicializa o plano ao carregar a página
document.addEventListener('DOMContentLoaded', updatePlano);

// Script para atualizar o campo de promoção
function updatePromocao() {
    var promoSelect = document.getElementById("promo");
    var promocaoInput = document.getElementById("promocao");
    promocaoInput.value = promoSelect.value;
}

function calcularTotal() {
    let plano = parseFloat(document.getElementById('plano').value);
    let adesao = parseFloat(document.getElementById('adesao').value.replace('R$ ', '').replace(',', '.'));
    let taxa = parseFloat(document.getElementById('taxa').value.replace('R$ ', '').replace(',', '.'));
    let promocao = parseFloat(document.getElementById('promo').value.replace('%', ''));

    if (isNaN(plano) || isNaN(adesao) || isNaN(taxa)) {
        document.getElementById('total').value = "Selecione todos os campos!";
        return;
    }

    if (isNaN(promocao)) promocao = 0;

    let total = plano + adesao + taxa;
    let desconto = (total * promocao) / 100;
    total -= desconto;

    document.getElementById('total').value = `R$ ${total.toFixed(2).replace('.', ',')}`;
}

// Event listeners para recalcular o total quando os campos forem alterados
document.getElementById('plano').addEventListener('change', calcularTotal);
document.getElementById('adesao').addEventListener('input', calcularTotal);
document.getElementById('taxa').addEventListener('input', calcularTotal);
document.getElementById('promo').addEventListener('change', calcularTotal);

// Inicializa o cálculo total ao carregar a página
document.addEventListener('DOMContentLoaded', calcularTotal);
