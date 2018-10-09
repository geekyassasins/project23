<?php
   // echo getName("count(*)","OrgnizationMaster as O, InstituteMaster as I", "WHERE O.org_id.Iorg_id and O.org_id=32 ");
    function getName($attributename,$tablename,$condition)
    {
        include "connect.php";
        $sql="SELECT ".$attributename." FROM ".$tablename." ".$condition." ";
        $query=mysqli_query($conn,$sql);
        $return_array=array();
        $row=mysqli_fetch_array($query);
        return $row[$attributename];
    }

    //echo getName("count(*)","InstituteMaster ", " WHERE org_id=32");

//    $data=getName("count(*)","OrgnizationMaster", "");
//    echo $data;//[0][0]."<br>";

//    print_r($data);
//    echo "<br><br><br><br>Requ : ".$data[0][0]['adminusermname'];
?>
