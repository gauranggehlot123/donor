<?php
			error_reporting(0);
			mysql_connect("localhost","root","");
			mysql_select_db("iipweb");
			function delete($table,$field,$id)
			  {
					
					if(mysql_query(" delete from $table where $field='$id'"))
					{
						echo "<h1>Deleted Sucesfully</h1>";
					}
				 }
?>
				