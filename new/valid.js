
$(document).on("keyup",".complaintno",function(e){
    ownname_fun();
});
function ownname_fun(){
    let txt=$(".complaintno").val();
   let vali =/^[A-Za-z ]+$/;
   if(vali.test(txt)){
    $(".complaint_no").show().html("**Enter Number and Slash only").css("color","red").focus();
    $('#formsub').prop('disabled', true);
    return false;
   }else{
        $(".complaint_no").hide()
        $('#formsub').prop('disabled', false);
       }
}

$(document).on("keyup",".complaintfilername",function(e){
    ownname_fun();
});
function ownname_fun(){
    let section=$(".complaintfilername").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(section)){
    $(".spancomplaintfilername").show().html("**Enter Alphabets only").css("color","red").focus();
    $('#formsub').prop('disabled', true);
    return false;
   }else{
        $(".spancomplaintfilername").hide()
        $('#formsub').prop('disabled', false);
       }
}

$(document).on("keyup",".criminal_name",function(e){
    ownname_fun();
});
function ownname_fun(){
    let section=$(".criminal_name").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(section)){
    $(".spancriminal_name").show().html("**Enter Alphabets only").css("color","red").focus();
    $('#form2submit').prop('disabled', true);
    return false;
   }else{
        $(".spancriminal_name").hide()
        $('#form2submit').prop('disabled', false);
       }
}

$(document).on("keyup","#victimname",function(e){
    ownname_fun();
});
function ownname_fun(){
    let section=$("#victimname").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(section)){
    $(".spanVictimName").show().html("**Enter Alphabets only").css("color","red").focus();
    $('#form3submit').prop('disabled', true);
    return false;
   }else{
        $(".spanVictimName").hide()
        $('#form3submit').prop('disabled', false);
       }
}

$(document).on("keyup","#victimcaste",function(e){
    ownname_fun();
});
function ownname_fun(){
    let section=$("#victimcaste").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(section)){
    $(".spanVictimcaste").show().html("**Enter Alphabets only").css("color","red").focus();
    $('#form3submit').prop('disabled', true);
    return false;
   }else{
        $(".spanVictimcaste").hide()
        $('#form3submit').prop('disabled', false);
       }
}