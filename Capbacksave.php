<!DOCTYPE html>
<html>
<head>
<title></title>
<link type="text/css" rel="stylesheet" href="style.css">

</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
 <center>
<div class="main">
<div class="container">
    <form method="POST" action="storeImage.php">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/> 
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
<button class="btn btn-success">&nbspSubmit</button>
             </div>
            </div>
            </div>
                </form>
             <br/>
	<!-- Configure a few settings and attach camera -->
	    <style type="text/css">
       #results { padding:10px; border:1px solid; background:#ccc; }
    </style>
<script language="JavaScript">
    Webcam.set({
        width: 1000,
        height: 1500,
        image_format: 'jpeg',
        jpeg_quality: 100
    }); 
Webcam.set( 'constraints',{ facingMode:'environment' });
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"width="300px"height="170px" />';
        } );
    }
</script>
<style type="text/css">
       #results { padding:10px; border:1px solid; background:#ccc; }
    </style>
<p>
    <div id="results">Your captured image will appear here...</div>
            </div>
             </center>
</p>>
<div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#"><br>Our inspiration : R.D.Kene sir and Shelke sir</a> <br>Design By : 
					<a href="https://html.design/">html design by om waman</a></p>
                
            
        </div><!-- end container -->
    </div><!-- end copyrights -->
</body>
</html>