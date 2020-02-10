  <?php
  if (isset($_POST['first']) && isset($_POST['second'])) {
     $first = $_POST['first'];
     $mov = $_POST['mov'];
     $second = $_POST['second'];
	 
	 
	 
  function sum($first,$second){
			return $first + $second;
	}      
   function minus($first,$second){
            return $first - $second;
   } 
     function div($first,$second){
             return $first / $second;
	 }
      function mult($first,$second){
             return $first * $second;
	  }
	  
if ($mov == '+'){
	$result = sum($first,$second);
}	
 elseif	($mov == '-'){
	$result = minus($first,$second);
 }
 elseif ($mov == '/'){
	 $result = div($first,$second);
 }
	 elseif ($mov == '*'){
		 $result = mult($first,$second);
	 }
}
?>