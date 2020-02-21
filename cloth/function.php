<?php
    require_once 'config.php';
    session_start();
    function cloth_get_current_user () {
      if (empty($_SESSION['current_login_user'])) {
        // 没有当前登录用户信息，意味着没有登录
        header('Location: /login.php');
        exit(); // 没有必要再执行之后的代码
      }
       return $_SESSION['current_login_user'];
    }
    function fetch_all($sql){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if(!$conn){
            exit();
        }
        $query=mysqli_query($conn,$sql);
        if(!$query){
            return false;
        }
        $result=array();
        while($row=mysqli_fetch_assoc($query)){
            $result[]=$row;
        }
        mysqli_free_result($query);
        mysqli_close($conn);
        return $result;
    }
        function fetch_one($sql){
        $res=fetch_all($sql);
        return isset($res[0])?$res[0]:null;
    }
    function execute($sql){
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if(!$conn){
            exit('连接失败');
        }
        $query=mysqli_query($conn,$sql);
        if(!$query){
            return false;
        }
        $affected_rows=mysqli_affected_rows($conn);
        mysqli_close($conn);
        return $affected_rows;
    }
?>