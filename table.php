<?php
$current = "table"; //variable to determine what page the user is currently on so the navbar will change color depending on the active page
include ('include/header.php'); //calls the header
?>


<div class="div">
    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="container">
            <div id="tabhead"><h2>LIST OF SOME EUROPEAN COUNTRIES AND THEIR CAPITAL</h2></div>           
            <table class="table table-hover">
                <thead>
                    <tr><th>COUNTRY</th><th>CAPITAL</th></tr> <!--sets the header of the table-->
                </thead>
                <tbody>
                    <?php
                        include('include/array.php'); //calls the array from include/array.php

                        foreach($capital as $country => $city) //enumerates and displays the content of the array one key per row.
                        {

                            echo "<tr><td>".$country."</td><td>".$city."</td></tr>";
                        }


                    ?>
                </tbody>
            </table>
        </div>
        
    </div>

</div>
<?php
    include('include/footer.php');//calls the footer
?>