<?php
        require_once '../function.php';
        $id=$_GET['id'];
        if(empty($id)){
        }
        $store=fetch_one("select tshirt.*,
                                 lining.liningname as liningname,
                                 collar.collarname as collarname
                                 from tshirt
                                 inner join lining on tshirt.liningid=lining.liningid
                                 inner join collar on tshirt.collarid=collar.collarid
                                 where id=".$id);
        $_SESSION['store']=$store;
        $str_store=json_encode(array(
            'store' => $store
        ));
        header('Content-Type:application/json');
        echo $str_store;