$(document).ready(function () {
    $(".wellcome_form").submit(function () {
        let formID = $(this).attr('id'),
        formNm = $('#' + formID),
        message = $(formNm).find(".form-message");       
        $.ajax({
            type: "POST",
            url: '../module/wellcome_telegram.php',
            data: formNm.serialize(),
            success: function (data) {
              // Вывод сообщения об успешной отправке
              message.html(data);              
              setTimeout(function(){                
                message.html('');
                $('input').not(':input[type=submit], :input[type=hidden]').val('');
              }, 3000);             
            },
            error: function (error) {
                // Вывод сообщения об ошибке отправки
                message.html(error);                 
                setTimeout(function(){                  
                  message.html('');
                  $('input').not(':input[type=submit], :input[type=hidden]').val('');
                }, 3000);               
            }
        });
        return false;
    });
});




$(document).ready(function () {
    $(".clock_form").submit(function () {
        let formID = $(this).attr('id'),
        formNm = $('#' + formID),
        message = $(formNm).find(".form-message");        
        $.ajax({
            type: "POST",
            url: '../module/clock_telegram.php',
            data: formNm.serialize(),
            success: function (data) {
              // Вывод сообщения об успешной отправке
              message.html(data); 
              setTimeout(function(){                
                message.html('');
                $('input').not(':input[type=submit], :input[type=hidden]').val('');
              }, 3000);                  
            },
            error: function (error) {
                // Вывод сообщения об ошибке отправки
                message.html(error); 
                setTimeout(function(){                    
                    message.html('');
                    $('input').not(':input[type=submit], :input[type=hidden]').val('');
                  }, 3000);                           
            }
        });
        return false;
    });
});