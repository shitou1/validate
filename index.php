<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="get">
	    <input type="text" name="email" class="email" pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" message="不能为空"><label></label>
	    <span class="submit">提交</span>
    </form>
    <script src="jquery-1.11.3.min.js"></script>
    <script>
    function validate(a) {
    	var value=$.trim(a.val());
    	var pattern=new RegExp(a.attr('pattern'));
    	if(value){
    		if (pattern.test(value)) {
    			a.attr('message', '');
    		}else {
    			a.attr('message', '格式不正确');
    		}
    	}else {
    		a.attr('message', '不能为空');
    	}
    	$('label').text(a.attr('message'));
    }
    $('.email').blur(function(event) {
    	validate($(this));
    });
    $('.submit').click(function(event) {
    	var a=$('.email').attr('message');
    	if(!a){
    		$('form').submit();
    	}else {
    		alert('不能提交');
    	}
    });
    </script>
</body>

</html>
