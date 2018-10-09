<?php
    include "../config.php";
    include "../lib/connect.php";

    if($_POST['condition']==0 && $_POST['deletei']!="-1")
    {
        //date('d-M-Y', strtotime($_POST['date']))
        $sql=mysqli_query($conn," INSERT INTO `KitoDiet`(`title`, `blog`, `create_date`, `release_date`, `writer_name`, `isblog`,`call_to_action`) VALUES ('".$_POST['blogtitle']."', '".mysqli_real_escape_string($conn,$_POST['Summary'])."', '".date('Y-m-d H:i:s')."', '".date('Y-m-d', strtotime($_POST['date']))."', '".$_POST['writtenby']."',1,'".$_POST['cta']."') ");

        if($sql)
            echo "true";
        else
            echo "false"; 
    }
    else if($_POST['condition']==1 && $_POST['deletei']!="-1" )
    {
        $sql=mysqli_query($conn,"UPDATE `KitoDiet` SET `title`='".$_POST['blogtitle']."',`blog`='".mysqli_real_escape_string($conn,$_POST['Summary'])."',`release_date`='".date('Y-m-d', strtotime($_POST['date']))."',`writer_name`='".$_POST['writtenby']."', `call_to_action`='".$_POST['cta']."' WHERE `blog_id`=".$_POST['blog_id']."");

        if($sql)
            echo "true";
        else
            echo "false"; 

    }
    else if($_POST['deletei']=="-1")
    {
        $sql=mysqli_query($conn,"delete from KitoDiet where blog_id=".$_POST['id']." ");
        if($sql)
            echo "true";
        else
            echo "false"; 

    }


