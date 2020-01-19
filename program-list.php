<?php include '_partials/head.php'; ?>
<style>
.test{
    font-size: 14px;
    font-weight: bold;
}
</style>

    <div class="sticky-footer-container">
        <div class="sticky-footer-container-item">
            <?php include '_partials/header.php'; ?>
        </div>
        <div id="filter-mobile" class="filter-mobile">
            
            <div class="col-sm-12 title-filter">
                <span class="">Filter Program<span id="closeFilter" class="fa fa-close pull-right"></span></span>
            </div>
            <form action="" class="form-filter-mobile">
                <div class="col-sm-12 --block mt-2 mb-3 pb-3 pr-2 pl-2">
                    <label for="" class="mb-3">Kategori</label>
                    <select name="" id="" class="select2-js" style="width: 100%;">
                        <option value="">Kemanusiaan</option>
                        <option value="">Sosial</option>
                    </select>
                </div>
                <div class="col-sm-12 --block mb-3 pb-3 pr-2 pl-2">
                    <label for="">Wilayah</label>
                    <select name="" id="" class="select2-js" style="width: 100%;">
                        <option value="">Bekasi</option>
                        <option value="">Kabupate Bandung Raya Jawa Barat</option>
                    </select>
                </div>
                <div class="col-sm-12 --block mb-4 pb-3 pr-2 pl-2">
                    <label for="">Urutkan</label>
                    <select name="" id="" class="select2-js" style="width: 100%;">
                        <option value="">Waktu</option>
                        <option value="">Target</option>
                    </select>
                </div>
                <div class="inline-buttons col-sm-3 pb-3 pr-2 pl-2">
                    <a href="" class="btn btn--grey-transparent one-third" style="">Clear Filter</a>
                    <a href="" class="btn btn--primary one-third" style="">Terapkan Filter</a>
                </div>
            </form>
        </div>

        <div class="btn-form-filter">
            <a href="#" id="btn-form-filter" class="btn btn--highBlue btn--block stickyBtn-filter">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink" height="12px" version="1.1" viewBox="0 0 18 12" width="18px"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g fill="#FFFFFF" id="Core" transform="translate(-465.000000, -216.000000)"><g id="filter" transform="translate(465.000000, 216.000000)"><path d="M7,12 L11,12 L11,10 L7,10 L7,12 L7,12 Z M0,0 L0,2 L18,2 L18,0 L0,0 L0,0 Z M3,7 L15,7 L15,5 L3,5 L3,7 L3,7 Z" id="Shape"/></g></g></g></svg>
            </a>
        </div>

        <div class="sticky-footer-container-item --pushed" id="getHigh">
            <main class="site-main program-list-controller" ng-controller="programlistController">
                <section class="home-section home-section--white home-section--no-icon home-section--sticky-filter">
                    <div class="container">
                        
                        <div class="pb-5 container filter-program">
                            <div class="row mr-1">
                                <div class="col-md-4 form-filter-item">
                                    <label for="">Kategori</label>
                                    <select name="" id="" class="select2-js" style="width: 200px;">
                                        <option value="">Kemanusiaan</option>
                                        <option value="">Sosial</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-filter-item">
                                    <label for="">Wilayah</label>
                                    <select name="" id="" class="select2-js" style="width: 200px;">
                                        <option value="">Bekasi</option>
                                        <option value="">Kabupate Bandung Raya Jawa Barat</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-filter-item">
                                    <label for="">Tipe</label>
                                    <select name="" id="" class="select2-js" style="width: 200px;">
                                        <option value="">Organisasi</option>
                                        <option value="">Personal</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <p class="mt-3">Ditemukan <span class="text-bold" ng-bind="(data.total)+' Program'"></span></p>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card" style="width: 18rem;">
                                            <img src="https://bimasislam.kemenag.go.id/uploads/post/f39ae9ff3a81f499230c4126e01f421b-masjid-raya-dan-masjid-agung-apa-bedanya.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h4 class="card-title">Bangun Masjid di Gaza - Palestina</h4>
                                                <p class="card-text">@username</p>
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="test">Sisa Waktu</div>
                                                        <div class="test">30 Hari</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="test text-right">Terkumpul</div>
                                                        <div class="test text-right">Rp. 65.728.109</div>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-primary mt-2">Lihat Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card" style="width: 18rem;">
                                            <img src="https://bimasislam.kemenag.go.id/uploads/post/f39ae9ff3a81f499230c4126e01f421b-masjid-raya-dan-masjid-agung-apa-bedanya.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h4 class="card-title">Bangun Masjid di Gaza - Palestina</h4>
                                                <p class="card-text">@username</p>
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="test">Sisa Waktu</div>
                                                        <div class="test">30 Hari</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="test text-right">Terkumpul</div>
                                                        <div class="test text-right">Rp. 65.728.109</div>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-primary mt-2">Lihat Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card" style="width: 18rem;">
                                            <img src="https://bimasislam.kemenag.go.id/uploads/post/f39ae9ff3a81f499230c4126e01f421b-masjid-raya-dan-masjid-agung-apa-bedanya.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h4 class="card-title">Bangun Masjid di Gaza - Palestina</h4>
                                                <p class="card-text">@username</p>
                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="test">Sisa Waktu</div>
                                                        <div class="test">30 Hari</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="test text-right">Terkumpul</div>
                                                        <div class="test text-right">Rp. 65.728.109</div>
                                                    </div>
                                                </div>                                             
                                                <a href="#" class="btn btn-primary mt-2">Lihat Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                </section>
            </main>
        </div>
        <div class="sticky-footer-container-item">
            <?php include '_partials/myfooter.php'; ?>
        </div>
    </div>

<?php include '_partials/scripts.php'; ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script> -->
<script src=""></script>
<script>
if("undefined"==typeof jQuery)throw new Error("$.lazyLoad requires jQuery");!function(a){"use strict";var b=function(a,b){return a||b},c=function(a,b,c,d){c||(c=""),d||(d="log"),b.debug&&console[d](c,a)},d=function(b,c){return a('<img src="'+b+'" class="'+c+'">').trigger("load",function(){console.log("loaded")})};a.fn.lazyLoad=function(e){e||(e={});var f={attribute:b(e.attribute,"data-src"),doneClass:b(e.doneClass,"lazy-success"),timeout:b(e.timeout,0),debug:b(e.debug,!1)};c("You're running $.lazyLoad in debug mode, this is not recommended for production",e,"","info"),c(f,e,"[LazyLoad Options]");var g=a(this).attr(f.attribute),h=d(g,f.doneClass),i=a(this).parent();h.one("load",function(){c(h,e,"[Image loaded]"),i.css("position","relative"),i.append(h)})}}(jQuery);
</script>
<script>
    $(document).ready(function(){
    // lazyLoad(0,window.innerHeight, 1);
    // https://www.jqueryscript.net/blog/Best-Lazy-Loading-jQuery-Plugins.html
    $('.js-lazy-load').lazyLoad();

    $('.select2-js-filter').select2();

    function test() {
        console.log("test")
    }

    

});
</script>