 <!DOCTYPE html>  
<html>   
 <head>   
  <title>Task-1</title>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  </head>  
  <body>  

  <?php 
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

    //Converting the string to array.
    $temp_array = explode(',', $month_temp);

    // Function to find the Average Temperature
    function average_temp($array){
      // Sum of array variable
      $sum_of_array=0;
      // For loop to find the sum of array
      for($i=0;$i<sizeof($array);$i++){
        $sum_of_array=$sum_of_array+$array[$i];
      }
      echo "Average Temperature is : " . ($sum_of_array /sizeof($array));

    }
    function lowest_temp($array){
      // Sorting the Array in ascending order
      sort($array);
      // For Loop to print seven lowest temperatures
      echo "<br/>List of seven lowest temperatures : "; 
      for($i=0; $i<7; $i++) {
        echo $array[$i].", ";
      }
    }
    function highest_temp($array){
      // Sorting the Array in ascending order
      sort($array);
      echo "<br/>List of seven highest temperatures : "; 
      // For Loop to print seven highest temperature
      for($i=sizeof($array)-7; $i<sizeof($array); $i++) {
        echo $array[$i].", ";
      }
    }
		
    // cALLING THE FUNCTIONS
    average_temp($temp_array);
    lowest_temp($temp_array);
    highest_temp($temp_array);
    ?>  
  </body>
  
</html>