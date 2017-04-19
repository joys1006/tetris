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
		});
		$('input[name="birth_date"]').bind('keyup',function(){
    		var strokes = $(this).val().length;
    			if(strokes === 2 || strokes === 5){
        			var thisVal = $(this).val();
       					thisVal += '/';
        					$(this).val(thisVal);
    			}
		});

		$('input[name="birth_date"]').keypress(function (evt) {
  			var keycode = evt.charCode || evt.keyCode;
  				if (keycode  == 47) { 
    		        return false;
			    }
		});
		$.validator.addMethod("birth", function (value, element) {
    		var year = value.split('/');
    			if ( value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/) && parseInt(year[2]) <= 2000)
        			return true;
    			else
        			return false;
		});
		$.validator.addMethod("lettersonly", function(value, element) {
			return this.optional(element) || /^[a-z," "]+$/i.test(value);
            }, "");
		$.validator.addMethod("LetterNummber", function(value, element) {
        	return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
    	}, "");
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
            fullName    : { required: true, minlength:1,  maxlength: 20 },
			birth_date  : { required: true, minlength:10, maxlength: 10,birth:true },
            address     : { required: true, minlength:1,  maxlength: 35,LetterNummber:true},
            city        : { required: true, minlength:1,  maxlength: 20,lettersonly:true },
			state       : { required: true, minlength:1,  maxlength: 20,lettersonly:true },
			zipCode     : { required: true, minlength:1,  maxlength: 20,LetterNummber:true},
			phoneNumber : { required: true, minlength:1,  maxlength: 20,number: true },
			terms       : { required: false },
			phoneOption : { required: true  },
			/////////////////// C-D/CARD INFORMATION ///////////////////
			nameoncard  : { required: true, minlength:1, maxlength: 20 },
            cardnumber  : { required: true, minlength:12,maxlength: 19,creditcard: true, number: true },
            expdate     : { required: true, minlength:7, maxlength: 7 ,expiration: true},
			csc         : { required: true, minlength:1, maxlength: 20 },
        }, 
        messages: { 
		    fullName: "",
            birth_date: "", 			
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
	$('#birth_date').focus(function() {
    $(this).attr('placeholder', 'DD/MM/YYYY')
     }).blur(function() {
    $(this).attr('placeholder', 'Date Of Birth')
    });
});