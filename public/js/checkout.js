
$(document).ready(function() {
    $('.razorpay_btn').click(function(e) {
        e.preventDefault();


        var data= {
            'firstname':firstname,
            'lastname':lastname,
            'email':email,
            'phone':phone,
            'address':address,
            'city':city,
            'state':state,
            'pincode':pincode,
            'province':province,
            'country':country,

        }
        $.ajax({
            method: 'POST',
            url: "/process-to-pay",
            data: data,
            dataType:"dataType",
            success:function (response) {
alert(response.total)
            }
        })



    });
});


