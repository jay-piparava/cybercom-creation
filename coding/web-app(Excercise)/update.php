<?php

require 'header.php';
require 'server/server_updaterecord.php';

?>

<div class="container">
    <h1>Update Contact<?php echo " #".$result[0]['id'];  ?></h1>
    <hr>
    <form action="#" method="post" id="form">
    <table>
    	<tr>
    		<td>ID</td>
    		<td>Name</td>
    	</tr>
    	<tr>
    		<td>
    			<input type="text" name="Id" readonly value="<?php  echo $result[0]['id'];  ?>"><br>
    			<span>&nbsp;</span>
    		</td>
    		<td><input type="text" name="name" data-error="#name" value="<?php echo $result[0]['name'];  ?>"><br>
    			<span id="name"><?php echo $nerror; ?></span>
    		</td>
    	</tr>
    	<tr>
    		<td>Email</td>
    		<td>Phone</td>
    	</tr>
    	<tr>
    		<td>
    			<input type="text" name="email" data-error="#email" value="<?php echo $result[0]['email'];  ?>"><br>
    			<span id="email"><?php echo $eerror; ?></span>
    		</td>
    		<td><input type="text" name="phone" data-error="#phone" value="<?php echo $result[0]['phone']; ?>"><br>
    			<span id="phone"><?php  echo $ephone; ?></span>
    		</td>
	   	</tr>
	   	<tr>
    		<td>Title</td>
    		<td>Created</td>
    	</tr>
	   	<tr>
    		<td>
    			<input type="text" name="title" data-error="#title" value="<?php echo $result[0]['title']; ?>"><br>
    			<span id="title"><?php echo $terror; ?></span>
    		</td>
    		<td><input type="text" name="date" readonly value="<?php echo date('d-m-y | h:i:s'); ?>"><br>
    			<span>&nbsp;</span>
    		</td>
    	</tr>
    	<tr>
    		<td colspan="2" align="left">
    			<input type="submit" class="btn" name="submit" value="Update">
    		</td>
    	</tr>
    </table>
	</form>
</div>
<?php

require 'footer.php';

?>