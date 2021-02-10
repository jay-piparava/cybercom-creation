<?php
require 'header.php';
require 'server/server_category.php';
?>

<div class="container">
    <h1>Creare Category</h1>
    <hr>
    <form action="#" method="post" id="form">
    <table>
    	<tr>
    		<td>Title</td>
    		<td>content</td>
    	</tr>
    	<tr>
    		<td>
    			<input type="text" name="title" data-error="#text" value="<?php echo $result[0]['title'];  ?>"><br>
    			<span id="text">&nbsp;</span>
    		</td>
    		<td><input type="text" name="content" data-error="#content" value="<?php echo $result[0]['content']; ?>"><br>
    			<span id="content"></span>
    		</td>
    	</tr>
    	<tr>
    		<td>url</td>
    		<td>metaTitle</td>
    	</tr>
    	<tr>
    		<td>
    			<input type="text" name="url" data-error="#url" value="<?php echo $result[0]['url']; ?>"><br>
    			<span id="url"></span>
    		</td>
    		<td><input type="text" name="meta" data-error="#meta" value="<?php echo $result[0]['meta_title']; ?>"><br>
    			<span id="meta"></span>
    		</td>
	   	</tr>
	   	<tr>
    		<td colspan="2">Image</td>
    	</tr>
	   	<tr>
    		<td>
    			<input type="file" name="file" data-error="#file"><br>
    			<span id="file"></span>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
     $(document).ready(function () {
    $('#form').validate({
      rules: {
        title: {
          required: true
        },
        content: {
          required: true,
        },
        url: {
          required: true,
          url: true
        },
       meta: {
          required: true,
        },
        
      },
      messages: {
        title: 'Please enter title.',
        content: {
          required: 'Please enter Content.',
        },
        url: {
          required: 'Please enter URL.',
          url:"Please enter correct URL."
        },
        meta: {
          required: 'Please enter meta tag.',
        },
        
      },
      errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>