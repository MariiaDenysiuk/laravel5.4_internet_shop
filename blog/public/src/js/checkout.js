Stripe.setPublishableKey('pk_test_op482rfaagYh5NrxQVRlqEYG');
var form = $('#checkout-form');

$(".checkout_butn").on("click",function(event){
    $('#charge-error').addClass('hidden');
    $(".checkout_butn").prop('disabled', true);
    Stripe.card.createToken({
        number: $('#cart-number').val(),
        cvc: $('#cart-cvc').val(),
        exp_month: $('#cart-expiry-month').val(),
        exp_year: $('#cart-expiry-year').val(),
        name: $('#cart-name').val()
    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $(".checkout_butn").prop('disabled', false);
        console.log('blabla');
    } else {
        console.log('very good');
        var token = response.id;
        form.append($('<input type="hidden" id="stripe-token" name="stripeToken"/>').val(token));
        var absolutePath = $('.absolute-path').val();
        var form_name = $('#name').val();
        var form_address = $('#address').val();
        var form_cart_name = $('#cart-name').val();
        var form_cart_number = $('#cart-number').val();
        var form_cart_month = $('#cart-expiry-month').val();
        var form_cart_year = $('#cart-expiry-year').val();
        var form_cart_cvc = $('#cart-cvc').val();
        var form_token = $('#stripe-token').val();
        console.log(form_token);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                name: form_name,
                address: form_address,
                cart_name: form_cart_name,
                cart_number: form_cart_number,
                cart_month: form_cart_month,
                cart_year: form_cart_year,
                cart_cvc: form_cart_cvc,
                token: form_token
            }
        })
            .done(function (msg) {
                console.log(msg);
            });
    }
}