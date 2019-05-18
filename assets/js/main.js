'use strict';
$('document').on('ready', initialize());

function initialize() {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    pay();   

}
function pay(){
    var owner = $('#owner'),
    cardNumber = $('#cardNumber'),
    cardNumberField = $('#card-number-field'),
    CVV = $("#cvv"),
    mastercard = $("#mastercard"),
    confirmButton = $('#confirm-purchase'),
    visa = $("#visa"),
    amex = $("#amex");
    cardNumber.payform('formatCardNumber');
    CVV.payform('formatCardCVC');
    
    cardNumber.keyup(function() {
        amex.removeClass('transparent');
        visa.removeClass('transparent');
        mastercard.removeClass('transparent');
    
        if ($.payform.validateCardNumber(cardNumber.val()) == false) {
            cardNumberField.removeClass('has-success');
            cardNumberField.addClass('has-error');
        } else {
            cardNumberField.removeClass('has-error');
            cardNumberField.addClass('has-success');
        }
    
        if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
            mastercard.addClass('transparent');
            amex.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
            mastercard.addClass('transparent');
            visa.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
            amex.addClass('transparent');
            visa.addClass('transparent');
        }
    });

    confirmButton.click(function(e) {
        e.preventDefault();
        var isCardValid = $.payform.validateCardNumber(cardNumber.val());
        var isCvvValid = $.payform.validateCardCVC(CVV.val());
    
        if(owner.val().length < 5){
            $('#alert').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>ERROR!</strong> Nombre invalido<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        } else if (!isCardValid) {
            $('#alert').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>ERROR!</strong> Numero de tarjeta invalido o incorrecto<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        } else if (!isCvvValid) {
            $('#alert').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>ERROR!</strong> CVV invalido<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        } else {
            // Everything is correct. Add your form submission code here.
            $('#alert').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Pago realizado con exito</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            document.getElementById("pay-form").reset();
        }
    });
}