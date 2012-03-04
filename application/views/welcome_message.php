<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Video2gif</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Video2gif!</h1>

	<div id="body">
	Fields mark with an * are mandatory.
	<form	id="video_info"
			method="post"
			enctype="application/x-www-form-urlencoded"
			action="http://video2gif.test/video_converter/convert/">
	<p><label>Youtube URL*: <input name="url"></label></p>
	<p><label>Start: <input type=time name="start"></label></p>
	<p><label>Duration: <input name="duration"></label></p>
<!-- 	<p><label>Duration: <input name="quality"></label></p> -->
	Select the quality*:
	<select name='quality' form="video_info">
		<option value="sqcif">sqcif</option>
		<option value="qcif">qcif</option>
		<option value="cif">cif</option>
		<option value="4cif">4cif</option>
		<option value="16cif">16cif</option>
		<option value="qqvga">qqvga</option>
		<option value="qvga">qvga</option>
		<option value="vga">vga</option>
		<option value="svga">svga</option>
		<option value="sameq">Same quality</option>
	</select>
	<p><button>Submit video</button></p>
	</form>
		<p>If you want to get a gif out of a video just fill the url on the text box and press the button.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>