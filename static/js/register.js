$(':password').keyup(function(){checkPw();});
function checkPw(){
	if($('#upass').val()==$('#upass1').val()){
		$('#check_ma').text('Matched');
		$('#upass1').css({"background-color":"#90f684"});
	}else{
		$('#check_ma').text('Unmatched');
		$('#upass1').css({"background-color":"#ee6060"});
}
}




