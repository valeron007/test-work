
$(document).ready(function (event) {
    $(".variable_one").focusout(function (e) {
        e.stopImmediatePropagation();
        var number = parseInt(this.value);
        if(isNaN(number)){
            console.log("введите число");
            return false;
        }

        var parent_container = $(this).parent().parent();
        var number_two = parseInt(parent_container.find(".variable_two").val());
        parent_container.find('.result').text(number + number_two);

        var id = parseInt(parent_container.find(".formula-id").text());
        
        $.ajax({
            type:"POST",
            url:"/formula/update",
            data:{
                'id':id,
                'var_one':number
            },
            success:function (data) {
                $('.information')
                    .append("<p>" + data.success + "</p>")
                    .css({'color':'green', "font-size":"16px"});
            },
            error:function (data) {
                $('.information')
                    .append("<p>" + data.error + "</p>")
                    .css({'color':'red', "font-size":"16px"});
            }
        });

        return false;
    });

    $(".variable_two").focusout(function (e) {
        e.stopImmediatePropagation();
        var number = parseInt(this.value);
        if(isNaN(number)){
            $('.information')
                .append("<p>Введите число</p>")
                .css({'color':'red', "font-size":"16px"});
            return false;
        }

        var parent_container = $(this).parent().parent();
        var number_one = parseInt(parent_container.find(".variable_one").val());
        parent_container.find('.result').text(number + number_one);
        var id = parseInt(parent_container.find(".formula-id").text());

        $.ajax({
            type:"POST",
            url:"/formula/update",
            data:{
                'id':150,
                'var_two':number
            },
            success:function (data) {
                $('.information')
                    .append("<p>" + data.success + "</p>")
                    .css({'color':'green', "font-size":"16px"});
            },
            error:function (data) {


                $('.information')
                    .append("<p>" + data.responseJSON.error + "</p>")
                    .css({'color':'red', "font-size":"16px"});
            }
        });

        return false;
    });

    $('.clear-information').click(function (e) {
        e.stopImmediatePropagation();
        $('.information').empty();
    });

});




