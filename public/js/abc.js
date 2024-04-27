$(document).ready(function() {
    $('.razorpay_btn').click(function(e) {
        e.preventDefault();

        var firstname = $('.firstname').val(); // Using class for firstname field
        var lastname = $('.lastname').val(); // Using class for lastname field
        var email = $('.email').val(); // Using class for email field
        var phone = $('.phone').val(); // Using class for phone field
        var address = $('.address').val(); // Using class for address field
        var city = $('.city').val(); // Using class for city field
        var state = $('.state').val(); // Using class for state field
        var pincode = $('.pincode').val(); // Using class for pincode field
        var province = $('.province').val(); // Using class for province field
        var country = $('.country').val(); // Using class for country field

        var data = {
            'firstname': firstname,
            'lastname': lastname,
            'email': email,
            'phone': phone,
            'address': address,
            'city': city,
            'state': state,
            'pincode': pincode,
            'province': province,
            'country': country
        };

        $.ajax({
            method: 'POST',
            url: "/process-to-pay",
            data: data,
            dataType: "json", // Assuming the response is in JSON format
            success: function(response) {
                alert(response.total);
            }
        });
    });
});
