
<div class="creditCardForm">
    <div class="heading">
        <h1>Confirmar Pago</h1>
    </div>
    <div class="d-flex justify-content-center" id="alert">
    </div>
    <div class="payment">
        <form id="pay-form">
            <div class="form-group owner">
                <label for="owner">Nombre como viene en la tarjeta</label>
                <input type="text" class="form-control" id="owner" required>
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" required>
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Numero de Tarjeta</label>
                <input type="text" class="form-control" id="cardNumber" required>
            </div>
            <div class="d-flex justify-content-end w-100" id="credit_cards">
                <img src="<?=base_url?>assets/img/visa.png" id="visa">
                <img src="<?=base_url?>assets/img/mastercard.png" id="mastercard">
                <img src="<?=base_url?>assets/img/amex.jpeg" id="amex">
            </div>
            <label>Fecha de Expiración</label>  
            <div class="d-flex justify-content-center w-100" id="expiration-date">
                <select class='form-control' >
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
                <select class="form-control">
                    <option value="16"> 2016</option>
                    <option value="17"> 2017</option>
                    <option value="18"> 2018</option>
                    <option value="19"> 2019</option>
                    <option value="20"> 2020</option>
                    <option value="21"> 2021</option>
                    <option value="21"> 2022</option>
                    <option value="21"> 2023</option>
                    <option value="21"> 2024</option>
                </select>
            </div>
            <div class="form-group" id="pay-now">
                <button type="submit" class="btn btn-success" id="confirm-purchase">Confirmar</button>
            </div>
        </form>
    </div>
</div>