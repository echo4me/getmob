<?php
ob_start();
error_reporting(0);
require_once 'php'.DIRECTORY_SEPARATOR.'db.php';
$stmt = $con->prepare("SELECT * FROM `stolen_phone` ");
$stmt ->execute();
$rows = $stmt->fetchAll();


ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getmymob.com/show_phone.php">
    <meta name="keywords" content="العثور على هاتفي، تحديد موقع هاتفي، هاتف سامسونج المفقود، العثور على الأجهزة غير المتصلة، جهاز سامسونج المفقود، العثور على جهاز سامسونج، العثور على جهازي اللوحي، العثور على ساعتي، العثور على سماعات الأذن، سرقة أجهزة سامسونج">
    <meta name="description" content="لا داعي للفزع. يمكنك الآن وبسهولة العثور على هاتفك المفقود من خلال زيارة الموقع الإلكتروني Find My Mobile. كما يمكنك أيضًا قفل بياناتك ونسخها احتياطيًا ومسحها عن بُعد.">
    <meta name="sitecode" content="eg">
    <meta name="description" content="تعرض أغلبنا في دوائره لسرقة هاتف مرة على الأقل، في هذا المقال نقدم لك احتياطات يجب اتباعها لتسهيل استعادة هاتفك." />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="ar_AR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="دليلك لاستعادة هاتفك المسروق أو الضائع &ndash; إضاءات" />
    <meta property="og:description" content="تعرض أغلبنا في دوائره لسرقة هاتف مرة على الأقل، في هذا المقال نقدم لك احتياطات يجب اتباعها لتسهيل استعادة هاتفك." />
    <meta property="og:url" content="http://getmymob.com/show_phone.php" />
    <meta property="og:site_name" content="إضاءات" />
    <meta property="article:publisher" content="https://www.facebook.com/getmymob" />
    <meta property="article:published_time" content="2019-02-23T15:32:25+00:00" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="720" />
    <meta property="fb:app_id" content="107124384714302" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@getmymob" />
    <meta name="twitter:site" content="@getmymob" />
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>الهواتف المسروقه</title>
</head>
<body>
    <!-- Start Preloader -->
    <div class="preloader"></div>

    <!-- //end PreLoader -->
    <!-- Start Nav Bar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
        <a class="navbar-brand" href="#"><img width="50" src="assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ul-menu">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">فحص الهاتف <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_phone.php">ادخال هاتف مسروق</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="show_phone.php">عرض الهواتف المسروقه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="how_it_work.php">كيف يعمل</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
<!-- //end navbar -->

<!-- Start Content -->
    <section class="content">
        <div class="container">
            <h1 class="text-center text-success pad-top">الهواتف المسروقة</h1>
            <div class="row">
            <?php foreach($rows as $row): ?>
              
                <div class="col-md-3 offset-md-1 mb-3">
                    <div class="card text-center" >
                        <img class="card-img-top" src="uploads/<?=$row['img'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?=$row['type'] ?></h5>
                            <p class="card-text">الاسم: <strong><?=$row['fullname'] ?></strong></p>
                            <p class="card-text">السريال: <strong><?=$row['serial'] ?></strong></p>
                            <p class="card-text">مكان السرقة: <strong><?=$row['place'] ?></strong></p>
                            <p class="card-text">ميعاد السرقة: <strong><?=$row['date'] ?></strong></p>
                            <p class="card-text">رقم للتواصل: <strong><?=$row['mobile'] ?></strong></p>
                        </div>
                    </div>
                </div>
              
            <?php endforeach ?>
            </div>
        </div>
    </section>
<!-- //end Content -->





<!-- Start Footer -->
<footer class="bg-success text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">كلنا معا</h5>

        <p>
        سجل ليتم التواصل معك عند ايجاد الهاتف
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">كن معنا</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="https://www.facebook.com/getmymob" class="text-white"><i class="fab fa-facebook icons"></i></a>
          </li>
          <li>
            <a href="#" class="text-white"><i class="fab fa-twitter icons"></i></a>
          </li>
          <li>
            <a href="mailto:customer-service@getmymob.com" class="text-white"><i class="fas fa-envelope-square icons"></i></a>
          </li>
          <li>
            <a href="#" class="text-white"><i class="fab fa-instagram icons"></i></a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    &copy; الحقوق:
    <a class="text-white" href="https://www.facebook.com/yalacoding">Yala Coding</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- //End Footer -->
<script src="assets/js/jquery-3.5.1.min.js" ></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js" ></script>
<script src="assets/js/js.js" ></script>
<script>
$(window).on('load',function() {
   $('.preloader').fadeOut('slow');
});
</script>
</body>
</html>
<?php ob_end_flush(); ?>