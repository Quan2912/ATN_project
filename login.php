<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<style >
  		.carousel-inner  .item img {
  			margin: auto;
  		}
  	</style>
</head>

<body>
	
<div class="container">
	<div class="grid_demo">
		<div class="col-md-12">
			<header style="background: red"> đây là header 12 cột </header>
			
		</div>
		<div class="col-md-3">
			<section style="background:blue"> chiếm 3 cột</section>
		</div>	
		<div class="col-md-9">
			<article> Chiếm 9 cột </article> 
		 </div>
		 <div class="row">
		 	<div class="col-lg-3 col-sm-12" style="border:1px solid black">  ở tv mỗi phần  tử chiếm 3 cột, ở đt mỗi pt chiếm 4 cột </div>
		 	<div class="col-lg-3 col-sm-12">  ở tv mỗi phần  tử chiếm 3 cột, ở đt mỗi pt chiếm 4 cột </div>
		 	<div class="col-lg-3 col-sm-12">  ở tv mỗi phần  tử chiếm 3 cột, ở đt mỗi pt chiếm 4 cột </div>
		 	<div class="col-lg-3 col-sm-12">  ở tv mỗi phần  tử chiếm 3 cột, ở đt mỗi pt chiếm 4 cột </div>	
		 	</div>
		 	<div class="row" >
		 	<div class="col-md-4 col-sm-6 col-12" style="border:1px solid black; background:blue">mỗi hàng sẽ được chia thành 2 khối</div>
		 	<div class="col-md-8 col-sm-6 col-12 "style="border:1px solid black;background:red">mỗi hàng sẽ được chia thành 2 khối</div>
		 		</div>
		 	</div>
		 </div> 
<div class="row">
	<img  class="col-md-3 col-sm-4 col-12" style="border:1px solid black; background:blue" src="https://tse2.mm.bing.net/th?id=OIP.nujNk65wvZkozptNu3xPIwHaEK&pid=Api&P=0&w=292&h=164">  
	<img  class="col-md-3 col-sm-4 col-12" style="border:1px solid black; background:blue" src="https://tse2.mm.bing.net/th?id=OIP.nujNk65wvZkozptNu3xPIwHaEK&pid=Api&P=0&w=292&h=164">
	  <img  class="col-md-3 col-sm-4 col-12" style="border:1px solid black; background:blue" src="https://tse2.mm.bing.net/th?id=OIP.nujNk65wvZkozptNu3xPIwHaEK&pid=Api&P=0&w=292&h=164">
	  <img  class="col-md-3 col-sm-4 col-12" style="border:1px solid black; background:blue" src="https://tse2.mm.bing.net/th?id=OIP.nujNk65wvZkozptNu3xPIwHaEK&pid=Api&P=0&w=292&h=164">
</div>
<hr>
<hr>
	
</div>
<div class="container">
	<div class="row">
		<ul class="nav nav-tabs">
		<li> <a href="#"> <span class="glyphicon glyphicon-home"> Trang chủ</span> </a></li>
		<li><a href="#"> <span class="glyphicon glyphicon-user">Người dùng</span></a></li>
		<li><a href=""><span class="glyphicon glyphicon-home"> Liên hệ </span></a></li>
	</ul>
	</div>
</div>

<hr>
<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<button type="botton" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"> </span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>		
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li><a href="" ><span class="glyphicon glyphicon-home">Trang chủ </span> </a></li>
			<li><a href=""><span class="glyphicon glyphicon-user"> Người dùng</span></a></li>
			<li><a href=""><span class="glyphicon glyphicon-asterisk"> Tin tức</span></a></li>
			<li><a href=""> <span class="glyphicon glyphicon-envelope"> Liên hệ</span></a></li>
		</ul>
	</div>
	
</nav>

<hr>
<hr>
<br>
<br>
<br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active">
		</li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>

	</ol>
     <div class="carousel-inner">
    		<div class="item active">
    			<img src="https://tse1.mm.bing.net/th?id=OIP.3mqSrPTyTbZo_wV3Qto6CgHaEK&pid=Api&P=0&w=350&h=196">
    		</div >
     		<div class="item">
     			<img src="https://tse4.mm.bing.net/th?id=OIP.NJKfePtbbdT8Aqd_BtropwHaE8&pid=Api&P=0&w=322&h=215 ">
				</div >
				<div class="item">
					<img src="https://tse4.mm.bing.net/th?id=OIP.NJKfePtbbdT8Aqd_BtropwHaE8&pid=Api&P=0&w=322&h=215">
				</div>
     </div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	  <span class="glyphicon glyphicon-chevron-left"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	  <span class="glyphicon glyphicon-chevron-right"></span>
	  <span class="sr-only">Next</span>
	 </a>
</div>
<br>
<br>
<br>
<br>
<br>
 <?php
                        $connect = mysqli_connect('localhost','root','','mydb');
                        if(!$connect){
                            echo "Kết nối thất bại";
                        } 
  
   ?>
<div class="col-md-3 col-sm-6 col-12">
                <div class="card card-product mb-3">
                	<img class="card-img-top" src="https://tse2.mm.bing.net/th?id=OIP.3Fa6k1fMUKAjpw6rorYVnAHaEK&pid=Api&P=0&w=329&h=185">
                	 <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h5 class="card-title"></h5>
                         <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                         	<source src="audio/nhachayvekhocvoianh.mp3" type="audio/mpeg">
                            </audio>
                             <script type="text/javascript">
                                function myAudio(event){
                                    if(event.currentTime>10){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script>
                            <a href='detail.php' class='btn btn-primary'>Details</a>
                        </div>
                    </div>
                </div>

</body>
</html>