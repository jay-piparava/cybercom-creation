<!DOCTYPE html>
<html>
<head>
	<title>Searching.....</title>
	<script type="text/javascript">
		function findmatch(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
     				document.getElementById('result').innerHTML = this.responseText;
    			}
			};
			xhttp.open("GET","search_inc.php?find="+document.search.find.value,true);
			xhttp.send();
		}
	</script>
</head>
<body>
	<form id="search" name="search">
		<input type="text" name="find" onkeyup="findmatch();">
	</form>
	<br>
	<div id="result"></div>
</body>
</html>