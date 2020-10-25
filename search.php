<?php
$current = "search"; //variable to determine what page the user is currently on so the navbar will change color depending on the active page
include ('include/header.php');//calls the header

?>

<html>
<body>

<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="search">
        <?php include('include/array.php'); //calls the array from include/array.php
        ?>

        <form action="search.php" method="post"> <!--creates a text box in which the user can type their input-->
            Enter country name: <input type="text" name="country">
            <input type="submit" value="Search">
        </form>

        <br>
        Or
        <br><br>

        <form action="search.php" method="post"> <!--creates a dropdown box with a list of countries available on the array-->
        <label for="country">Select a country:</label>
        <select name="country" id="country">
            <option value="Select"></option>
            
            <?php foreach($capital as $country=>$city) //a loop to put all the key elements (country) on the array in the dropdown box one by one without having to type them all 
                    {    
                        echo "<option value=\"$country\">$country</option>";
                    }    
                    $input = $_POST['country']; //captures the selected key element (Country) and put it inside the variable $input
            ?>

        </select>
        <input type="submit" value="Search">
        </form>

        <div>
            <?php
                
                $searchresult = null; //clears the searchresult variable everytime the program runs for checking later
                if($input!=null)
                {    
                    foreach($capital as $country => $city)  //loops through the array 
                    {

                        if($_REQUEST['country']==$country) //checks of the user input/selection matches one of the key elements in the array
                        {
                            $searchresult = $city; //puts the attribute (City) of the key element (country) to the variable searchresult if it matches 

                        }

                        
                    }
                    if($searchresult!=null) //output the content of the searchresult if it isn't empty
                    {
                        echo "<div class=\"result\">The capital of $input is $searchresult</div>";
                        $searchresult=null; //resets the searchresult variable
                    }else //output an error message if the user didn't select a value/inputs a wrong country
                    {echo "<div class=\"result\">Country could not be found!</div>";}
                }

                

            ?>


        </div>
    </div>
</div>


</body>
</html>


<?php
    include('include/footer.php');//calls the footer
?>