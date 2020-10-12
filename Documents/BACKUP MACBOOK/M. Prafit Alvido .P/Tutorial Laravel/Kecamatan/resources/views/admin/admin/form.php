
<html>
<title></title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
 
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p>
                <center>
                    <h2>Upload foto</h2>
                    
                </center>
            </p>
           
            <div style="height:55px;">
                 <?php
                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                        echo '<div id="pesan" class="alert alert-danger" style="display:none;">'.$_SESSION['pesan'].'</div>';
                    }
                    $_SESSION['pesan'] = '';
                ?>
            </div>
            <br>
            <form class="form-horizontal" action="input.php" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Nama Foto</label>
 
                        <div class="col-sm-9">
                            <input type="text" name="title_file" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pilih Foto</label>
 
                        <div class="col-sm-9">
                            <input type="file" name="file" >
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
                    <a href="index.php" class="btn btn-default pull-right" style="margin-right:3%">Batal</a>
                </div>
            </form>
        </div>
    </div>
    <p>

    </p>
</div>
    <script type="text/javascript" src="style/jquery.js"></script>
        <script>
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
</body>
</html>