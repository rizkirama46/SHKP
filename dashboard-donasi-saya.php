<?php include '_partials/head.php'; ?>

    <style>
        .judul{
            font-size: 13px;
            font-weight: bold;
        }

        .tanggal{
            font-size: 12px;
        }

        .status{
            color: salmon;
        }

        .container-load{
            position: relative;
            left: 50%;
            transform: translate(-50%,-50%);
            }
            .dot-container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 120px;
            }
            .dot{
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #3ff9dc;
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
                        <div class="dashboard-content container-fluid">
                            <h2 class="text-capitalize block-quarter">Donasi Saya</h2>
                            <div class="dashboard-item-container d-sm-block d-none">
                                
                            <table id="example" class="table table--zebra  table-bordered" style="width:100%;"></table>
                                    <thead>
                                        <tr>
                                            <th>Tanggal Donasi</th>
                                            <th>Judul Program</th>
                                            <th>Nominal</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </main>
        </div>

        <!-- tampilan mobile -->

        <div class="container-fluid d-sm-none">
            <div id="load_data" class="pb-3"></div>

            <center>
                <div class="container-load mt-2" id="load_data_message">
                    <div class="dot-container">
                        <div class="dot dot-1"></div>
                        <div class="dot dot-2"></div>
                        <div class="dot dot-3"></div>
                    </div>
                </div>
            </center> 
        </div>

        <!-- Akhir Tampilan mobile -->

        <div class="sticky-footer-container-item">
            <?php include '_partials/footer.php'; ?>
        </div>
    </div>

<?php include '_partials/scripts.php'; ?>
<?php include 'dev/scripts.php'; ?>

<script>

$(document).ready(function() {
    
$('#load_data_message').hide();
  var limit = 5;
  var start = 0;
  var action = 'inactive';
  function load_users_data(limit, start)
  {
    $.ajax({
      url:"config/config.php",
      method:"POST",
      data:{limit:limit, start:start},
      cache: false,
      success: function(data)
      {
        $('#load_data').append(data);
        if(data == '')
        {
          $('#load_data_message').hide();
          action = 'active';
        }
        else
        {
          $('#load_data_message').show();
          action = 'inactive';
        }
      }
    });
  }

  if( action == 'inactive' )
  {
    action = 'active';
    load_users_data(limit, start);
  }

  $(window).scroll(function() {
    if( $(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive' )
    {
      action = 'active';
      start = start + limit;
      setTimeout(function() {
        load_users_data(limit, start);
      }, 2000);
    }
  });

});

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
