<?php
    $liningname=$_GET['liningname'];
    $stores=fetch_all("select
                            a.*,
                            b.liningname
                            from tshirt a,lining b
                            inner join lining on tshirt.liningid=lining.liningid
                            where b.liningname='{$liningname}'");
    $str_stores=json_encode(array(
        'stores' => $stores
    ));
    header('Content-Type:application/json');
    echo $str_stores;