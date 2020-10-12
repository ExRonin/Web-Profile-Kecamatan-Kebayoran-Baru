<!DOCTYPE html>
<html lang="en">

	    <title>admin Template</title>

<header>
		<title>Upload Foto</title>
		<link rel="stylesheet" type"text/css" href="css/styleDASHBOARD.css">
		<marquee> <h1 style="color:white;" align="center">Kecamatan Kebayoran Baru</h1></marquee>
</header>
		<head>

		<link rel="stylesheet" href="css/bootstrap.minDASHBOARD.css" />
</head>
 
	<aside>
		<nav>
			<ul id="menu">
				<li class="menu-item">
					<a href="index.php" class="" >Dashbord</a>
				</li>
				<li class="menu-item">
					<a href="tampil_keluhan.php" class="">Tampilan Keluhan Warga</a>
				</li>
				<li class="menu-item">
					<a href="logout.php" class="">Logout</a>
				</li>
			</ul>
		</nav>
	</aside>
<div class="container" style="margin-top:8%">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p>
                <center>
                    <h1 style="color:white;">Upload foto</h1>
                    
                </center>
            </p>
           
            <div style="height:55px;">
                
            </div>
            <br>
            <form class="form-horizontal" action="input.php" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label style="color:white;" for="inputEmail3" class="col-sm-3 control-label">Nama Foto</label>
 
                        <div class="col-sm-9">
                            <input type="text" name="title_file" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label style="color:white;" class="col-sm-3 control-label">Pilih Foto</label>
 
                        <div class="col-sm-9">
                            <input style="color:white;" type="file" name="file" >
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
    <script type="text/javascript" src="js/jqueryDASHBOARD.js"></script>
        <script>
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
	
</body>
</html>
  

    
 
