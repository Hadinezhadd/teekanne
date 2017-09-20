 <?php
function cleaner($str) {

    $str = trim($str);
    $str = htmlspecialchars($str, ENT_IGNORE, 'utf-8');
    $str = strip_tags($str);
    //$input = stripslashes($input);
    //$str = mysql_real_escape_string($str);
    //if ($str==='') return null;
    return $str;
}
$thecmd = '';
$thecmd = $_POST['thecmd'];
if ($thecmd == 'ثبت') { 
    $servername = "localhost";
    $username = "khane_teekanne";
    $password = "@pass4teekanne.IR";
    $dbname = "khanehva_teekanne";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO MyGuests (email, tel)  VALUES (:email, :tel)");


        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $tel);

        $email = cleaner($_POST['email']);
        $tel = cleaner($_POST['tel']);
        $stmt->execute();
        $f = 'Y';
    } catch (PDOException $e) {
        $f = 'N';
    }

    $conn = null;
}
?> 
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-language" content="fa"/>  
        <meta name="description" content="تی‌کانه">
        <meta name="keywords" content="تی‌کانه، teekanne">
        <link href="http://www.teekanne.ir/" rel="canonical" />  
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/fontiran.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/fav.ico">
        <title>تی‌کانه</title>


        <link href="css/css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div>
                    <a href="https://khanehvaashpazkhaneh.com/product_list/category/444/#!/1-161/">
                        <img class="img-responsive" style="width:100%" src="img/RAMADAN.jpg" alt="teekanne">
                    </a>
                </div>
                <div class="red-back">
                    <div class="container form">
                        <h4 class="h4">تماس با ما</h4>
                        <form method="post" action="http://teekanne.ir" class="form-inline form-padd">
                            <div class="form-group">
                                <label for="email" class="h4">ايميل :</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label type="text" for="tel" class="h4">موبایل :</label>
                                <input type="text" name="tel" class="form-control"  placeholder="">
                            </div>
                            <div style="padding:20px">
                                <center>
                                    <button type="submit" name="thecmd" value='ثبت' class="btn btn-default btnn">ثبت</button>
                                </center>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="container" style="margin-top:50px">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-1 font">
                                <a href="#"> <img class="img-padding" src="img/a01.png" alt="دم‌نوش بابونه تی‌کانه " /></a>
                                <p>دم‌نوش بابونه تی‌کانه </p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/4009300522782/51">خرید</a>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-1  font">
                                <a href="#"> <img class="img-padding" src="img/a02.png" alt="چای سبز تی‌کانه" /></a>
                                <p>چای سبز تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/4009300524991/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-1  font">
                                <a href="#"><img class="img-padding" src="img/a05.png" alt="دم‌نوش رازیانه تی‌کانه" /></a>
                                <p>دم‌نوش رازیانه تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/4009300522805/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-1  font">
                                <a href="#"><img class="img-padding" src="img/a06.png" alt="دم‌نوش زنجبیل و لیمو تی‌کانه" /></a>
                                <p>دم‌نوش زنجبیل و لیمو تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/4009300525080/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-1  font">
                                <a href="#"><img class="img-padding" src="img/a07.png" alt="دم‌نوش مای تایم تی‌کانه‌" /></a>
                                <p>دم‌نوش مای تایم تی‌کانه‌</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/4009300006855/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-1  font">
                                <a href="#"><img class="img-padding" src="img/a08.png" alt="دم‌نوش نعناع تی‌کانه" /></a>
                                <p>دم‌نوش نعناع تی‌کانه</p>
                                <a class="btn btn-primary" href="">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-1  font">
                                <a href="#"> <img class="img-padding" src="img/a11.png" alt="دم‌نوش چای ترش و گل سرخ تی‌کانه" /></a>
                                <p>دم‌نوش چای ترش و گل سرخ تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/4009300522744/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-1  font">
                                <a href="#"> <img class="img-padding" src="img/a12.png" alt="دم‌نوش نعناع مراکشی تی‌کانه" /></a>
                                <p>دم‌نوش نعناع مراکشی تی‌کانه</p>
                                <a class="btn btn-primary" href="">خرید</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-2  font">
                                <a href="#"><img class="img-padding" src="img/a13.png" alt="چای سیاه  اصیل 1882  تی‌کانه" /></a>
                                <p>چای سیاه  اصیل 1882  تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/6263338900082/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-2  font">
                                <a href="#"> <img class="img-padding" src="img/a09.png" alt="چای سیاه هندوستان تی‌کانه" /></a>
                                <p>چای سیاه هندوستان تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/6263338900066/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-2  font">
                                <a href="#"> <img class="img-padding" src="img/a04.png" alt="چای سیاه سیلان تی‌کانه" /></a>
                                <p> چای سیاه سیلان تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/6263338900020/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-2  font" style="margin-top:50px">
                                <a href="#"> <img class="img-padding" src="img/a10.png" alt="چای کیسه ای سیلان تی‌کانه" /></a>
                                <p> چای کیسه ای سیلان تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/6263338900037/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-2  font">
                                <a href="#"> <img class="img-padding" src="img/a03.png" alt="چای سیاه  ارل گری تی‌کانه" /></a>
                                <p>چای سیاه  ارل گری تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/4009300522782/51">خرید</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 height-2  font" style="margin-top:50px">
                                <a href="#"><img class="img-padding" src="img/a14.png" alt="چای کیسه ای ارل گری تی‌کانه" /></a>
                                <p>چای کیسه ای ارل گری تی‌کانه</p>
                                <a class="btn btn-primary" href="https://khanehvaashpazkhaneh.com/productdetails/show/6263338900129/51">خرید</a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer " >
                    <span><a class="link" href="http://khanehvaashpazkhaneh.com/"> &copy; 2016 KhanehvaAshpazkhaneh.com</a>  </span><span><a class="link" href="http://khanehvaashpazkhaneh.com/"> طراحی و اجرا در واحد تجارت الکترونیک گروه دایا</a></span>
                </div>
            </div>
        </div>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-93151421-1', 'auto');
            ga('send', 'pageview');

        </script>

        <?php
        if ($f == 'Y') {
            echo '<script>';
            echo' alert("اطلاعات با موفقیت ثبت شد")';
            echo '</script>';
        }
        ?>
        hello body   
    </body>
</html>