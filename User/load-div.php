<?php
$conn = new mysqli("localhost","root","","omr");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$str="";
$str1 ="<h4>PREPAID PLAN</h4>
<label class='control-label' for='basicinput'>VAS</label>
<div class='controls'>
    <select tabindex='1'  name='vas' class='span8' required>
        <option  selected disabled>_____________________________Select VAS________________________</option>
        " ;
         
        $sql = "SELECT * FROM plans";
        $result = $conn->query($sql);
        
        $str2="";
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
           
            $sevices =array($row['services']);
        foreach($sevices as $services ){
           
                        $str2.="<option value=".$services."> ".$services."</option>";
                
                      }
                    }
                  
        }
    
   $str3="</select>
</div>
</div>
<div >
<br>
<label class='control-label' for='basicinput'>Amount</label>
<div class='controls'>
    <select tabindex='1'  name='p_amount' class='span8' required>
        <option  selected disabled>_____________________________Select Amount________________________</option>
        ";
         
        $sql = "SELECT * FROM plans";
        $result = $conn->query($sql);
        $str4="";
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
           
         $amount=$row['amount'];
        
        
        $str4.= "<option value=".$amount.">".$amount."</option>";
    
          }
        }
        
    $str5= "</select>
</div>
</div>";
echo $str1.$str2.$str3.$str4.$str5;

?>
 <div>
											