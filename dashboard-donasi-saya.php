<?php include '_partials/head.php'; ?>

<style>
    .dots{
    position: relative;
    left: 50%;
    transform: translate(-50%,-50%);
    }
    .dot-container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 60px;
    }
    .dot{
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: orange;
    }
    .dot-1{
    animation-name: flow;
    animation-duration: .4s;
    animation-timing-function: ease;
    animation-delay: 0s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    }
    .dot-2{
    animation: flow .4s ease .2s infinite alternate;
    }
    .dot-3{
    animation: flow .4s ease .4s infinite alternate;
    }
    @keyframes flow {
    from{
        opacity:1;
        transform: scale(1.2);
    }
    to{
        opacity: .20;
        transform: scale(.75);
    }
    }
    .card-table {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container-table {
        font-size: 0.8em;
    }

    .icon-size {
        font-size: 3.7em;
    }

    .text-username {
        font-weight: bold;
        font-size:1em;
    }

    .crop-text-2 {
        -webkit-line-clamp: 2;
        overflow : hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }
    thead{
        background-color : #ff7f50 !important;
        color: white;
    }
</style>

    <div class="sticky-footer-container">
        <div class="sticky-footer-container-item">
            <?php include '_partials/header.php'; ?>
        </div>
        <div class="sticky-footer-container-item --pushed">
            <main class="site-main site-main--pushed home-section--white-darken">
                <div class="container content-push">
                    <div class="dashboard-container">
                        <div class="dashboard-nav">
                            <div class="dashboard-nav-header text-center">
                                <div class="dashboard-nav-img">
                                    <a href="#">
                                        <img src="http://placehold.it/300x300" alt="">
                                    </a>
                                </div>
                                <div class="media-content block-half">
                                    <center>Ilman Manarul Qori</center>
                                    <div>
                                        <span class="fa fa-star text-warning"></span>
                                        <span>4.57</span>
                                    </div>
                                </div>
                                
                            </div>
                            <ul class="list-nostyle dashboard-main-nav">
                                <li class="dashboard-main-nav-item">
                                    <a href="dashboard.php" class="dashboard-main-nav-anchor">
                                        <span class="fa fa-fw fa-dashboard mr-2"></span>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="dashboard-main-nav-item">
                                    <a href="notification.php" class="dashboard-main-nav-anchor">
                                        <span class="fa fa-fw fa-bell mr-2"></span>
                                        Notifikasi
                                    </a>
                                </li>
                                <li class="dashboard-main-nav-item">
                                    <a href="dashboard-program-saya-overview.php" class="dashboard-main-nav-anchor">
                                        <span class="fa fa-fw fa-flag mr-2"></span>
                                        Program Saya
                                    </a>
                                </li>
                                <li class="dashboard-main-nav-item">
                                    <a href="dashboard-program-favorit.php" class="dashboard-main-nav-anchor">
                                        <span class="fa fa-fw fa-heart mr-2"></span>
                                        Wish List
                                    </a>
                                </li>
                                <li class="dashboard-main-nav-item">
                                    <a href="dashboard-donasi-saya.php" class="dashboard-main-nav-anchor is-active">
                                        <span class="fa fa-fw fa-gift mr-2"></span>
                                        Donasi Saya
                                    </a>
                                </li>
                                <li class="dashboard-main-nav-item">
                                    <a href="dashboard-pesan-masuk.php" class="dashboard-main-nav-anchor">
                                        <span class="fa fa-fw fa-inbox mr-2"></span>
                                        Pesan Masuk
                                    </a>
                                </li>
                                <li class="dashboard-main-nav-item">
                                    <a href="dashboard-happiness-story.php" class="dashboard-main-nav-anchor">
                                        <span class="fa fa-fw fa-smile-o mr-2"></span>
                                        Happiness Story
                                    </a>
                                </li>
                                <li class="dashboard-main-nav-item">
                                    <a href="dashboard-pengaturan-profile.php" class="dashboard-main-nav-anchor">
                                        <span class="fa fa-fw fa-gear mr-2"></span>
                                        Pengaturan
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dashboard-content d-none d-sm-block">
                            <h2 class="text-capitalize block-quarter">Donasi Saya</h2>
                            <div class="dashboard-item-container">
                                <!-- <div class="dashboard-item-container dashboard-item-container--grey block">
                                    <div class="">
                                        <form action="" class="flexbox-center-spread ng-pristine ng-valid">
                                            <div class="form-input--inline">
                                                <label for="" class="">Status :</label>
                                                <div class="option-box d-iblock">
                                                    <select name="" id="status" class="">
                                                        <option value="all" selected="">Semua</option> 
                                                        <option value="created">Created</option>                                
                                                        <option value="checkout">Checkout</option>                                
                                                        <option value="paid">Paid</option>                                
                                                        <option value="unpaid">Unpaid</option>                                
                                                        <option value="cancel">Cancel</option>                                
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-input--inline">
                                                <label for="" class="">Urutkan :</label>
                                                <div class="option-box d-iblock">
                                                    <select name="" id="order" class="">
                                                        <option value="newest" selected="">Terbaru</option>
                                                        <option value="oldest">Terlama</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
                                <table id="example" class="table table--zebra  table-bordered" style="width:100%;"></table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </main>
        </div>

        <div class="container-fluid d-sm-none">
            <h2 class="text-capitalize block-quarter text-center">Donasi Saya</h2>
            <div id="load-data" class="pb-1"></div>
            <center>
            <div id="loader" class="dots my-3">
                <div class="dot-container">
                    <div class="dot dot-1"></div>
                    <div class="dot dot-2"></div>
                    <div class="dot dot-3"></div>
                </div>
            </div>
            </center>
        </div>

        <div class="sticky-footer-container-item">
            <?php include '_partials/footer.php'; ?>
        </div>
    </div>

<?php include '_partials/scripts.php'; ?>
<?php include 'dev/scripts.php'; ?>

<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'lft<"bottom pt-2"p>',
            data: [<?php include 'dev/datadonasi.php'?>],
            columns: [
                { title: "Tanggal Donasi" },
                { title: "Judul Program" },
                { title: "Nominal" },
                { title: "Status" },
                { title: "Aksi" }
            ],
            lengthMenu: [[5,10,25,50,-1],[5,10,20,50,"All"]],
            scrollCollapse: true,
            pagingType: "simple_numbers",
            fixedColumns: true
        } );
    } );
</script>
