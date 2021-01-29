<?php
 
$file_del = 'file_for_delete.txt';
if (@unlink($file_del)) {
	echo "File <strong>$file_del</strong> deleted successfully.....";
} else {
	echo "File <strong>$file_del</strong> already deleted.....";
}

?>