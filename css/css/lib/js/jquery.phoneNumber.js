$().ready(function() {
	$("#expdate").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                $("#exp").html("").show();
               return false;
                }
            });
		$('input[name="expdate"]').bind('keyup',function(){
    		var strokes = $(this).val().length;
    			if(strokes === 2){
        				var thisVal = $(this).val();
        					thisVal += '/';
        						$(this).val(thisVal);
    		    }
			});
		$('input[name="expdate"]').keypress(function (evt) {
  				var keycode = evt.charCode || evt.keyCode;
  					if (keycode  == 47) { 
    					return false;
  					}
		})
		$.validator.addMethod("expiration",function (value, element) {
    		var today = new Date();
    		var startDate = new Date(today.getFullYear(),today.getMonth(),1,0,0,0,0);
    		var expDate = value;
    		var separatorIndex = expDate.indexOf('/');
    		expDate = expDate.substr( 0, separatorIndex ) + '/1' + expDate.substr( separatorIndex );
    		return Date.parse(startDate) <= Date.parse(expDate);
		});
	$(".validator").validate({
        rules: {
			/////////////////// BILLING ADDRESS INFO ///////////////////
            fullName    : { required: true, minlength:1, maxlength: 20 },
            address     : { required: true, minlength:1, maxlength: 20 },
            city        : { required: true, minlength:1, maxlength: 20 },
			state       : { required: true, minlength:1, maxlength: 20 },
			zipCode     : { required: true, minlength:1, maxlength: 20 },
			phoneNumber : { required: true, minlength:1, maxlength: 20,number: true },
			terms       : { required: false },
			phoneOption : { required: true  },
			/////////////////// C-D/CARD INFORMATION ///////////////////
			nameoncard  : { required: true, minlength:1, maxlength: 20 },
            cardnumber  : { required: true, minlength:12,maxlength: 19,number: true },
            expdate     : { required: true, minlength:7, maxlength: 7 ,expiration: true},
			csc         : { required: true, minlength:1, maxlength: 20 },
        }, 
        messages: { 
		    firstName: "", 
			lastName: "", 
			address: "",  
			city: "", 
			country: "", 
			state: "", 
			zipCode: "", 
			phoneNumber: "", 
			phoneOption: "", 
			terms: "", 
			nameoncard: "", 
			cardnumber: "", 
			expdate: "", 
			csc: ""
		},
	});
    $('#expdate').focus(function() {
    $(this).attr('placeholder', 'MM/YYYY')
     }).blur(function() {
    $(this).attr('placeholder', 'Expiration Date')
    });
});