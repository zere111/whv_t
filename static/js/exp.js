$('.post-content').wysiwyg();
var listpoint=0;
$('input#next').click(function(){
	listpoint=listpoint+15;
	changeList();
	
});
$('input#back').click(function(){
	if(listpoint>0){
	listpoint=listpoint-15;
	changeList();
	}else{
		alert('this is the first page');
	}
});
$(document).ready(function(){
	//clear the browser's default events of drag&drop
	$(document).on({
		dragleave:function(e){
			e.preventDefault();
			$('.dashboard_target_box').removeClass('over');
		},
		drop:function(e){
			e.preventDefault();
		},
		dragenter:function(e){
			e.preventDefault();
			$('.dashboard_target_box').addClass('over');
		},
		dragover:function(e){
			e.preventDefault();
			$('.dashboard_target_box').addClass('over');
		},
	});
	//
	postCtrl();
	dropUpload();
});
//this the functions
function postCtrl(){
	$('.zw-postbox').hover(function(){$(this).children().eq(0).slideDown(500);},function(){$(this).children().eq(0).fadeOut(500);});
	$('.detail').click(function(){
		var boxdata=$(this).next().html();
		boxdata=boxdata.replace(/class="list/g,'class="show');		
		$('.zw-containor').animate({width:'180px',height:'70px',left:'85%'});
		$('.zw-postbox').animate({left:'50%'},500);
		$('.zw-title').nextAll().fadeOut(500);
		$('.show-post').html(boxdata).fadeIn(500);;
		scroll(0,0);
		$('.showclose-post').show();
		$('.showclose-post').click(function(){
			$('.show-post').children().remove(); 
			$('.zw-containor').animate({width:'30%',height:'500px',left:'13%'});
			$('.zw-title').nextAll().show(500);
			$('.zw-postbox').animate({left:'0%'},500);
		});
	});
	
};

function changeList(){
	$('#list-box').children().remove();
	$.ajax({
		type:"post",
		data:'listpoint='+listpoint,
		url:'http://localhost/whv_t/index.php/exp/changelist',
		success:function(result){
			$('#list-box').append().html(result);
			postCtrl();
		},
		error:function(){
			alert('failed to get data');
		}
	});
};
function dropUpload(){
	var addimg=document.getElementById('addimg');
	addimg.addEventListener("drop",function(e){
	e.preventDefault();
	var fileList = e.dataTransfer.files; //get file obj
	var userfile=new FormData();
	userfile.append('ff',fileList[0]);
	
	$.ajax({
		type:"post",
		data:'userfile='+userfile,
		url:'http://localhost/whv_t/index.php/upload/up',
		success:function(result){
			alert(result);
		},
		error:function(){
			alert('failed to get data');
		}
	});
	});
};
	