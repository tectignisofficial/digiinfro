<?php
include("include/config.php");
if(!empty($_POST["state"])){ 
  $states = $_POST["state"];
$query = mysqli_query($conn,"SELECT * from all_cities inner join state on state.state_code=all_cities.state_code WHERE state.state ='$states'"); 
 ?>
 <option selected disabled>Select city</option>
   <?php while($row = $query->fetch_assoc()){  ?>
       <option value="<?php echo $row['city_name'] ?>"><?php echo $row['city_name']?></option> 
  <?php  } 
} ?>


<?php
if(!empty($_POST["city"])){ 
  $department_id = $_POST["city"];
$query = mysqli_query($conn,"SELECT all_cities.city_code,search_location.city_name,search_location.location_name as loc_name,search_location.city_code from all_cities inner join search_location on search_location.city_name=all_cities.city_name WHERE all_cities.city_name ='$department_id'"); 
 ?>
 <option disabled>Select location</option>
   <?php while($row = $query->fetch_assoc()){  ?>
       <option value="<?php echo $row['loc_name'] ?>"><?php echo $row['loc_name']?></option> 
  <?php  } 
}
?>