@extends('makiny_front.layout')

@section('content')
<div class="site-blocks-cover overlay" style="background-image: url({{'/front-assets/images/es.jpg'}});"  title="مكاني" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center ovver">

            <div class="col-md-12">


                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                        <h1  data-aos="fade-up" title="الي اين انت ذاهب"> الي اين انت ذاهب    </h1>
                    </div>
                </div>

                <div  class="form-search-wrap mb-3 cen-from wid-search" data-aos="fade-up" data-aos-delay="200">

                    <form  action="https://makiny.com/search/place" method="get">
                        <div class="row align-items-center ">
                            <div class="col-md-9">
                                <div class="wrap-icon">

                                    <input required  name="search" type="search" class="form-control rounded" placeholder="ابحث عن مكان المفضل">
                                </div>

                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-block rounded" >بحث</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
<div class="container">

    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
            <h3 class="font-weight-light text-primary" title="احدث الاماكن"> احدث الاماكن</h3>
            <p class="color-black-opacity-5" title="اكتشف الانشطه التجاريه">اكتشف الانشطه التجاريه  </p>
        </div>
    </div>


    <!-- start section posts  -->

    <div class="row" >

                <!-- Start post rate  -->
            <div class="col-6 col-md-3"  >

                <div class="d-block d-md-flex listing vertical" >

                    <a href="single/gaza/Gaza_wert_wrt_wadf.html"  title="Gaza">
                        <img src="public/Admin/uploads/Place_image/6MQ2sM8eTr449WG4RMUXbXCuHtIB26300cTANjMi.jpg" alt="Gaza" style="width:100%" class="img d-block" title="Gaza">
                    </a>
                    <div class="lh-content text-right">
                        <h3><a href="single/gaza/Gaza_wert_wrt_wadf.html" style="color: black" title="Gaza"></a></h3>
                        <a href="categories/alsydalyat/Gaza.html" class="category" title="الصيداليات">  الصيداليات </a>
                        <span class="category">  24 ساعه </span>


                        <div class="tepcal">
                            <address>
                                <span> <i class="fa fa-map-marker"></i>  wert , wrt , wadf </span>
                            </address>

                            <span style="font-size: 17px;"> <i class="fa fa-phone fa-rotate-270"></i> 3333</span>
                            <br>
                            <span style="font-size: 17px;"> <i class="fa fa-clock-o"></i> منذ أسبوع </span>
                        </div>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="4.2500" data-size="xs">

                                <input type="hidden" name="id" required="" value="27">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>
                </div>
            </div>

            <!-- End post rate  -->

                    <!-- Start post rate  -->


                        <!-- End rating system  -->
                    </div>
                </div>
            </div>
            <!-- End post rate  -->

                    <!-- Start post rate  -->


                </div>
</div>
</div>
</div>
<!-- End section posts  -->


<!-- Start Section Categories -->


<div class="site-section" data-aos="fade">
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
            <h3 class="font-weight-light text-primary" title="اهم الاقسام"> اهم الاقسام</h3>
            <p class="color-black-opacity-5"> قسم نشاطك التجاري </p>
        </div>
    </div>


    <div class="overlap-category mb-5">
        <div class="row align-items-stretch no-gutters">
                                <div class="col-4 col-md-2">
                    <a href="categories/almfroshat.html" title="المفروشات" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-bacon"></i>  </span></span>
                        <span class="caption mb-2 d-block">المفروشات</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/mnafth-allhom.html" title="منافذ اللحوم" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-drumstick-bite"></i>  </span></span>
                        <span class="caption mb-2 d-block">منافذ اللحوم</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/mtaaam-alasmak.html" title="مطاعم الاسماك" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-fish"></i>  </span></span>
                        <span class="caption mb-2 d-block">مطاعم الاسماك</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/alhdaya.html" title="الهدايا" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-gifts"></i>  </span></span>
                        <span class="caption mb-2 d-block">الهدايا</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/alaaab-alatfal.html" title="العاب الاطفال" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-child"></i>  </span></span>
                        <span class="caption mb-2 d-block">العاب الاطفال</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/alatfal-mlabs.html" title="الاطفال ملابس" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-tshirt"></i>  </span></span>
                        <span class="caption mb-2 d-block">الاطفال ملابس</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/alntharat.html" title="النظارات" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-glasses"></i>  </span></span>
                        <span class="caption mb-2 d-block">النظارات</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/alaator.html" title="العطور" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-wine-bottle"></i>  </span></span>
                        <span class="caption mb-2 d-block">العطور</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/almkyajat.html" title="المكياجات" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-female"></i>  </span></span>
                        <span class="caption mb-2 d-block">المكياجات</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/akssoarat-hrym.html" title="اكسسوارات حريمى" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-female"></i>  </span></span>
                        <span class="caption mb-2 d-block">اكسسوارات حريمى</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/akssoarat-almtbkh.html" title="اكسسوارات المطبخ" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-glass-cheers"></i>  </span></span>
                        <span class="caption mb-2 d-block">اكسسوارات المطبخ</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/akssoarat-syarat.html" title="اكسسوارات سيارات" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-car-side"></i>  </span></span>
                        <span class="caption mb-2 d-block">اكسسوارات سيارات</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/haybr-markt.html" title="هايبر ماركت" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-store"></i>  </span></span>
                        <span class="caption mb-2 d-block">هايبر ماركت</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/althf.html" title="التحف" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-beer"></i>  </span></span>
                        <span class="caption mb-2 d-block">التحف</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/almktbat.html" title="المكتبات" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-book"></i>  </span></span>
                        <span class="caption mb-2 d-block">المكتبات</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/alathath.html" title="الاثاث" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-chair"></i>  </span></span>
                        <span class="caption mb-2 d-block">الاثاث</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/ahthyh-hrymy.html" title="احذيه حريمي" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-shoe-prints"></i>  </span></span>
                        <span class="caption mb-2 d-block">احذيه حريمي</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/mlabs-hrymy.html" title="ملابس حريمي" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-female"></i>  </span></span>
                        <span class="caption mb-2 d-block">ملابس حريمي</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/almshrobat.html" title="المشروبات" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-glass-cheers"></i>  </span></span>
                        <span class="caption mb-2 d-block">المشروبات</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/alsydalyat.html" title="الصيداليات" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-syringe"></i>  </span></span>
                        <span class="caption mb-2 d-block">الصيداليات</span>
                        <span class="number">
                   1
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/aldhanat.html" title="الدهانات" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-paint-roller"></i>  </span></span>
                        <span class="caption mb-2 d-block">الدهانات</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/alsyramyk.html" title="السيراميك" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-box"></i>  </span></span>
                        <span class="caption mb-2 d-block">السيراميك</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/aladoat-alkhrbaeyh.html" title="الادوات الكهربائيه" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-bolt"></i>  </span></span>
                        <span class="caption mb-2 d-block">الادوات الكهربائيه</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/almlabs-alrjaly.html" title="الملابس الرجالي" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-tshirt"></i>  </span></span>
                        <span class="caption mb-2 d-block">الملابس الرجالي</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>

                                <div class="col-4 col-md-2">
                    <a href="categories/ahthyh-rjaly.html" title="احذيه رجالي" class="popular-category h-100">
                        <span class="icon">   <i class="fas fa-shoe-prints"></i>  </span></span>
                        <span class="caption mb-2 d-block">احذيه رجالي</span>
                        <span class="number">
                   0
                    </span>
                    </a>
                </div>



        </div>
    </div>


</div>
</div>



<!-- End Section Categories -->
<!-- Strat  Section Categories -->

<div class="site-section bg-light">
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
            <h3 class="font-weight-light text-primary" title="الاماكن المفضله">الاماكن المفضله</h3>
            <p class="color-black-opacity-5">  الانشطه التجاريه المفضله </p>
        </div>
    </div>
    <div class="row">
        <!-- Start view Places  -->

            <div class="col-12 col-md-6 ">
                <div class="d-block d-md-flex listing">
                    <div class="lh-content text-center" style="height: 200px;">
                        <a href="categories/alsyarat/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87.html" class="category" title="الصيداليات">الصيداليات</a>

                        <h3><a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" title="Gaza">Gaza</a></h3>
                        <address>wert , wrt , wadf</address>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="5.0000" data-size="xs">

                                <input type="hidden" name="id" required="" value="7">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>

                    <a href="single/gaza/Gaza_wert_wrt_wadf.html" class="img d-block"  title="Gaza">
                        <img src="public/Admin/uploads/Place_image/6MQ2sM8eTr449WG4RMUXbXCuHtIB26300cTANjMi.jpg" alt="Gaza" style="width:100%; height: 200px;" >
                    </a>

                </div>
            </div>


            <div class="col-12 col-md-6 ">
                <div class="d-block d-md-flex listing">
                    <div class="lh-content text-center" style="height: 200px;">
                        <a href="categories/alsyarat/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87.html" class="category" title="المطاعم">المطاعم</a>

                        <h3><a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" title="فوكه البحر">فوكه البحر</a></h3>
                        <address>اسكندريه , اسكندريه , شارع البحر</address>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="5.0000" data-size="xs">

                                <input type="hidden" name="id" required="" value="7">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>

                    <a href="single/fokh-albhr/%d9%81%d9%88%d9%83%d9%87_%d8%a7%d9%84%d8%a8%d8%ad%d8%b1_%d8%a7%d8%b3%d9%83%d9%86%d8%af%d8%b1%d9%8a%d9%87_%d8%a7%d8%b3%d9%83%d9%86%d8%af%d8%b1%d9%8a%d9%87_%d8%b4%d8%a7%d8%b1%d8%b9_%d8%a7%d9%84%d8%a8%d8%ad%d8%b1.html" class="img d-block"  title="فوكه البحر">
                        <img src="public/Admin/uploads/Place_image/1lEF6lqINi09nMiPVa5cvgxgH7zjSlGUSkzxsA4C.jpg" alt="فوكه البحر" style="width:100%; height: 200px;" >
                    </a>

                </div>
            </div>


            <div class="col-12 col-md-6 ">
                <div class="d-block d-md-flex listing">
                    <div class="lh-content text-center" style="height: 200px;">
                        <a href="categories/alsyarat/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87.html" class="category" title="الهواتف">الهواتف</a>

                        <h3><a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" title="موبايل استور">موبايل استور</a></h3>
                        <address>اسكندريه , اسكندريه , اسكندريه</address>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="5.0000" data-size="xs">

                                <input type="hidden" name="id" required="" value="7">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>

                    <a href="single/mobayl-astor/%d9%85%d9%88%d8%a8%d8%a7%d9%8a%d9%84_%d8%a7%d8%b3%d8%aa%d9%88%d8%b1_%d8%a7%d8%b3%d9%83%d9%86%d8%af%d8%b1%d9%8a%d9%87_%d8%a7%d8%b3%d9%83%d9%86%d8%af%d8%b1%d9%8a%d9%87_%d8%a7%d8%b3%d9%83%d9%86%d8%af%d8%b1%d9%8a%d9%87.html" class="img d-block"  title="موبايل استور">
                        <img src="public/Admin/uploads/Place_image/9RI1uTKUzopZgSL1KTUiCSNs90p6tNncGt62ZLrt.jpg" alt="موبايل استور" style="width:100%; height: 200px;" >
                    </a>

                </div>
            </div>


            <div class="col-12 col-md-6 ">
                <div class="d-block d-md-flex listing">
                    <div class="lh-content text-center" style="height: 200px;">
                        <a href="categories/alsyarat/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87.html" class="category" title="السيارات">السيارات</a>

                        <h3><a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" title="العاليه للسيارت">العاليه للسيارت</a></h3>
                        <address>الاسكنديه , المدينه الجديده , الكورنيش</address>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="5.0000" data-size="xs">

                                <input type="hidden" name="id" required="" value="7">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>

                    <a href="single/alaaalyh-llsyart/%d8%a7%d9%84%d8%b9%d8%a7%d9%84%d9%8a%d9%87_%d9%84%d9%84%d8%b3%d9%8a%d8%a7%d8%b1%d8%aa_%d8%a7%d9%84%d8%a7%d8%b3%d9%83%d9%86%d8%af%d9%8a%d9%87_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87_%d8%a7%d9%84%d9%83%d9%88%d8%b1%d9%86%d9%8a%d8%b4.html" class="img d-block"  title="العاليه للسيارت">
                        <img src="public/Admin/uploads/Place_image/HMwVqBW1exEWEgJNiMl2AWGh5XORP6KOr7Yc8Nae.jpg" alt="العاليه للسيارت" style="width:100%; height: 200px;" >
                    </a>

                </div>
            </div>


            <div class="col-12 col-md-6 ">
                <div class="d-block d-md-flex listing">
                    <div class="lh-content text-center" style="height: 200px;">
                        <a href="categories/alsyarat/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87.html" class="category" title="السيارات">السيارات</a>

                        <h3><a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" title="العاليه للسيارت">العاليه للسيارت</a></h3>
                        <address>الاسكنديه , المدينه الجديده , الكورنيش</address>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="5.0000" data-size="xs">

                                <input type="hidden" name="id" required="" value="7">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>

                    <a href="single/alaaalyh-llsyart/%d8%a7%d9%84%d8%b9%d8%a7%d9%84%d9%8a%d9%87_%d9%84%d9%84%d8%b3%d9%8a%d8%a7%d8%b1%d8%aa_%d8%a7%d9%84%d8%a7%d8%b3%d9%83%d9%86%d8%af%d9%8a%d9%87_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87_%d8%a7%d9%84%d9%83%d9%88%d8%b1%d9%86%d9%8a%d8%b4.html" class="img d-block"  title="العاليه للسيارت">
                        <img src="public/Admin/uploads/Place_image/L0uXgRU0QTuKTLPFk5AnT5qrLP1OKoEQIRU6vH4g.jpg" alt="العاليه للسيارت" style="width:100%; height: 200px;" >
                    </a>

                </div>
            </div>


            <div class="col-12 col-md-6 ">
                <div class="d-block d-md-flex listing">
                    <div class="lh-content text-center" style="height: 200px;">
                        <a href="categories/alsyarat/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87.html" class="category" title="السيارات">السيارات</a>

                        <h3><a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" title="العاليه للسيارت">العاليه للسيارت</a></h3>
                        <address>الاسكنديه , المدينه الجديده , الكورنيش</address>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="5.0000" data-size="xs">

                                <input type="hidden" name="id" required="" value="7">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>

                    <a href="single/alaaalyh-llsyart/%d8%a7%d9%84%d8%b9%d8%a7%d9%84%d9%8a%d9%87_%d9%84%d9%84%d8%b3%d9%8a%d8%a7%d8%b1%d8%aa_%d8%a7%d9%84%d8%a7%d8%b3%d9%83%d9%86%d8%af%d9%8a%d9%87_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87_%d8%a7%d9%84%d9%83%d9%88%d8%b1%d9%86%d9%8a%d8%b4.html" class="img d-block"  title="العاليه للسيارت">
                        <img src="public/Admin/uploads/Place_image/RT6Dkbf6REODd8Q5YftHHfDxxXU9YjI1OwspWUII.jpg" alt="العاليه للسيارت" style="width:100%; height: 200px;" >
                    </a>

                </div>
            </div>


            <div class="col-12 col-md-6 ">
                <div class="d-block d-md-flex listing">
                    <div class="lh-content text-center" style="height: 200px;">
                        <a href="categories/alsyarat/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87.html" class="category" title="السيارات">السيارات</a>

                        <h3><a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" title="المعرض">المعرض</a></h3>
                        <address>القاهره , اكتوبر , اكتوبر</address>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="5.0000" data-size="xs">

                                <input type="hidden" name="id" required="" value="7">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>

                    <a href="single/almaard/%d8%a7%d9%84%d9%85%d8%b9%d8%b1%d8%b6_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1.html" class="img d-block"  title="المعرض">
                        <img src="public/Admin/uploads/Place_image/w6HVGKHftqwpizMW80P0qMgOv2LDhp8hCTrDtcp0.jpg" alt="المعرض" style="width:100%; height: 200px;" >
                    </a>

                </div>
            </div>


            <div class="col-12 col-md-6 ">
                <div class="d-block d-md-flex listing">
                    <div class="lh-content text-center" style="height: 200px;">
                        <a href="categories/alsyarat/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87.html" class="category" title="السيارات">السيارات</a>

                        <h3><a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" title="المصريه">المصريه</a></h3>
                        <address>القاهره , اكتوبر , المدينه الجديده</address>
                        <!-- start rating system  -->
                        <form action="https://makiny.com/rating/place" method="POST">

                            <input type="hidden" name="_token" value="7UmouZXwRc2fcBmRkhApELBoGYuFzy3LhzLWcUvL">

                            <div class="rating">

                                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="5.0000" data-size="xs">

                                <input type="hidden" name="id" required="" value="7">

                                <button style="color: #fff; margin-top: -7px;" class="btn btn-success"> اضف تقيم</button>

                            </div>

                        </form>

                        <!-- End rating system  -->
                    </div>

                    <a href="single/almsryh/%d8%a7%d9%84%d9%85%d8%b5%d8%b1%d9%8a%d9%87_%d8%a7%d9%84%d9%82%d8%a7%d9%87%d8%b1%d9%87_%d8%a7%d9%83%d8%aa%d9%88%d8%a8%d8%b1_%d8%a7%d9%84%d9%85%d8%af%d9%8a%d9%86%d9%87_%d8%a7%d9%84%d8%ac%d8%af%d9%8a%d8%af%d9%87.html" class="img d-block"  title="المصريه">
                        <img src="public/Admin/uploads/Place_image/pmXrp2pLtvhyWUnv0fMOftHGHtqpK0ELiB6KwHLJ.jpg" alt="المصريه" style="width:100%; height: 200px;" >
                    </a>

                </div>
            </div>

            <!-- End view Places  -->


    </div>
</div>
</div>



@endsection
