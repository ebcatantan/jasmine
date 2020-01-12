<?php
if (! function_exists('search'))
{
	function search($table)
	{
		echo "<form method='post' action='".base_url() .str_replace("_","-",$table)."'>";
			echo "<div class='input-group'>";
				echo "<input type='text' class='form-control' name='search_something' placeholder='Search for ".ucwords(str_replace("_",' ',$table))."'>";
				echo "<div class='input-group-append'>";
					echo "<button class='btn btn-dark' type='submit'>";
						echo "<i class='fa fa-search'></i>";
					echo "</button>";
				echo "</div>";
			echo "</div>";
		echo "</form>";
	}
}
