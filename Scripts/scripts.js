function authenication(){
    console.log("authenication");
    let formData = $('#authenication-form').serialize();
    let url = 'http://myproject.local/api/authenication';

    $.post( url, formData, function( data ) { //  передаем и загружаем данные с сервера с помощью HTTP запроса методом POST
        $('#alert').html("Result: " + data); // вставляем в элемент <div> данные, полученные от сервера
    });
}


function dynamicLoadContentPOST(controller, action){
    let url = "http://myproject.local/api/getcontent";
    $.post(url,'controller='+controller+'&action='+action , function(resault){
        let obj = $.parseJSON(resault);
        
        if(obj['result'] == 'ok'){
            let length = Object.keys(obj).length;
            for(let index = 0; index < length - 1; index++)
                $('#content').append(obj[index]["Content"]);
        }
    });
}