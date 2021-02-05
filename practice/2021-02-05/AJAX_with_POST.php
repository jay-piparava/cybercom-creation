<!DOCTYPE html>
<html>
<head>
	<title>AJAX WITH POST</title>
	<script type="text/javascript">
		function insert() {
			var xhttp = new XMLHttpRequest();
  				xhttp.onreadystatechange = function() {
    				if (this.readyState == 4 && this.status == 200) {
     				document.getElementById('message').innerHTML = this.responseText;
    			}
  			};
  			var parameter = 'text='+document.getElementById('text').value;
  			xhttp.open("POST", "POST.inc.php", true);
  			xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded')
  			xhttp.send(parameter);
		}
	</script>
</head>
<body>
	<input type="text" name="text" id="text">&nbsp;&nbsp;<input type="submit" name="submit" onclick="insert();">
	<div id="message"></div>
</body> 
</html>
