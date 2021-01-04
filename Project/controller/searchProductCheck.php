<?php
$search="";
$value="";
$size="";
$brand ="";
$av="";
if (isset($_POST['submit']))
		{
			
			
			$search = $_POST['search'];
			
			if($search == "shirt")
			{
				$value = "300 taka";
				$size="M";
				$brand="Yellow";
				$av ="Available size= M L XL";
			}
			else if($search=="shari")
			{
				$value = "900 taka";
				$size="60 cm to 1.2m";
				$brand="Beauty Sari Collection";
			}
			else if($search=="jacket")
			{
				$value = "1900 taka";
				$size="M";
				$brand="Gentle Park";
				$av ="Available size= M L XL";
			}
			else if($search=="sofa" || $search=="cover"){
				$value="500 taka";
				$size="2 feet by 4 feet";
			}
			else {
				echo "search result 0";
			}
			
		}
?>