function check_input() {

    var isValid = false;

    // 개인정보 수집 
    if(!$(".send_chk").is(':checked')){
        alert("필수 동의 항목을 체크해주세요. ");
        return false;
    }

    //발송인 정보 검사
    $.each($(".mail_form .data1").find("input"), function(idx, item){
        if(isEmpty(item.value)){
            alert(item.previousElementSibling.innerHTML + "은(는) 필수입력 항목입니다.");
            isValid = true;
            return false;
        }
    });




    document.mail_form.submit();

}

function isEmpty(str) {
	if (str !== 0 && (str == null || str == "" || str == undefined || str == 'undefiend')) {
		return true;
	} else {
		return false;
	}
}