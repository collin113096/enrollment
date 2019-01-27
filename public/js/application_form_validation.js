$(document).ready(function(){

	//if the user type
	$('input').on('keyup change', function(){
		
		if($(this).val() == ''){
			turnToGray($(this));
		}else{
			turnToGreen($(this));
		}
	});

	$('select').change(function(){
		
		if($(this).val() == ''){
			turnToGray($(this));
		}else{
			turnToGreen($(this));
		}
	});
	
});

function turnToGray(element){
	$(element).removeClass('is-invalid');
	$(element).removeClass('is-valid');
}

function turnToGreen(element){
	$(element).removeClass('is-invalid');
	$(element).addClass('is-valid');
}