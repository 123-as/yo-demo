<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>溜溜溜。走</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/cwtexyen.css">
        <link rel="icon" href="img/title_Horizontal.png?v=<?=time()?>">

    <!-- 連結Bootstrap.min.css -->
    <!-- 客製化Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- 使用font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- 使用product_button.css -->
    <!-- <link rel="stylesheet" href="./css/product_button.css"> -->
    <!-- 使用style1.css -->
    <link rel="stylesheet" href="./css/style.css">  
    <link rel="stylesheet" href="./css/product1.css">  

    <!-- 連結Bootstrap所需要的js -->
    <!-- jquery.min.js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- popper.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script> 
    <!-- bootstrap.min.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- 連結網頁主程式 -->   
    <script src="js/main.js"></script>
  <?php
    $passed=$_COOKIE["passed"];
    if($passed!="TRUE"){
        echo "<script type='text/javascript'>";
        echo "alert('您還未登入，請先登入網站');";
        echo "</script>";
        header("location:index.html");
    }
  ?>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary fixed-top">
        <a class="navbar-brand" href="index.html"><img src="img/title.png" width=100px height=50px alt=""></a>
        <!-- 行動裝置的選單按鈕 -->
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- 其他的元素 -->
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item input">
                    <input placeholder="輸入關鍵字"></input>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link ">首頁</a>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link">帳號</a>
                </li>
                <li class="nav-item">
                    <a href="#gallerySection" class="nav-link">設定</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar結束 -->


    <header id="header" class="jumbotron bg-dark text-secondary ">
            <div class=" animated slideInUp container" >
                <h1 class="row lead1 justify-content-center">溜。走</h1>
                <p class="row lead2 justify-content-center">Stroll & Go </p>
            </div>
    </header>

    

    <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="7000">
        
        <ol class="carousel-indicators">
            <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#imageCarousel" data-slide-to="1"></li>
            <li data-target="#imageCarousel" data-slide-to="2"></li>
            <li data-target="#imageCarousel" data-slide-to="3"></li>
            <li data-target="#imageCarousel" data-slide-to="4"></li>
        </ol>
        
        <div class="carousel-inner" role="listbox">
            
            <div class="carousel-item active">
                <img src="img/jing2_1.png" width=100vw alt="" class="w-100">
            </div>
            
            <div class="carousel-item">
                <img src="img/jing2_2.png" width=100vw alt="" class="w-100">
            </div>
            
            <div class="carousel-item">
                <img src="img/jing2_3.png" width=100vw alt="" class="w-100">
            </div>
            
            <div class="carousel-item">
                <img src="img/jing2_4.png" width=100vw alt="" class="w-100">
            </div>
            
            <div class="carousel-item">
                <img src="img/jing2_5.png" width=100vw alt="" class="w-100">
            </div>
        </div>
        
        <!-- 回到上一頁 -->
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <!-- 移動到下一頁 -->
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- 產品購買 -->
    <section class="py-5 top ">

        <div class="row justify-content-center bottom animated slideInUp">
            <!-- 空白 -->


            <div class="col-md-10   row">
                <div class="col-md-6 mtop30">
                    <div class="introtext intromain">
                        來到北海岸可以欣賞野柳地質多變的地形地貌，感受大自然的神奇力量，還有沿海淡水老街風貌，來一趟北海岸，離開都市的喧囂，走入沿海的美麗景緻吧！
                    </div>
                    <div class="introtext">
                        💥一路沿著北海岸線，享受一邊山景一邊海景的無敵景致❤️
                    </div>
                    <div class="introtext">
                        💥探訪淡水老街、網美必訪石門婚紗廣場、野柳等北海岸經典景點✨
                    </div>
                    <div class="introtext">
                        💥司機領隊專業解說，推薦你必吃小吃、拍照熱點!!
                    </div>    
                        
                        
                    <!-- <img src="img/img_cocacola.png" alt="" width=100%;> -->
                </div>

                <div class="col-md-6 top30">
                    
                    <!-- 產品名稱 -->
                    <div>
                        <h2 style="color:#3C3C3C;"><b>北海岸風光｜白沙灣、淺水灣、野柳<b></h2>
                        <h3 style="color:#3C3C3C;">Eric Juanger</h3>
                    </div>
                    <!-- 幾罐 -->
                    <h3 class="title  " style="color:#3C3C3C;">發佈時間 12月10日 13:44</h3>

                    <div>
                        <a href="index.html">
                            <div class="btn btn-dark btn-block btn-lg mright23">
                                查看地圖
                            </div>
                        </a>
                    </div>
                    
                    
                    <div class="btnn btn-dark btn-block btn-lg">
                        <a href="ok.html" style="color:white; text-decoration:none;"></a>
                        <div class="btn-back btn-lg ">
                            <p class="ask">確認安排?</p>
                            <button class="yes"> <a href="ok.html" class="wordyes">Yes</a></button>
                            <button class="no">No</button>
                        </div>
                        <div class="btn-front ">立即安排行程</div>

                    </div>

                    <div class="space2"> </div>

                </div>

            </div>
        </div>
        <div class="space"></div>


        <!-- 其他商品 -->
        <div class="row justify-content-center ">

            <div class="col-md-10 d-flex flex-row mbottom20 ">
                <!-- TODO: 設定使用者照片變圓型 -->
                <img src="img/logo.png" alt="icon" width=50px;>
                <h6 class="title" style="color:#3C3C3C;">您可能感興趣</h6>
            </div>

            <div class="col-md-2 col-10 other-product">
                <img src="img/jing3_1.png" alt="" width=92%; height=70%; class="mleft15">
                <a href="product1.html" style="text-decoration:none;">
                    <h4 class=" mtop20 mleft15">淡江夕照｜老街、河岸風光、漁人碼頭</h4>
                
                    <!-- ￼ -->
                </a>
            </div>

            <div class=" col-md-2 col-10 other-product">
                <img src="img/jing3_4.png" alt="" width=92%; height=70%; class="mleft15">
                <a href="product1.html" style="text-decoration:none;">
                    <h4 class=" mtop20 mleft15">台江生態｜安平美食、紅樹林、府城巡禮
                        &emsp;
                        &emsp;
                    </h4>
                    <!-- <h4 class="mleft15">NT$ 500</h4> -->
                </a>

            </div>
            <div class="col-md-2 col-10 other-product">
                <img src="img/jing3_2.png" alt="" width=92%; height=70%; class="mleft15">
                <a href="product1.html" style="text-decoration:none;">
                    <h4 class=" mtop20 mleft15">南國風情｜古城、墾丁大街、珊瑚礁海岸線
                        &emsp;
                        
                    </h4>
                    <!-- <h4 class="mleft15">NT$ 100</h4> -->
                </a>

            </div>
            <div class="col-md-2 col-10 other-product">
                <img src="img/jing3_3.png" alt="" width=92%; height=70%; class="mleft15">
                <a href="product1.html" style="text-decoration:none;">
                    <h4 class=" mtop20 mleft15">鶯桃一日遊｜鶯歌老街、陶瓷博物短、中平商圈
                        &emsp;
                        
                    </h4>
                    <!-- <h4 class="mleft15">NT$ 529</h4> -->
                </a>

            </div>
        </div>

        <div class="other">

        </div>
        <!-- 其他商品結束 -->

    </section>
    <!-- 產品購買結束 -->


    <!-- footer -->
    <footer id="footer" class="pt-5 bg-secondary text-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-2  col-12 footer-list">
                    <h5>聯繫我們</h5>
                    <a href="mailto:service@brand.com"
                        style="text-decoration:none; color:#FFFFFF;">yuan880502@gmail.com</a>
                </div>
                <div class="col-md-2 "></div>
                <div class="col-md-2 col-6 footer-list">
                    <h5 class="text-uppercase">首頁</h5>
                    <ul>
                        <li>
                            <a href="index.html" style="text-decoration:none; ">最新消息</a>
                        </li>
                        <li>
                            <a href="index.html" style="text-decoration:none;">其他資訊</a>
                        </li>
                        <li>

                    </ul>
                </div>
                <div class="col-md-2 col-6 footer-list">
                    <h5 class="text-uppercase">最新消息</h5>
                    <ul>
                        <li>
                            <a href="#" style="text-decoration:none; ">新興景點</a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration:none; ">心情分享</a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-2 col-6 footer-list">
                    <h5 class="text-uppercase">其他資訊</h5>
                    <ul>
                        <li>
                            <a href="#" style="text-decoration:none; ">活動/優惠</a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration:none;">旅遊誌</a>
                        </li>

                    </ul>
                </div>

                <div class="col-md-2 col-6 footer-list">
                    <h5 class="text-uppercase">加入會員</h5>
                    <ul>
                        <li>
                            <a href="#" style="text-decoration:none; ">登入</a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration:none;">註冊</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </footer>


</body>

</html>