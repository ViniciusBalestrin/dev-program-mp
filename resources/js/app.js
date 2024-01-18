const btnPay = document.getElementById("pay-button");

btnPay.addEventListener("click", () => {
    axios.post('/venda/finalizar-venda')
        .then(function (response) {
            window.open(response.data.init_point, "_blank");
        })
        .catch(function (error) {
            console.error('Erro na requisição', error);
        });
});