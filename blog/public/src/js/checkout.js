Stripe.setPublishableKey('pk_test_op482rfaagYh5NrxQVRlqEYG');
var $form = $('#checkout-form');

$form.submit(function(event){
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
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
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken"/>').val(token));
        $form.get(0).submit();
    }
}