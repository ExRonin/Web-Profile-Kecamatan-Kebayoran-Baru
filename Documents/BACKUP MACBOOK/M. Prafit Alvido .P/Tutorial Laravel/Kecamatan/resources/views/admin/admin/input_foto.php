<html>
<title></title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <center>
                    <h2>Aplikasi upload Foto Sederhana</h2>
                    
                </center>
            </p>
            <div style="height:55px;">
                <?php
                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                        echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
                    }
                    $_SESSION['pesan'] = '';
                ?>
            </div>
            <p>
                <a class="btn btn-primary" href="form.php">Upload Foto</a>
            </p>
                    <?php
                        include"koneksi.php";
                        $no = 1;
                        $data = mysqli_query ($koneksi, " select *
                                                          from
                                                          gambar
                                                          order by id_file DESC");
                        while ($row = mysqli_fetch_array ($data))
                        {
                    ?>
                   
                        <div class="">
                            <img src="file/<?php echo $row['nama_file']; ?>" width="10%">
                            <p>
                                <center><?php echo $row['title_file']; ?></center>
                               
                                <center><a href="hapus.php?id=<?php echo $row['id_file']; ?>">Hapus</a></center>
                            </p>
                               
                        </div>
                   
                <?php
                    }
                ?>
        </div>
    </div>
    <p>
    </p>
</div>
        <script src="style/jquery.min.js"></script>
        <script>
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
</body>
</html>