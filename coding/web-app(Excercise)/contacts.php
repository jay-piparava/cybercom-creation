<?php
session_start();

require 'header.php';
require 'lib/DataSource.php';
use App\DataSource;

$data = new DataSource();
//$conn = mysqli_connect('localhost','root','','php_test');
$conn = $data->getConn();
/***
Note:here we can call getdata method and get data but for pagination we use this methods.
$fileds = array('id','name','email','phone','title','created');
$table = 'users';
$result = $data->getdata($fileds,$table);
**/  
    $per_page_record = 5;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
    if (isset($_GET["page"])) {    
        echo $page  = $_GET["page"];    
    }    
    else {    
        $page=1;    
    }    
    
    $start_from = ($page-1) * $per_page_record;     
    
    $query = "SELECT * FROM users LIMIT $start_from, $per_page_record";     
    $rs_result = mysqli_query ($conn, $query);    
?>    

<div class="container">
    <h1>Read Contact</h1>
    <hr>

    <div>
        <div class="messageShow">
            <?php
            if(isset($_SESSION['insert'])) {
                session_destroy();
            ?>
                <script type="text/javascript">
                    $('.messageShow').css('float','right');
                    $('.messageShow').html("<label class='fadeoutmsg'>Record Insertrd successfully...</label>");
                    $(".fadeoutmsg").fadeOut(3000);  
                </script>
         <?php 
            }
            if (isset($_SESSION['update'])) {
                session_destroy();
        ?>      <script type="text/javascript">
                    $('.messageShow').css('float','right');
                    $('.messageShow').html("<label class='fadeoutmsg'>Record Updated successfully...</label>");
                    $(".fadeoutmsg").fadeOut(3000);
                </script>
        <?php        
            }
        ?>
        </div>
    </div>

    <a class="btn" href="create.php">Create Contact</a><br><br>
    <table>
    	<tr>
    		<th>#</th>
    		<th>Name</th>
    		<th>Email</th>
    		<th>Phone</th>
    		<th>Title</th>
    		<th>Create</th>
    		<th colspan="2">Action</th>
    	</tr>
<?php
        while ($data = mysqli_fetch_array($rs_result)) {    
                  // each field of the records.    
    	echo "<tr class='main_tr_".$data['id']."'>";
    		echo "<td>".$data['id']."</td>";
    		echo "<td>".$data['name']."</td>";
    		echo "<td>".$data['email']."</td>";
    		echo "<td>".$data['phone']."</td>";
    		echo "<td>".$data['title']."</td>";
    		echo "<td>".$data['created']."</td>";?>
    		<td><button><a href="update.php?id=<?php echo $data['id'] ?>">Edit</a></button></td>
    <?php 
            echo "<td><a href='#' class='delete' data-id='".$data['id']."'>Delete</a>";
               	echo "</tr>";
   }
?>
    </table>
    <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM users";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='contacts.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='contacts.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='contacts.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='contacts.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
    </div>   
  </div>  
</center>
</div>


<?php

require 'footer.php';

?>