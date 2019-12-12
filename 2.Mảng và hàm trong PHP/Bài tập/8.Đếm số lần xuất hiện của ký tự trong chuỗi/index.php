<html>
   
   <head>
      <title>Đếm kí tự trong chuỗi</title>
   </head>
   <body>
   
       <?php
        $string="Đếm kí tự trong chuỗi";  
		$search="t";  
		$count="0";  
		for($x="0"; $x < strlen($string); $x++)  
		  {   
			if(substr($string,$x,1) === $search)  
			{  
			$count = $count+1;  
			 }  
		  }  
		echo "Có " .$count. " kí tự " .$search. " trong chuỗi '" .$string. "'";
       ?>
       
   </body>
</html>