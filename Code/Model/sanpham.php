<?php
function one_sanpham($id_sanpham){
    $sql = "select * from sanpham s inner join chitiet_sanpham c on (s.id_sanpham=c.id_sanpham) where s.id_sanpham=$id_sanpham";
    $one_sanpham = pdo_query_one($sql);
    return $one_sanpham;
}
function sl_1_loai($id_sanpham){
    $sql = "select sum(soluongtonkho) as'soluong' from chitiet_sanpham where id_sanpham=$id_sanpham";
    $sl_1_loai = pdo_query_one($sql);
    return $sl_1_loai;
}
function all_sanpham_home(){
    $sql = "select * from sanpham s inner join danhmuc d on(d.id_danhmuc=s.id_danhmuc)";
    $all_sanpham = pdo_query($sql);
    return $all_sanpham;  
}
function chitiet_sanpham($size , $id_sanpham){
    $sql = "select * from chitiet_sanpham where size_chitiet='$size' and id_sanpham=$id_sanpham";
    $chitiet_sanpham = pdo_query_one($sql);
    // if($chitiet_sanpham == ''){
    //     $check = "0";
    // }
    // return $check;
    return $chitiet_sanpham;
}
function sp_theoloai($id_danhmuc){
    $sql = "select * from sanpham where id_danhmuc=$id_danhmuc";
    $sp_theoloai = pdo_query($sql);
    return $sp_theoloai;
}
?>