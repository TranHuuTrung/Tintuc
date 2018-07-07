<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tin tức trong ngày</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/mystyle.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/category.css">
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="logo" class="navbar-brand" href="./">
        <img src="assets/images/logo.png" alt="doc tin tuc moi ngay">
      </a>
    </div>
  
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse main-menu">
      <ul class="nav navbar-nav">
        <li><a href="./category.php">Trang chủ</a></li>
        <li><a href="./category.php">Sự kiện</a></li>
        <li><a href="./category.php">Xã hội</a></li>
        <li><a href="./category.php">Giáo dục</a></li>
        <li><a href="./category.php">Thế giới</a></li>
        <li><a href="./category.php">Công nghệ</a></li>
        <li><a href="./category.php">Giải trí</a></li>
      </ul>
     
      <form class="input-group form-search">
        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Search">
        <span class="input-group-btn">
          <button type="button" class="btn btn-default">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </form>
      
      
    </div><!-- /.navbar-collapse -->
    </div>
  </nav>
