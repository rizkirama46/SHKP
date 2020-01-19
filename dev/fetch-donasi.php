<?php 
require '../vendor/autoload.php';

use GuzzleHttp\Client;

if(isset($_POST["page"]))
{
    $client = new Client();
    $res = $client->request('POST','https://devel.sharinghappiness.org/api/v1/user/login', [    
        'json' => [
            'email' => "ilmankori@gmail.com",   
            'password' => "abghi12?"
        ],    
    ]);

    $resp = json_decode($res->getBody()->getContents(),true);


    $page = $_POST["page"];
    $token = $resp['result']['token'];
    $url = 'https://devel.sharinghappiness.org/api/v1/user/program-transaction?token_email=ilmankori@gmail.com&token='.$token.'&page='.$page;
    $client = new Client();
    $response = $client->request('get',$url);

    $result = json_decode($response->getBody()->getContents(),true);
        if($result['result']==null) {
            //hendle warning
        }     
        else{
            foreach($result['result'] as $data) : ?>
                <div class="card mb-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-bold">
                                <?= $data['program']['title']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-muted">
                                <?= date("d-m-Y",strtotime($data['transaction_date'])); ?>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 text-orange">
                                <?= $data['status']; ?>
                            </div>
                            <div class="col-6 text-right">
                                Rp. <?= $data['amount']; ?>
                            </div>
                        </div>
                    </div>
                </div>
    <?php   endforeach;
        }
}
?>