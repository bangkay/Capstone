<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
		
<!-- Carousel container -->
<div id="my-pics" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#my-pics" data-slide-to="0" class="active"></li>
<li data-target="#my-pics" data-slide-to="1"></li>
<li data-target="#my-pics" data-slide-to="2"></li>
</ol>

<!-- Content -->
<div class="carousel-inner" role="listbox">

<!-- Slide 1 -->
<div class="item active">
<img src="C:\xampp\htdocs\Evaluation-System\image\a.jpg" alt="Sunset over beach">
</div>

<!-- Slide 2 -->
<div class="item">
<img src="C:\xampp\htdocs\Evaluation-System\image\b.jpg" alt="Rob Roy Glacier">
</div>

<!-- Slide 3 -->
<div class="item">
<img src="C:\xampp\htdocs\Evaluation-System\image\a.jpg" alt="Longtail boats at Phi Phi">
</div>

</div>

<!-- Previous/Next controls -->
<a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
<span class="icon-prev" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
<span class="icon-next" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

</div>

<style scoped>
.item img{
    margin: 0 auto;
}
</style>

<!-- Center the image -->


</div>
		
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
</body>
</html>