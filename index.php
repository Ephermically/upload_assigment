<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<div class="container">
		  <div class="row">
		    <div class="col">
		 
		    </div>
		    <div class="col" >
		        <div class="card  mb-3 mt-4 crd" style="max-width: 30rem;" >
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="title" ><h3>Select Image to Upload</h3></label>
                    <div class="card p-2">
                        <input type="file" name="files[]"  multiple >
                    </div>  

	                    <button class="btn btn-primary mt-1 btn-lg btn-block " type="submit">
	                        <i class="fas fa-file-upload"></i>
	                        Upload
	                    </button>
                </form>
            </div>
		    </div>
		    <div class="col">
		     
		    </div>
		  </div>
		</div>

</body>
</html>