function check_input() {

    var isValid = false;

    // 개인정보 수집 
    if(!$(".send_chk").is(':checked')){
        alert("필수 동의 항목을 체크해주세요. ");
        $(".send_chk").focus();
        isValid = false
        return false;
    }

    isValid = true;
    //발송인 정보 검사
    $.each($(".mail_form .data1").find("input"), function(idx, item){
        if(isEmpty(item.value)){
            alert(item.previousElementSibling.innerHTML + "은(는) 필수입력 항목입니다.");
            item.focus();
            isValid = false;
            return false;
        }
    });

    // 이메일이 잘못되었는지 확인하는 함수                                               
    var reg_email = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;

    if(!reg_email.test($("#email").val())){
        alert("이메일 형식을 확인해주세요.");  
        isValid = false;
        return false;         
    }                        
    
    if(!isValid){
        return false;
    }

    document.mail_form.submit();

}

function isEmpty(str) {
	if (str !== 0 && (str == null || str == "" || str == undefined || str == 'undefiend')) {
		return true;
	} else {
		return false;
	}
}