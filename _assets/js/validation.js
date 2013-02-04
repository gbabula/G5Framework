/* 

    ============================================

    G5Framework // Extended Validation

    =============================================

	validation.js

    ==============================================

*/

var formValidation = function(){

    //Email Regex
    $.validator.addMethod('emailRegex', function(value, element) {
        return this.optional(element) || /^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/i.test(value); }, 
        'Email must contain only letters, numbers, and acceptable symbols.'
    );

    //Text Regex
    $.validator.addMethod('textRegex', function(value, element) {
        return this.optional(element) || /^([a-zA-Z '-]+)$/i.test(value); }, 
        'No special characters allowed.'
    );

    //Not Equals Value
    $.validator.addMethod('valueNotEquals', function(value, element, arg){
        return arg != value; },
        'Value must not equal arg.'
    );

    //US Phone Number
    $.validator.addMethod('phoneUS', function(phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, '');
        return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);},
            'Please specify a valid phone number'
    );

    //Rules
    var appRules = {
        requiredName: {
            minlength: 2,
            maxlength: 22,
            textRegex: true,
            required: true
        },
        requiredEmail: {
            email: true,
            maxlength: 40,
            emailRegex: true,
            required: true
        },
        oneRequiredInput: {
            minlength: 1,
            required: true
        },
        requiredSelect: {
            minlength: 1,   
            valueNotEquals: 'default'
        },
        genericPhoneNumber: {
            minlength: 10
        }
    }

    //Attach to all forms
    $('.form-validation').each(function() {

        var _this = this,
        	_errorLabel = $(_this).find('.form-errors');

    	//Validate
        $(_this).validate({
            //debug: true, //Enables debug mode. If true, the form is not submitted and certain errors are displayed on the console
            errorLabelContainer: _errorLabel,
            messages: {
                'name': {
                	required: 'Please enter your name'
                },
                'email': {
                	required: 'Please enter a valid email address'
                },
                'phone-number': {
                	required: 'Please enter a phone number'
                },
                'gender': {
                	required: 'Please select a gender'
                },
                'checkbox-options': {
                    required: 'Please select an option'
                },
                'month': {
                    valueNotEquals: 'Please choose a month'
                }
            },
            rules: {
            	'name': appRules.requiredName,
            	'email': appRules.requiredEmail,
            	'phone-number': appRules.genericPhoneNumber,
            	'gender': appRules.oneRequiredInput,
                'checkbox-options': appRules.oneRequiredInput,
                'month': appRules.requiredSelect
            },
            submitHandler: function(form) {

                var postData = $(_this).serialize();
                
                //Success
                console.log('G5: Form Validation: Success');
                console.log('Data: ', postData);

                /* 

                AJAX Example

                $.ajax({
                    type: 'POST',
                    url: '/somewhere',
                    data: postData,
                    success: function() {
                        console.log('ajax success');
                        return false;
                    }
                }); 

                */

                $(_this).hide();
                $(_this).next('.thank-you').fadeIn('slow'); 

    			return false;   

        	}
                    
        });

    });//

};