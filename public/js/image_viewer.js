       
 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            switch(input.id){
                case "birth_certificate":
                    $('#birth_certificate_tag').attr('src', e.target.result);
                    break;
                case "certificate_of_transfer":
                    $('#certificate_of_transfer_tag').attr('src', e.target.result);
                    break;
                case "certificate_of_good_moral_character":
                    $('#certificate_of_good_moral_character_tag').attr('src', e.target.result);
                    break;
                case "form137":
                    $('#form137_tag').attr('src', e.target.result);
                    break;
                case "form138":
                    $('#form138_tag').attr('src', e.target.result);
                    break;
                case "picture":
                    $('#picture_tag').attr('src', e.target.result);
                    break;
            }
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("input").change(function(){
    readURL(this);
});
