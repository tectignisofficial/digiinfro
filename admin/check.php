<?php
include("include/config.php");
if(!empty($_POST["state"])){ 
    $department_id = $_POST["state"];
  $query = mysqli_query($conn,"SELECT state.state_code as stcode,all_cities.city_name as cname, all_cities.state_code as ccode from state inner join all_cities on all_cities.state_code=state.state_code WHERE state.state ='$department_id'"); 
   ?>
   <option>Select city</option>
     <?php while($row = mysqli_fetch_array($query)){  ?>
         <option value="<?php echo $row['cname'] ?>"><?php echo $row['cname']?></option> 
    <?php  } 
  }else{ ?>
    
 <?php } 
?>

<?php
if(!empty($_POST["state_code"])){ 
    $department_id = $_POST["state_code"];
  $query = mysqli_query($conn,"SELECT state.state_code as stcode,all_cities.city_name as cname, all_cities.state_code as ccode from state inner join all_cities on all_cities.state_code=state.state_code WHERE state.state_code ='$department_id'"); 
   ?>
   <option>Select city</option>
     <?php while($row = mysqli_fetch_array($query)){  ?>
         <option value="<?php echo $row['cname'] ?>"><?php echo $row['cname']?></option> 
    <?php  } 
  }else{ ?>
    
 <?php } 
?>