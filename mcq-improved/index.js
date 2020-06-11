count=1;
counter=0;
num=3;
datas={};

function ajaxCall(ch){
    $.ajax({
        type: "POST",
        url: "ajax.php",
        dataType: 'json',
        data: {name:count},
        success: function (data) {
            setData(data);
            if(ch==1){
            hide();
            }
            return true;
        },
        error:function(){
            alert("Some error occured, please refresh");
            return false;
        }
    });
}

function finish(){
    $('.container').hide();
}
$(document).ready(function () {

    var temp=$(".but");
    temp.click(function (e) { 
        $(".loader").show();
        temp.css({
            "background-color":"aliceblue","color":"black","pointer-events":"none"
        });
        ajaxCall(1);
        // hide();
    });
    $('.button').click(optionClick);





    //if we need previous and next---->>> remove timer---------->>>>>uncommend------>>
    //$('#next').click(next);
    // $('#prev').click(function(){
    //     count--;
    //     ajaxCall();
    // })
});
function optionClick(){
    datas.count=$(this).attr('id');
    console.log(datas.count);
    $('.button').css('background-color','rgb(0, 0, 0)');
    $(this).css('background-color','rgb(19, 60, 63)');
}
function hide(){
    $('.cover').hide();
        $('.container').css('pointer-events','all');
        setInterval(()=>{
            if(count<=num){
            if(counter==9){
                next();
            }
            else{
                counter++;
            }
            $('#count').text(counter);
        }},1000);
}
function next(){
    if(count>=num){
        finish();
        return;
    }
    count++;
    $('.button').css('background-color','rgb(0, 0, 0)');
    ajaxCall(0);
    counter=0;
}

function setData(data){
    $('#content').text(data.question);
    $('#1').text(data.option1);
    $('#2').text(data.option2);
    $('#3').text(data.option3);
    $('#4').text(data.option4);
}