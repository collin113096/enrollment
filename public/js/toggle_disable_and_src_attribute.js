 var requirement = ['birth_certificate','certificate_of_transfer','certificate_of_good_moral_character',
    'form137','form138','picture'];

var asset_url = $('#asset').val();

$('#student_type').change(function(){
   var selected = $(this).children("option:selected").val();

   switch(selected){
    case 'New Student':
        enableAll(requirement);
        disableOnly('certificate_of_transfer');
        break;
    case 'Transferee Student':
        enableAll(requirement);
        break;
    case 'Old Student':
        disableAll(requirement);
        enableOnly(['form138','picture']);
        break;
   }
});

disableAll(requirement);

function disableAll(id){ 

    for(var i=0;i<id.length;i++){
        $('#' + id[i]).attr('disabled','disabled');
        $('#' + id[i] + "_tag").attr('src', asset_url + '/disable_document.png');  
    }
}

function enableAll(id){

    for(var i=0;i<id.length;i++){
        $('#' + id[i]).removeAttr('disabled');
        $('#' + id[i] + "_tag").attr('src', asset_url + '/enable_document.png');  
    }
}

function disableOnly(id){
     if(Array.isArray(id)){
        for(var i=0;i<id.length;i++){
            $('#' + id[i]).attr('disabled','disabled');
            $('#' + id[i] + "_tag").attr('src', asset_url + '/disable_document.png');  
        }
    }else{
            $('#' + id).attr('disabled','disabled');
            $('#' + id + "_tag").attr('src', asset_url + '/disable_document.png');  
    }
}

function enableOnly(id){
    if(Array.isArray(id)){
        for(var i=0;i<id.length;i++){
            $('#' + id[i]).removeAttr('disabled');
            $('#' + id[i] + "_tag").attr('src', asset_url + '/enable_document.png');  
        }
    }else{
            $('#' + id).removeAttr('disabled');
            $('#' + id + "_tag").attr('src', asset_url + '/enable_document.png');  
    }
}