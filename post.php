<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link  type="text/css" href="css/style.css" rel ="stylesheet"/>
		<script src="js/jquery-2.1.0.js"></script>
		<title>Post方式发送飞信</title>
	</head>
	<body>
		
		<form name="PostFetion" method="post" action="php/psend.php">
			<div class = "title">飞信短信</div>
			<div>
			 <div><input name="user" type="text" id="user" tabindex="1"  maxlength="11" placeholder="您的手机号"/></div>
			 <div class = "illegal" id="user_illegal" hidden="true"><img class = "wrong" src="images/wrong.png"/>请填写正确的手机号</div>
			 <div class = "legal" id="user_legal" hidden="true"><img class = "right" src="images/right.png"/></div >
			 <div class = "clear"></div>
			 <div><input name="key" type="password" id="key" tabindex="2"  maxlength="32" placeholder="密码"/></div>
			 <div class = "illegal" id="key_illegal" hidden="true"><img class = "wrong" src="images/wrong.png"/>请填写密码</div>
			 <div class = "legal" id="key_legal" hidden="true"><img class = "right" src="images/right.png"/></div >
			 <div class = "clear"></div>
			 <div><input name="number" type="text" id="number" tabindex="3"  maxlength="11" placeholder="对方手机号"/></div>
			 <div class = "illegal" id="number_illegal" hidden="true"><img class = "wrong" src="images/wrong.png"/>请填写正确的手机号</div>
			 <div class = "legal" id="number_legal" hidden="true"><img class = "right" src="images/right.png"/></div >
			 <div class = "clear"></div>
			  <div><textarea name="text" type="text" id="text" tabindex="4"  placeholder="发送内容"></textarea></div>
			 <div class = "illegal" id="text_illegal" hidden="true"><img class = "wrong" src="images/wrong.png"/>请填写内容</div>
			 <div class = "legal" id="text_legal" hidden="true"><img class = "right" src="images/right.png"/></div >
			 <div class = "clear"></div>
			 <input class = "sub" type="button" id="sub" value="发送" />
			</div>
		</form>
	</body>
</html>
<script type="text/javascript">
			
			//光标移开判断user是否合法
			$("#user").blur(function(){
				var user = $("#user").val();
				if((user.length != 11) || (!user.match(/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|17[6|7|8]|18[0-9])\d{8}$/))){
						$('#user_illegal').show();
						$('#user_legal').hide();				
				}else{
						$('#user_illegal').hide();
						$('#user_legal').show();	
				}
				
			});	
			//光标移开判断name是否合法
			$("#key").blur(function(){
				var key = $("#key").val();
				if(key==""){
					$('#key_illegal').show();
					$('#key_legal').hide();
				}else{
					$('#key_illegal').hide();
					$('#key_legal').show();
				}
			});	
			//光标移开判断number是否合法
			$("#number").blur(function(){
				var number = $("#number").val();
				if((number.length != 11) || (!number.match(/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|17[6|7|8]|18[0-9])\d{8}$/))){
						$('#number_illegal').show();
						$('#number_legal').hide();				
				}else{
						$('#number_illegal').hide();
						$('#number_legal').show();	
				}
				
			});
			//光标移开判断name是否合法
			$("#text").blur(function(){
				var text = $("#text").val();
				if(text==""){
					$('#text_illegal').show();
					$('#text_legal').hide();
				}else{
					$('#text_illegal').hide();
					$('#text_legal').show();
				}
			});	
			//点击发送按钮全部判定
			$("#sub").click(function(){
				var user = $("#user").val();
				if((user.length != 11) || (!user.match(/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|17[6|7|8]|18[0-9])\d{8}$/))){
						$('#user_illegal').show();
						$('#user_legal').hide();				
				}else{
						$('#user_illegal').hide();
						$('#user_legal').show();	
				}
				var key = $("#key").val();
				if(key==""){
					$('#key_illegal').show();
					$('#key_legal').hide();
				}else{
					$('#key_illegal').hide();
					$('#key_legal').show();
				}
				var number = $("#number").val();
				if((number.length != 11) || (!number.match(/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|17[6|7|8]|18[0-9])\d{8}$/))){
						$('#number_illegal').show();
						$('#number_legal').hide();				
				}else{
						$('#number_illegal').hide();
						$('#number_legal').show();	
				}
				var text = $("#text").val();
				if(text==""){
					$('#text_illegal').show();
					$('#text_legal').hide();
				}else{
					$('#text_illegal').hide();
					$('#text_legal').show();
				}
				if($("#user_legal").is(":visible")&&$("#key_legal").is(":visible")&&
				$("#number_legal").is(":visible")&&$("#text_legal").is(":visible")){
					$("form").submit();
				}
			});
	</script>
