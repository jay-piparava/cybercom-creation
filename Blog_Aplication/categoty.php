<?php

require 'header.php';
require 'lib/DataSource.php';
use App\DataSource;

$data = new DataSource();
$field=array('id','title','meta_title','url','content');
$table = 'category';
$result = $data->getData($field,$table);   
?>
<div class="container">
    <h1>See Category</h1>
    <hr>

    <div>
        <div class="messageShow">
            <?php
            if(isset($_SESSION['insert'])) {
                unset($_SESSION['insert']);
            ?>
                <script type="text/javascript">
                    $('.messageShow').css('float','right');
                    $('.messageShow').html("<label class='fadeoutmsg'>Record Insertrd successfully...</label>");
                    $(".fadeoutmsg").fadeOut(5000);  
                </script>
         <?php 
            }
            if (isset($_SESSION['update_msg'])) {
                unset($_SESSION['update_msg']);
        ?>      <script type="text/javascript">
                    $('.messageShow').css('float','right');
                    $('.messageShow').html("<label class='fadeoutmsg'>Record Updated successfully...</label>");
                    $(".fadeoutmsg").fadeOut(5000);
                </script>
        <?php        
            }
        ?>
        </div>
    </div>

    <a class="btn" href="create_category.php">Add New Category</a><br><br>
    <table>
    	<tr>
    		<th>#</th>
    		<th>title</th>
    		<th>meta title</th>
    		<th>url</th>
    		<th>content</th>
    		<th colspan="2">Action</th>
    	</tr>
<?php
        foreach ($result as $data) {    
    	echo "<tr class='main_tr_".$data['id']."'>";
    		echo "<td>".$data['id']."</td>";
    		echo "<td>".$data['title']."</td>";
    		echo "<td>".$data['meta_title']."</td>";
    		echo "<td>".$data['url']."</td>";
    		echo "<td>".$data['content']."</td>";?>
    		<td><a href="update_category.php?id=<?php echo $data['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
    <?php 
            echo "<td><a href='javascript:;' class='delete' data-id='".$data['id']."'><i class='fa fa-trash' aria-hidden='true'></i></a>";
               	echo "</tr>";
   }
?>
    </table>
</center>
</div>
<script type="text/javascript">
	$('.delete').on('click',function(){
	var id=$(this).data('id');
	$.ajax({
	url:"./server/datadelete.php",
	data:{row_id:id,action:"submit"},
	type:'POST',
	success: function(response){
		if(response == 'success')
		{
			$('.main_tr_'+id).css('display','none');
			$('.main_tr_'+id).html('');
			$('.messageShow').css('float','right');
			$('.messageShow').html("<label class='fadeoutmsg'>Record Deleted successfully...</label>");
			$(".fadeoutmsg").fadeOut(5000);  
		}
		else{
			alert("Sorry! there is an error");
		}
	},error:function(error){
		console.log(error);
		}
	})
})
</script>

<?php

require 'footer.php';

?>