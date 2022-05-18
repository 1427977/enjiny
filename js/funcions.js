function estudiClick() {
    document.getElementById("cbutton").innerHTML = location.href = "./index.php?accio=syllabary";
}


function updateSelected(idSyllabary, idUser)
{
    $.ajax({
        type: "POST",
        data:{idSyllabary:idSyllabary, idUser:idUser},
        url: './Controller/ajaxLearning.php',
        success:function(html) {
            //alert(html);
        }
    });
}

function typeSelectedCheck(subtype, type, idUser, checked)
{
    $.ajax({
        type: "POST",
        data:{subtype: subtype, type: type, idUser: idUser, checked:checked},
        url: './Controller/ajaxLearning.php',
        success:function(html) {
            //alert(html);
            /*if($(this).is(":checked")){
                $('input:checkbox:checked').attr('checked', true);
            } else {
                $('input:checkbox:checked').attr('checked', false);
            }
        */
           /*  OPCION 1
           $(document).ready(function(){
                $("#switch_uncheck_all").click(function(){
                    $("div").hide();
                });
                $("#switch_check_all").click(function(){
                    $("div").show();
                });
            });
            OPCION 2
            $(document).ready(function(){
                $("#switch_check_all").click(function(){
                    $("#switch_check_all").hide();
                });
                $("#switch_uncheck_all").click(function(){
                    $("#switch_uncheck_all").show(); });
            });


            $("#switch_check_all").toggle(0);
            $("#switch_uncheck_all").toggle(0);

        OPCION 3*/
            if($(this).is(":checked")){
                $('input:checkbox:checked').prop('checked', true);
            } else {
                $('input:checkbox:checked').prop('checked', false);
            }
/*
            if($(this).is(":checked")){
                $('input:checkbox:checked').prop('checked', false);
            }
        */
        }
    });
}


function typeSelectedUncheck(subtype, type, idUser, checked)
{
    $.ajax({
        type: "POST",
        data:{subtype: subtype, type: type, idUser: idUser, checked:checked},
        url: './Controller/ajaxLearning.php',
        success:function(html) {
            //alert(html);
            /*if($(this).is(":checked")){
                $('input:checkbox:checked').attr('checked', true);
            } else {
                $('input:checkbox:checked').attr('checked', false);
            }

            $("#switch_check_all").toggle(0);
            $("#switch_uncheck_all").toggle(0);*/
        //$("#switch_uncheck_all").css("display", "none");
        //$("#switch_check_all").css("display", "block");



        }
    });
}
