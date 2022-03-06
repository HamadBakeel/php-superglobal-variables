<?PHP
    $original_array = [1,5,2,5,1,3,2,4];
    echo "Original Array : <br>";
    echo "Array <br>";
    echo "(<br>";
    for($i=0 ; $i<sizeof($original_array); $i++){
        echo '<span style="margin-inline-start: 20px">';
        echo "[$i] => $original_array[$i]<br>";
        echo "</span>";
    }
    echo ")<br>";

    // hardcoded approach
    $updated_array = [];
    // array_push($updated_array,$original_array[0]);
        
    for($i=0 ; $i<sizeof($original_array) ; $i++){
            if(array_search($original_array[$i],$updated_array,false));
            else
                {
                    // echo $original_array[$i]."<br>";
                    // if(sizeof($updated_array) == 0)

                    array_push($updated_array,$original_array[$i]);}
    }
    
      // php built in approach
        echo "<h2>Hard Coded approach: </h2>";
        $updated_array2 = array_unique($updated_array);
        echo "Updated Array : <br>";
        echo "Array <br>";
        echo "(<br>";
        foreach($updated_array2 as $index => $value){
            echo '<span style="margin-inline-start: 20px">';
            echo "[$index] => $value<br>";
            echo "</span>";
        }
        echo ")<br>"; 
        echo "<br>";
    

        // php built in approach
        echo "<h2>Built in approach: </h2>";
        $updated_array2 = array_unique($original_array);
        echo "Updated Array : <br>";
        echo "Array <br>";
        echo "(<br>";
        for($i=0 ; $i<sizeof($updated_array2); $i++){
            
        }
        foreach($updated_array2 as $index => $value){
            echo '<span style="margin-inline-start: 20px">';
            echo "[$index] => $value<br>";
            echo "</span>";
        }
        echo ")<br>";
            echo "<br>";
?>