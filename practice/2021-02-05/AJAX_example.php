<!DOCTYPE html>
<html>
<head>
	<title>Ajax Example</title>
	<script type="text/javascript">
		function loadpage(id,fname) {
  			var xhttp = new XMLHttpRequest();
  				xhttp.onreadystatechange = function() {
    				if (this.readyState == 4 && this.status == 200) {
     				document.getElementById(id).innerHTML = this.responseText;
    			}
  			};
  			xhttp.open("GET", fname, true);
  			xhttp.send();
		}
	</script>
</head>
<body>
	<input type="submit" name="submit" onclick="loadpage('txt','incluce_file.php')"><br><br>
	<div id="txt">This content change when click on submit.....</div>
</body>
</html>

