
<style type="text/css">

html body {
	margin-top: 50px !important;
}

#top_form, .show {
	position: fixed;
	top:0;
	left:0;
	width: 100%;
	
	margin:0;
	
	z-index: 2100000000;
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-webkit-user-select: none; 
	-o-user-select: none; 
	
	
	
    
	
	height:45px;
	line-height:45px;
}

#top_form input[name=url] {
	width: 550px;
	height: 20px;
	padding: 5px;
	font: 13px "Helvetica Neue",Helvetica,Arial,sans-serif;
	border: 0px none;
	background: none repeat scroll 0% 0% #FFF;
}

</style>

<script>
var url_text_selected = false;

function smart_select(ele){

	ele.onblur = function(){
		url_text_selected = false;
	};
	
	ele.onclick = function(){
		if(url_text_selected == false){
			this.focus();
			this.select();
			url_text_selected = true;
		}
	};
}

function search(){
	var q = "https://www.google.com/search?&q="
	document.getElementsByName("url")[0].value = q + document.getElementsByName("url")[0].value;
}

function toggleShow(){
	document.getElementById('top_form').hidden = !document.getElementById('top_form').hidden;
	document.getElementById('show').hidden = !document.getElementById('top_form').hidden;
}

</script>
<div id="show" class="show" style="height: 5px !important" onclick="toggleShow()"><div style="width:10px; padding: 0 5px; margin:0 auto; background:#00FF00; border:1px solid #151515;">+</div></div>

<div id="top_form" hidden="true">

	<div style="width:800px; padding: 0 10px; margin:0 auto; background:#FFC8C8; border:1px solid #151515;">
	
		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
			<input type="button" value="Home" onclick="window.location.href='index.php'">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
			<input type="hidden" name="form" value="1">
			<input type="submit" value="Go">
			<input type="submit" value="Search" onClick="search()">
			<input type="button" value="X" onclick="toggleShow()">
		</form>
		
		
	</div>
	
</div>

<script type="text/javascript">
	smart_select(document.getElementsByName("url")[0]);
</script>
