<?php

$con = mysqli_connect("localhost", "root", "", "booktamu");

function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows =[];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[]= $row ;
    }
    return $rows;

}

function tambah($data){
    global $con;

    $Nama =htmlspecialchars( $_POST["Nama"]);
    $Email =htmlspecialchars ($_POST["Email"]);
    $NoHp =htmlspecialchars ($_POST["NoHp"]);

     //query insert data
     $query = "INSERT INTO tamu
     VALUES
     ('','$Nama','$Email','$NoHp')
     ";
mysqli_query($con ,$query);

return mysqli_affected_rows($con);
}
function hapus($no){
    global $con;
    mysqli_query($con,"DELETE FROM tamu WHERE no = $no");
}

function ubah($data){
    global $con;
    $no =$data["no"];
    $Nama =htmlspecialchars( $_POST["Nama"]);
    $Email =htmlspecialchars ($_POST["Email"]);
    $NoHp =htmlspecialchars ($_POST["NoHp"]);

     //query insert data
     $query ="UPDATE tamu SET
            nama='$Nama',
            email='$Email',
            nohp='$NoHp'
        WHERE no =$no;
     "; 
     
mysqli_query($con ,$query);

return mysqli_affected_rows($con);
}



?>