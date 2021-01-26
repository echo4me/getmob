<?php
ob_start();
error_reporting(0);
require_once 'php'.DIRECTORY_SEPARATOR.'db.php';

$countQuery = $con->prepare("select count(*) from `stolen_phone` ");
$countQuery->execute();
$count = $countQuery->fetch();
$stolen_phone_count = ( $count[0] > 0 )  ? $count[0] : '';

//
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['searchbtn'])) 
{
    $searchq = filter_var($_POST['search'],FILTER_SANITIZE_STRING);
    $stmt = $con->prepare("select * from `stolen_phone` where `serial` LIKE '%$searchq%' ");
    $stmt->execute();
    $row = $stmt->fetch();
}
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
    <title>ابحث عن تليفونك</title>
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
                <a class="nav-link" href="how_it_work.php">كيف يعمل ؟</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
<!-- //end navbar -->

<!-- Start Content -->
    <section class="content">
        <div class="container">
            <h1 class="text-center text-success pad-top font-big">فحص الهواتف المسروقة في مصر </h1>
            <div class="row">
                <div class="col-md-12 ">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                    <div class="form-group">
                        <h5  class='text-center text-primary pb-3'>فحص من خلالIMEI السيريال نمبر</h5>
                        <input type="text" class="form-control " name="search" id="search"  placeholder="الرجاء ادخال السريال">
                    </div>
                
                    <input type="submit" value="بحث" name="searchbtn" class="btn btn-success btn-block">
                    </form>
                    <h4 class="text-secondary pad-top">نحن دائما معك</h1>
                </div>

            </div>
            
            <table class="table table-responsive table-hover table-bordered text-center">
                <thead class="bg-success text-white">
                    <tr>
                        <th>اسم صاحب الهاتف</th>
                        <th>التليفون الشخصى</th>
                        <th>السريال</th>
                        <th class="w-25">مكان السرقة</th>
                        <th>ميعاد السرقه</th>
                        <th>نوع التليفون</th>
                        <th class="w-25">صورة الهاتف</th>
                        
                    </tr>
                </thead>
                <?php 
                    if(!empty($row)){ ?>
                <tbody>

                    <tr>
                       <td><?= $row['fullname'] ;?></td>
                       <td><?= $row['mobile'] ;?></td>
                       <td><?= $row['serial'] ;?></td> 
                       <td><?= $row['place'] ;?></td> 
                       <td><?= $row['date'] ;?></td> 
                       <td><?= $row['type'] ;?></td> 
                       <td><img width="250" height="250" src="uploads/<?= $row['img'] ;?>" alt="img_logo"></td> 
                    </tr>
                
                
                </tbody>
                <?php }else{ echo "<p class='text-center alert alert-info'> الرجاء البحث لظهور البيانات </div>"; } ?>
            </table>
            
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/back_1.jpg" class="img-responsive img-fluid" alt="find">
                </div>
                <div class="col-md-6">
                    <img src="assets/img/back_2.jpg" class="img-responsive img-fluid" alt="find">
                </div>
            </div>
        </div>
    </section>
<!-- //end Content -->

<!-- Data Inserted -->
<section class="text-center dblight pad-top">
    <div class="container">
        <div class="custom_fact_name">
            <h3 class="stat-count"><?=$stolen_phone_count; ?></h3>
            <h6 class="color-red">الهواتف المسروقه</h6>
        </div>
    </div><!-- end container -->
</section>
<!-- //end data inserted -->


<!-- Strt Contact us -->

<section class="contactus pad-top">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 pb-5">
            <!--Form with header-->
            <form action="#" method="post">
                <div class="card border-success rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-success text-white text-center py-2">
                            <h3><i class="fa fa-envelope"></i> اتصل بنا</h3>
                            <p class="m-0">نحن دائما فى خدمتكم</p>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-success"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ضع اسمك" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-success"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="البريد الخاص بك" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-success"></i></div>
                                </div>
                                <textarea class="form-control" placeholder="الرسالة" required></textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit"  value="ارسل" class="btn btn-success btn-block rounded-0 py-2">
                        </div>
                    </div>

                </div>
            </form>
            <!--Form with header-->
        </div>
	</div>
</div>
</section>
<!-- //end Contact us -->


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