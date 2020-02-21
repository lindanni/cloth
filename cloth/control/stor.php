<?php
    require_once "../function.php";
    $page=isset($_GET['page'])?(int)$_GET['page']:1;
    $size=4;
    $offset=($page-1)*$size;
    $where="1=1";
    if(!empty($_GET['liningname'])){
        $liningname=$_GET['liningname'];
        $where=$where." and lining.liningname='{$liningname}'";
    }
    if(!empty($_GET['collarname'])){
        $collarname=$_GET['collarname'];
        $where=$where." and collar.collarname='{$collarname}'";
    }
    if(!empty($_GET['str_color'])){
        $str_color=$_GET['str_color'];
        $color=explode(",",$str_color);
        foreach($color as $item){
            $where=$where." and tshirt.color like '%{$item}%'";
        }
    }
    if(!empty($_GET['str_style'])){
        $str_style=$_GET['str_style'];
        $style=explode(",",$str_style);
        foreach($style as $item){
            $where=$where." and tshirt.style like '%{$item}%'";
        }
    }
    if(!empty($_GET['input_text'])){
        $input_text=$_GET['input_text'];
       $where=$where." and tshirt.title like '%{$input_text}%'";
    }
    $toal_count=fetch_one("select count(1) as num
                               from tshirt
                               inner join collar on tshirt.collarid=collar.collarid
                               inner join lining on tshirt.liningid=lining.liningid
                               where {$where};")['num'];
    $toal_page=ceil($toal_count/$size);
    $stores=fetch_all("select
                                tshirt.*,
                                lining.liningname as lining_name,
                                collar.collarname as collar_name
                            from tshirt
                            inner join lining on tshirt.liningid=lining.liningid
                            inner join collar on tshirt.collarid=collar.collarid
                            where {$where}
                            limit {$offset},{$size}");
    $str_stores=json_encode(array(
        'stores' => $stores,
'toal_page' => $toal_page
));
header('Content-Type:application/json');
echo $str_stores;