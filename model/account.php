<?php
function insert_account($fullName, $email, $user, $pass)
{
    $sql = "INSERT INTO account(fullName, email, user, pass) 
            values('$fullName', '$email', '$user', '$pass')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM account WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM account WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$fullname, $user, $pass, $email, $address, $tel,$role)
{
    $sql = "UPDATE `account` SET `fullName` = '$fullname',`user` = '$user', `pass` = '$pass', `email` = '$email', `address` = '$address', `tel` = '$tel',`role` = '$role' 
            WHERE `account`.`id` = $id";
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "SELECT*FROM account ORDER BY id DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function loadOne_user($id)
{
    $sql = "SELECT * FROM account where id=" . $id;
    return pdo_query_one($sql);
}

function delete_taikhoan($id)
{
    $sql = "DELETE FROM account WHERE id=" . $id;
    pdo_execute($sql);
}
function getAllRole()
{
    $sql = "SELECT * FROM role order by id_role";
    return pdo_query($sql);
}
function getOneRole($id){
    $sql="SELECT * FROM role where id_role=".$id;
    return pdo_query_one($sql);
}
