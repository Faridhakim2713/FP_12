
<?php
    if($_POST['btn-upload'] == "Upload")
    {
        $nama_berkas = $_FILES['berkas']['name'];
        $tipe_berkas = $_FILES['berkas']['type'];
        $ukuran_berkas = $_FILES['berkas']['size'];
        if($nama_berkas != "")
        {
            $sumber = $_FILES['berkas']['tmp_name'];
            $target = "gambar/$nama_berkas";
            if(move_uploaded_file($sumber,$target))
            {
                header("location: index.html");
            }else{
                echo $_FILES['berkas']['error'];
            }
        }
    }
?>
