<!doctype html>
<html lang="zh">

<head>
    <?php include "header-title.php"; ?>

</head>

<body>
    <div class="wp" id="index">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <h1 class="hidden">胡連精密股份有限公司</h1>
            <div class="index-banner-wrapper">
                <div class="slider">
                    <div class="position-relative">
                        <div class="imgFill h-100" data-query="size">
                            <picture>
                                <source media="(min-width: 576px)" srcset="styles/images/index/banner-1.jpg" />
                                <source media="(max-width: 575px)" srcset="styles/images/index/mobile-banner1.png" />
                                <img src="#" alt="胡連精密" />
                            </picture>
                        </div>
                        <div class="text text-white position-absolute">
                            <p class="font-80 font-weight-bold mb-md-4">
                                <span class="d-block">Professional</span>
                                <span class="d-block">Connector</span>
                                <span class="d-block">Manufacture</span>
                            </p>
                            <p class="font-24">全球專業汽車業連接器和端子供應商</p>
                            <a href="products-1" class="d-table Heebo font-15 font-weight-bold les2 border-white rounded-25 bg-hover-white text-hover-red py-3 px-4 mt-3 mt-md-5">ALL PRODUCTS</a>
                        </div>
                        <div class="circle-group position-absolute">
                            <div class="circle absolute-center">
                                <div class="wave wave-1"></div>
                                <div class="wave wave-2"></div>
                                <div class="wave wave-3"></div>
                                <div class="wave wave-4"></div>
                                <div class="wave wave-5"></div>
                                <div class="wave wave-6"></div>
                                <div class="wave wave-7"></div>
                                <div class="wave wave-8"></div>
                                <div class="wave wave-9"></div>
                                <div class="wave wave-10"></div>
                            </div>
                            <div class="circle-bg bg-white rounded-circle position-relative">
                                <img class="position-relative" src="styles/images/index/radius-product.png" alt="胡連精密">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div class="imgFill h-100" data-query="size">
                            <picture>
                                <source media="(min-width: 576px)" srcset="styles/images/index/banner-2.jpg" />
                                <source media="(max-width: 575px)" srcset="styles/images/index/mobile-banner2.png" />
                                <img src="#" alt="胡連精密" />
                            </picture>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div class="imgFill h-100" data-query="size">
                            <picture>
                                <source media="(min-width: 576px)" srcset="styles/images/index/banner-3.jpg" />
                                <source media="(max-width: 575px)" srcset="styles/images/index/mobile-banner3.png" />
                                <img src="#" alt="胡連精密" />
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank">
                <div class="max1640">
                    <div class="index-products row pt-md-3 mt-md-2 mx-0 pb-4">
                        <div class="col-12 col-xl-6 border-right-xl-C8C8C8 pl-0 pr-0 pr-xl-4 pr-xxl-5 pt-3 pt-md-4">
                            <h2 class="hidden">產品進階搜尋</h2>
                            <p class="font-weight-bold" data-aos="fade-up">
                                <span class="font-20 mr-2">產品進階搜尋</span>
                                <span class="font-18 text-BABABA">PRODUCT SEARCH</span>
                            </p>
                            <form action="index" class="pt-md-3">
                                <div class="d-flex flex-wrap align-center bg-F4F4F4 border-C8C8C8 py-3 px-3 px-sm-4" data-aos="fade-up">
                                    <div class="radio-style-1 col-12 col-sm-auto p-0">
                                        <input class="d-none" type="radio" name="searchMethod" id="keyword">
                                        <label for="keyword" class="font-weight-500">依產品關鍵字搜尋</label>
                                    </div>
                                    <input class="flex-grow px-0 px-md-1 py-1 py-sm-2 ml-sm-4" type="text" placeholder="請輸入關鍵字...">
                                    <div class="text-red">
                                        <i class="icon-search"></i>
                                    </div>
                                </div>
                                <div class="d-xxl-flex position-relative z-1 border-bottom-C8C8C8 pl-md-4 mt-3 mt-md-4 pb-4 mb-4">
                                    <div class="radio-style-1 mt-md-2 pt-md-1" data-aos="fade-up">
                                        <input class="d-none" type="radio" name="searchMethod" id="specification">
                                        <label for="specification" class="font-weight-500">依規格搜尋</label>
                                    </div>
                                    <div class="flex-grow pl-xxl-3 mt-2 mt-md-3 mt-xxl-0" data-aos="fade-up">
                                        <div class="mb-2 pb-sm-1">
                                            <div class="border-sm-C8C8C8 rounded-5 row m-0">
                                                <div class="col-12 col-sm-4 p-0 border-right-sm-C8C8C8 border-C8C8C8 border-sm-0 mb-2 mb-sm-0">
                                                    <select name="type-1" id="type-1" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">產品類別</option>
                                                        <option value="">所有(All)</option>
                                                        <option value="">膠盒 H</option>
                                                        <option value="">端子 T</option>
                                                        <option value="">防水栓 R</option>
                                                        <option value="">PVC絕緣護套 S</option>
                                                        <option value="">索環護套 G</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-4 p-0 border-right-sm-C8C8C8 border-C8C8C8 border-sm-0 mb-2 mb-sm-0">
                                                    <select name="type-2" id="type-2" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">尺寸類型 (H/T/R/S/G)</option>
                                                        <option value="">025,050,110[0.64,1.20,2.80mm]</option>
                                                        <option value="">025,060[0.64,1.50mm]</option>
                                                        <option value="">025,090[0.64,2.20mm]</option>
                                                        <option value="">025,110[0.64,2.80mm]</option>
                                                        <option value="">025,110[0.64,2.80mm]</option>
                                                        <option value="">030,040[0.80,1.00mm]</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-4 p-0 border-C8C8C8 border-sm-0">
                                                    <select name="type-3" id="type-3" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">功能類別 (H/T/R/S/G)</option>
                                                        <option value="">電動汽車</option>
                                                        <option value="">保險絲</option>
                                                        <option value="">保險絲型膠盒</option>
                                                        <option value="">電子用膠盒</option>
                                                        <option value="">儀表板型膠盒</option>
                                                        <option value="">耳扒端子絕緣膠盒</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-sm-1">
                                            <div class="border-sm-C8C8C8 rounded-5 row m-0">
                                                <div class="col-12 col-sm-4 p-0 border-right-sm-C8C8C8 border-C8C8C8 border-sm-0 mb-2 mb-sm-0">
                                                    <select name="type-4" id="type-4" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">系列碼 (H)</option>
                                                        <option value="">OOOOOOO</option>
                                                        <option value="">OOOOOOO</option>
                                                        <option value="">OOOOOOO</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-4 p-0 border-right-sm-C8C8C8 border-C8C8C8 border-sm-0 mb-2 mb-sm-0">
                                                    <select name="type-5" id="type-5" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">公/母 (H/T)</option>
                                                        <option value="">公端</option>
                                                        <option value="">母端</option>
                                                        <option value="">N/A</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-4 p-0 border-C8C8C8 border-sm-0">
                                                    <select name="type-6" id="type-6" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">防水/非防水 (H/T)</option>
                                                        <option value="">防水</option>
                                                        <option value="">非防水</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-sm-1">
                                            <div class="border-sm-C8C8C8 rounded-5 row m-0">
                                                <div class="col-12 col-sm-4 p-0 border-right-sm-C8C8C8 border-C8C8C8 border-sm-0 mb-2 mb-sm-0">
                                                    <select name="type-7" id="type-7" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">孔數</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-4 p-0 border-right-sm-C8C8C8 border-C8C8C8 border-sm-0 mb-2 mb-sm-0">
                                                    <select name="type-8" id="type-8" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">適用溫度 (H)</option>
                                                        <option value="">-40~125</option>
                                                        <option value="">0~100</option>
                                                        <option value="">-40~110</option>
                                                        <option value="">-40~90</option>
                                                        <option value="">-30~140</option>
                                                        <option value="">-10~100</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-4 p-0 border-C8C8C8 border-sm-0">
                                                    <select name="type9" id="type-9" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                        <option value="">料厚 (T)</option>
                                                        <option value="">OOOOOOO</option>
                                                        <option value="">OOOOOOO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-sm-1">
                                            <div class="row m-0">
                                                <div class="col-12 col-sm-8 row border-sm-C8C8C8 rounded-5 m-0 p-0 mb-2 mb-sm-0">
                                                    <div class="col-12 col-sm-6 p-0 border-right-sm-C8C8C8 border-C8C8C8 border-sm-0 mb-2 mb-sm-0">
                                                        <select name="type-10" id="type-10" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                            <option value="">適用線徑 (mm2) (T)</option>
                                                            <option value="">OOOOOOO</option>
                                                            <option value="">OOOOOOO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 p-0 border-C8C8C8 border-sm-0">
                                                        <select name="type-11" id="type-11" class="selectpicker firstHide style-1 style-1-1 red-tri w-100">
                                                            <option value="">尺寸(W/L/H/D/D1/D2)</option>
                                                            <option value="">OOOOOOO</option>
                                                            <option value="">OOOOOOO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-table d-sm-flex justify-between pt-2 mx-auto mx-sm-0">
                                    <p class="d-flex align-center font-20 font-weight-500 mb-0" data-aos="fade-up">
                                        <span>共篩選到</span>
                                        <span class="d-inline-block font-22 text-white rounded-25 les1 px-3 mx-3" style=" background: linear-gradient(to right,#FD2D2D,#C00101); box-shadow: 0 2px 5px rgba(0,0,0,0.3);">
                                            <span class="d-block py-1">25</span>
                                        </span>
                                        <span>個符合條件的產品</span>
                                    </p>
                                    <button type="submit" class="btn-style-1 bg-black text-white btn-dec mt-3 mt-sm-0 mx-auto mr-sm-0" data-aos="fade-up">瀏覽搜尋結果</button>
                                </div>
                            </form>
                        </div>
                        <div class="latest text-center text-md-left col-12 col-xl-6 pr-0 pl-0 pl-xl-4 pl-xxl-5 pt-4">
                            <h2 class="hidden">最新產品資訊</h2>
                            <p class="font-weight-bold" data-aos="fade-up">
                                <span class="font-20 mr-2">最新產品資訊</span>
                                <span class="font-18 text-BABABA">NEW PRODUCTS</span>
                            </p>
                            <div class="d-md-flex d-xl-block d-xxl-flex align-center pt-md-3 mb-5 pb-2">
                                <div class="bg-F4F4F4 flex-grow" data-aos="fade-up">
                                    <div>
                                        <ul class="row noneStyle les06">
                                            <li class="border-right-dec-C8C8C8 col-auto active">
                                                <a href="./" class="d-block text-hover-red py-2 py-md-3">
                                                    <span class="d-block py-1">膠盒</span>
                                                </a>
                                            </li>
                                            <li class="border-right-dec-C8C8C8 col-auto">
                                                <a href="./" class="d-block text-hover-red py-2 py-md-3">
                                                    <span class="d-block py-1">端子</span>
                                                </a>
                                            </li>
                                            <li class="border-right-dec-C8C8C8 col-auto">
                                                <a href="./" class="d-block text-hover-red py-2 py-md-3">
                                                    <span class="d-block py-1">防水栓</span>
                                                </a>
                                            </li>
                                            <li class="border-right-dec-C8C8C8 col-auto">
                                                <a href="./" class="d-block text-hover-red py-2 py-md-3">
                                                    <span class="d-block py-1">PVC絕緣護套</span>
                                                </a>
                                            </li>
                                            <li class="border-right-dec-C8C8C8 col-auto">
                                                <a href="./" class="d-block text-hover-red py-2 py-md-3">
                                                    <span class="d-block py-1">索環護套</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div data-aos="fade-up">
                                    <a href="products-4" class="d-block bg-DCDCDC text-hover-red py-2 py-md-3 px-4">
                                        <span class="d-block py-1">新品專區All</span>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="slider max820 arrows-style-1 dots-style-1 px-0" data-aos="fade-up">
                                    <div class="mb-3">
                                        <div class="row flex-wrap mx-0">
                                            <div class="col-12 col-md-7 pl-0 pl-md-5 pr-0">
                                                <div class="px-5 px-md-0 pl-xxl-4">
                                                    <img src="styles/images/index/latestPorudct-1.png" alt="胡連精密">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 px-0 pt-md-4">
                                                <p class="font-20 font-weight-bold mb-2">325210080AFT</p>
                                                <ul class="noneStyle text-646464 mb-4 pb-2">
                                                    <li class="mb-1">產品品號 : 325210080AFT</li>
                                                    <li class="mb-1">產品類別 : 膠盒</li>
                                                    <li class="mb-1">家族名稱 / 系列 : 250[6.00mm]</li>
                                                    <li class="mb-1">尺寸 / L:20.8 W:32.3 H:24.2</li>
                                                </ul>
                                                <a href="product" class="btn-style-1 bg-black text-white btn-dec mx-auto ml-md-0">深入了解</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row flex-wrap mx-0">
                                            <div class="col-12 col-md-7 pl-0 pl-md-5 pr-0">
                                                <div class="px-5 px-md-0 pl-xxl-4">
                                                    <img src="styles/images/index/latestPorudct-1.png" alt="胡連精密">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 px-0 pt-md-4">
                                                <p class="font-20 font-weight-bold mb-2">325210080AFT</p>
                                                <ul class="noneStyle text-646464 mb-4 pb-2">
                                                    <li class="mb-1">產品品號 : 325210080AFT</li>
                                                    <li class="mb-1">產品類別 : 膠盒</li>
                                                    <li class="mb-1">家族名稱 / 系列 : 250[6.00mm]</li>
                                                    <li class="mb-1">尺寸 / L:20.8 W:32.3 H:24.2</li>
                                                </ul>
                                                <a href="product" class="btn-style-1 bg-black text-white btn-dec mx-auto ml-md-0">深入了解</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row flex-wrap mx-0">
                                            <div class="col-12 col-md-7 pl-0 pl-md-5 pr-0">
                                                <div class="px-5 px-md-0 pl-xxl-4">
                                                    <img src="styles/images/index/latestPorudct-1.png" alt="胡連精密">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 px-0 pt-md-4">
                                                <p class="font-20 font-weight-bold mb-2">325210080AFT</p>
                                                <ul class="noneStyle text-646464 mb-4 pb-2">
                                                    <li class="mb-1">產品品號 : 325210080AFT</li>
                                                    <li class="mb-1">產品類別 : 膠盒</li>
                                                    <li class="mb-1">家族名稱 / 系列 : 250[6.00mm]</li>
                                                    <li class="mb-1">尺寸 / L:20.8 W:32.3 H:24.2</li>
                                                </ul>
                                                <a href="product" class="btn-style-1 bg-black text-white btn-dec mx-auto ml-md-0">深入了解</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row flex-wrap mx-0">
                                            <div class="col-12 col-md-7 pl-0 pl-md-5 pr-0">
                                                <div class="px-5 px-md-0 pl-xxl-4">
                                                    <img src="styles/images/index/latestPorudct-1.png" alt="胡連精密">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 px-0 pt-md-4">
                                                <p class="font-20 font-weight-bold mb-2">325210080AFT</p>
                                                <ul class="noneStyle text-646464 mb-4 pb-2">
                                                    <li class="mb-1">產品品號 : 325210080AFT</li>
                                                    <li class="mb-1">產品類別 : 膠盒</li>
                                                    <li class="mb-1">家族名稱 / 系列 : 250[6.00mm]</li>
                                                    <li class="mb-1">尺寸 / L:20.8 W:32.3 H:24.2</li>
                                                </ul>
                                                <a href="product" class="btn-style-1 bg-black text-white btn-dec mx-auto ml-md-0">深入了解</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-white m-0">
                <div class="col-12 col-xl-6 px-0">
                    <div class="index-about background-cover pt-5 pb-5" style="background-image:url(styles/images/index/about-bg.jpg)" data-aos="fade-up">
                        <div class="blank pr-xl-0 pt-sm-4 mt-sm-2 mb-1">
                            <div class="d-xl-table ml-auto">
                                <div class="max820">
                                    <p class="font-40 font-weight-bold les06 lh14 mb-0 mb-xxl-4 pb-3" data-aos="fade-up">AUTO WORLD WE CONNECT</p>
                                    <p class="font-20 opacity05 font-weight-bold mb-0 mb-sm-1" data-aos="fade-up">ABOUT HU LANE</p>
                                    <h2 class="font-30 mb-0 mb-xxl-4" data-aos="fade-up">關於胡連</h2>
                                    <div class="row pr-xl-4 mx-0 pt-3">
                                        <div class="col-12 col-md-6 col-xl-12 col-xxxl-6 scrollbarY pl-0 pr-0 pr-md-4 pr-xl-0 pr-xxl-4">
                                            <div class="pr-1">
                                                <ul class="noneStyle ul-style-1">
                                                    <li data-aos="fade-up">全球專業汽車業連接器和端子供應商</li>
                                                    <li data-aos="fade-up">醫療端子、家電用品連接器和端子、板端連接器</li>
                                                    <li data-aos="fade-up">塑膠連接器、金屬端子、車用橡膠類產品自主開發與製造</li>
                                                    <li data-aos="fade-up"> IATF 16949 國際認證</li>
                                                    <li data-aos="fade-up"> ISO 14001 國際環保管理認證</li>
                                                </ul>
                                                <p data-aos="fade-up">胡連公司成立於 1977 年，一直致力於汽、機車端子等連接器之開發，均以誠信的態度及務實的作法來面對客戶，提供優良的產品與服務滿足顧客的需求，為顧客爭取最大的利益。</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-12 col-xxxl-6 pl-0 pr-0 pr-xl-4" data-aos="fade-up">
                                            <button type="button" class="position-relative shadow rounded-25 d-table mx-auto" data-toggle="modal" data-target="#videoModal">
                                                <img src="styles/images/index/about-video-preview.png" alt="胡連精密">
                                                <span class="d-block absolute-center border-white-5 rounded-circle">
                                                    <i class="d-block icon-play font-24 text-white lh14 py-3 px-4"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more position-absolute">
                            <a href="about" class="d-block text-white py-2 py-sm-3 py-lg-4 px-3 px-lg-5" data-aos="fade-up">
                                <span class="flex-center px-4 mx-lg-3">
                                    <span class="mr-3 mr-sm-4 pr-sm-1">關於胡連 │ 深入了解</span>
                                    <span class="border-white rounded-circle flex-center" style="width:50px;height:50px;">
                                        <i class="icon-right-big font-20"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="index-global position-static position-xl-relative background-cover col-12 col-xl-6 px-0" style="background-image:url(styles/images/index/global-bg.jpg)">
                    <div class="border-white m-3 p-3 p-lg-5">
                        <div class="d-md-flex justify-center pt-4 pt-sm-5 pb-4 mt-sm-3">
                            <div class="text-center text-md-right pr-md-5" data-aos="fade-up">
                                <p class="font-20 opacity05 font-weight-bold mb-sm-1">GLOBAL LOCATIONS</p>
                                <h2 class="font-30">全球據點</h2>
                            </div>
                            <div class="text-center text-md-left pb-3" data-aos="fade-up">
                                <p class="max300 mx-auto ml-md-0">在1977年成立的Hu Lane Associates Inc.，我們的重點一直是為汽車和摩托車行業開發終端產品。(模擬文案)</p>
                                <div class="d-table pt-sm-3 mx-auto ml-md-0">
                                    <a href="stronghold" class="border-white btn-style-1 bg-darkGreen bg-hover-lightGreen btn-dec">深入了解</a>
                                </div>
                            </div>
                        </div>
                        <div class="pb-sm-5 mb-3">
                            <div class="slider mt-sm-5 mb-lg-5 pb-sm-5 pb-xl-0" data-aos="fade-up">
                                <div>
                                    <div class="position-relative bg-white rounded-15 p-1">
                                        <img class="rounded-15 w-100" src="styles/images/index/global-1.jpg" alt="胡連精密">
                                        <span class="position-absolute font-17 font-weight-bold">台北新廠</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative bg-white rounded-15 p-1">
                                        <img class="rounded-15 w-100" src="styles/images/index/global-2.jpg" alt="胡連精密">
                                        <span class="position-absolute font-17 font-weight-bold">南京廠</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative bg-white rounded-15 p-1">
                                        <img class="rounded-15 w-100" src="styles/images/index/global-1.jpg" alt="胡連精密">
                                        <span class="position-absolute font-17 font-weight-bold">台北新廠</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank mt-xl-5 pt-xl-5">
                <div class="max1640 index-news text-center text-sm-left mb-sm-4 mb-xl-5">
                    <h2 class="hidden">最新訊息</h2>
                    <div class="">
                        <div class="d-sm-flex pb-3 pb-sm-5 mb-sm-1" data-aos="fade-up">
                            <div class="title d-table position-relative w-100 mr-4" style="flex:0 0 305px">
                                <p class="d-inline-block text-646464 font-20 font-weight-bold bg-white pr-3 mb-0">NEWS & EVENT</p>
                            </div>
                            <div class="arrows d-table position-relative arrows-style-1 clearfix pl-sm-3 mt-2 mt-sm-0"></div>
                        </div>
                        <div class=" slider dots-style-1" data-aos="fade-up">
                            <div class="px-sm-3 px-lg-0">
                                <h3 class="hidden">產品顏色標準制定公告</h3>
                                <a href="new" class="row text-hover-red mx-0 mx-xl-3">
                                    <span class="col-12 col-lg-5 d-block img px-0">
                                        <img class="w-100" src="styles/images/index/news-1.jpg" alt="胡連精密">
                                    </span>
                                    <span class="col-12 col-lg-7 d-block pl-0 pl-lg-4 pr-0 pr-lg-3 pr-xl-0 pt-3 pt-lg-0 pb-3 pb-md-0">
                                        <span class="d-block font-20 font-weight-bold lh14 mb-2 pb-1">產品顏色標準制定公告</span>
                                        <span class="text-646464 line3 mb-2 mb-md-3">為了提供顧客更優質的產品服務，在持續改善計畫中，當前致力於產品顏色的制定，此將依據...</span>
                                        <span class="d-block text-red font-weight-bold">2020-03-31</span>
                                    </span>
                                </a>
                            </div>
                            <div class="px-sm-3 px-lg-0">
                                <h3 class="hidden">歡迎參觀胡連2019年名古屋汽車技術週!</h3>
                                <a href="new" class="row text-hover-red mx-0 mx-xl-3">
                                    <span class="col-12 col-lg-5 d-block img px-0">
                                        <img class="w-100" src="styles/images/index/news-2.jpg" alt="胡連精密">
                                    </span>
                                    <span class="col-12 col-lg-7 d-block pl-0 pl-lg-4 pr-0 pr-lg-3 pr-xl-0 pt-3 pt-lg-0 pb-3 pb-md-0">
                                        <span class="d-block font-20 font-weight-bold lh14 mb-2 pb-1">歡迎參觀胡連2019年名古屋汽車技術週!</span>
                                        <span class="text-646464 line3 mb-2 mb-md-3">現場將展示汽機車連接器新品、電動車連接器、車用電子設備以及新開發應用領域的連接器產品</span>
                                        <span class="d-block text-red font-weight-bold">2019-08-12</span>
                                    </span>
                                </a>
                            </div>
                            <div class="px-sm-3 px-lg-0">
                                <h3 class="hidden">歡迎蒞臨胡連2019年印尼電動車，智慧車秀！</h3>
                                <a href="new" class="row text-hover-red mx-0 mx-xl-3">
                                    <span class="col-12 col-lg-5 d-block img px-0">
                                        <img class="w-100" src="styles/images/index/news-3.jpg" alt="胡連精密">
                                    </span>
                                    <span class="col-12 col-lg-7 d-block pl-0 pl-lg-4 pr-0 pr-lg-3 pr-xl-0 pt-3 pt-lg-0 pb-3 pb-md-0">
                                        <span class="d-block font-20 font-weight-bold lh14 mb-2 pb-1">歡迎蒞臨胡連2019年印尼電動車，智慧車秀！</span>
                                        <span class="text-646464 line3 mb-2 mb-md-3">現場將展出年度新品、保險絲盒、電動車連接器等產品，以及新應用類別新品。</span>
                                        <span class="d-block text-red font-weight-bold">2019-08-11</span>
                                    </span>
                                </a>
                            </div>
                            <div class="px-sm-3 px-lg-0">
                                <h3 class="hidden">產品顏色標準制定公告</h3>
                                <a href="new" class="row text-hover-red mx-0 mx-xl-3">
                                    <span class="col-12 col-lg-5 d-block img px-0">
                                        <img class="w-100" src="styles/images/index/news-1.jpg" alt="胡連精密">
                                    </span>
                                    <span class="col-12 col-lg-7 d-block pl-0 pl-lg-4 pr-0 pr-lg-3 pr-xl-0 pt-3 pt-lg-0 pb-3 pb-md-0">
                                        <span class="d-block font-20 font-weight-bold lh14 mb-2 pb-1">產品顏色標準制定公告</span>
                                        <span class="text-646464 line3 mb-2 mb-md-3">為了提供顧客更優質的產品服務，在持續改善計畫中，當前致力於產品顏色的制定，此將依據...</span>
                                        <span class="d-block text-red font-weight-bold">2020-03-31</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank index-car text-white position-relative background-cover pt-5" style="background-image:url(styles/images/index/car-bg.jpg)" data-aos="fade-up">
                <h2 class="hidden">汽車連接器&端子應用</h2>
                <div class="max1640 pt-sm-3 pt-lg-5 mt-lg-1">
                    <div class="max510 text-center text-lg-left position-relative z-1 mx-auto ml-lg-0">
                        <div data-aos="fade-up">
                            <p class="font-26 font-weight-bold opacity05 mb-0 mb-lg-3">APPLICATION FOR CONNECTOR & TERMINAL OF AUTOMOTIVE</p>
                        </div>
                        <p class="font-40 font-weight-bold" data-aos="fade-up">汽車連接器&端子應用</p>
                        <ul class="noneList row font-weight-bold mt-4 mt-sm-5 pb-5 mb-0 pl-0">
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    發動機線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    地板線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    車門線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    尾門線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    座椅線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    頂棚線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    動力線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    前保險桿線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    後保險桿線束
                                </a>
                            </li>

                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    倒車雷達線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-3 pb-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    儀表板線束
                                </a>
                            </li>
                            <li class="col-12 col-sm-6 mb-sm-3 pb-sm-1" data-aos="fade-up">
                                <a href="products-2" class="d-block rounded-25 opacity08 box-shadow-hover-style-1 px-4 py-2 mx-1">
                                    前艙線束
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <img class="car-back d-none d-lg-block position-absolute" style="mix-blend-mode: multiply;" src="styles/images/index/car-back.png" alt="胡連精密">
                <div class="car d-none d-lg-block position-absolute">
                    <img class="car-front" src="styles/images/index/car-front.png" alt="胡連精密">
                    <ul class="noneStyle">
                        <li class="position-absolute car-1">
                            <img src="styles/images/index/car-1.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-2">
                            <img src="styles/images/index/car-2.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-3">
                            <img src="styles/images/index/car-3.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-4">
                            <img src="styles/images/index/car-4.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-5">
                            <img src="styles/images/index/car-5.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-6">
                            <img src="styles/images/index/car-6.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-7">
                            <img src="styles/images/index/car-7.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-8">
                            <img src="styles/images/index/car-8.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-9">
                            <img src="styles/images/index/car-9.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-10">
                            <img src="styles/images/index/car-10.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-11">
                            <img src="styles/images/index/car-11.svg" alt="胡連精密">
                        </li>
                        <li class="position-absolute car-12">
                            <img src="styles/images/index/car-12.svg" alt="胡連精密">
                        </li>
                    </ul>

                </div>
            </div>
            <div class="index-applications text-center">
                <div class="slider arrows-style-1" data-aos="fade-up">
                    <div class="pb-4 pb-sm-5">
                        <div class="jqimgFill">
                            <img src="styles/images/index/applications-1.jpg" alt="胡連精密">
                        </div>
                        <p class="font-20 font-weight-bold pt-4 mt-2 mt-sm-3 pb-sm-2">機車產業應用</p>
                        <a href="#" class="d-table font-weight-bold border-red bg-hover-red text-red text-hover-white rounded-25 lh2 py-2 px-4 mx-auto mb-2">深入了解</a>
                    </div>
                    <div class="pb-4 pb-sm-5">
                        <div class="jqimgFill">
                            <img src="styles/images/index/applications-2.jpg" alt="胡連精密">
                        </div>
                        <p class="font-20 font-weight-bold pt-4 mt-2 mt-sm-3 pb-sm-2">新能源汽車產業應用</p>
                        <a href="#" class="d-table font-weight-bold border-red bg-hover-red text-red text-hover-white rounded-25 lh2 py-2 px-4 mx-auto mb-2">深入了解</a>
                    </div>
                    <div class="pb-4 pb-sm-5">
                        <div class="jqimgFill">
                            <img src="styles/images/index/applications-3.jpg" alt="胡連精密">
                        </div>
                        <p class="font-20 font-weight-bold pt-4 mt-2 mt-sm-3 pb-sm-2">新能源汽車產業應用</p>
                        <a href="#" class="d-table font-weight-bold border-red bg-hover-red text-red text-hover-white rounded-25 lh2 py-2 px-4 mx-auto mb-2">深入了解</a>
                    </div>
                    <div class="pb-4 pb-sm-5">
                        <div class="jqimgFill">
                            <img src="styles/images/index/applications-4.jpg" alt="胡連精密">
                        </div>
                        <p class="font-20 font-weight-bold pt-4 mt-2 mt-sm-3 pb-sm-2">壓著模具</p>
                        <a href="#" class="d-table font-weight-bold border-red bg-hover-red text-red text-hover-white rounded-25 lh2 py-2 px-4 mx-auto mb-2">深入了解</a>
                    </div>
                    <div class="pb-4 pb-sm-5">
                        <div class="jqimgFill">
                            <img src="styles/images/index/applications-1.jpg" alt="胡連精密">
                        </div>
                        <p class="font-20 font-weight-bold pt-4 mt-2 mt-sm-3 pb-sm-2">機車產業應用</p>
                        <a href="#" class="d-table font-weight-bold border-red bg-hover-red text-red text-hover-white rounded-25 lh2 py-2 px-4 mx-auto mb-2">深入了解</a>
                    </div>
                </div>
            </div>
        </main>
        <!-- main ======================================================================================= -->
        <!-- Modal video -->
        <div class="modal fade modal-style-1 blank" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered max830" role="document">
                <div class="modal-content p-3">
                    <div>
                        <button type="button" class="close d-table ml-auto mb-3" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="video-element">
                            <iframe id="video" class="border-0 w-100" src="https://www.youtube.com/embed/ykEbgOojWiU?loop=1&playlist=ykEbgOojWiU&enablejsapi=1" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </div>


    <?php include "footer-js.php"; ?>
    <script>
        var player;
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        function onYouTubeIframeAPIReady() {
            player = new YT.Player("video", {});
        }
    </script>
</body>

</html>