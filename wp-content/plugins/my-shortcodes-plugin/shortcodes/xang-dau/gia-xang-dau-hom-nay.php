<?php

add_shortcode('shortcode_gia_xang_dau_hom_nay', 'create_shortcode_gia_xang_dau_hom_nay');
function  create_shortcode_gia_xang_dau_hom_nay()
{
    $response = wp_remote_get('https://apichogia.viit.com.vn/api/json/xang-dau');
    if(!is_wp_error($response)){
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body,true);
        if(is_array($data) && isset($data['oil_todays']) && is_array($data['oil_todays'])){
            $oil_todays = $data['oil_todays'];
        
?>
    <style>
        .board-price-domestic {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        .board-price-domestic p {
            font-size: 14px;
            text-align: right;
            color: black;
        }
        th{
            color: black;
        }

        td,
        th {
            border: 1px solid #dddddd;
            padding: 8px;
        }

       .board-price-name{
        text-align: left;
        padding-left: 10px;
       }
       .board-price-v1, .board-price-v2{
        text-align: right;
        padding-right: 10px;
       }

        .board-price-domestic img {
            width: 24px;
            height: 24px;
            margin: 0 10px;
        }

        .board-price-domestic a {
            color: #2D95E4;
        }
    </style>
    <div class="board-price-domestic light">
        
        <div class="flex-end-center flex-wrap mb-10">
            <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
        </div>
        <table class="interest-rate__table">
                    <thead>
                        <tr>
                            <th class="pl-5px">Sản phẩm</th>
                            <th>Vùng 1</th>
                            <th>Vừng 2</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($oil_todays as $value) :?>
                    <tr>
                        <td class="ngoai-te board-price-name">
                            <span><?php echo $value['oil']['code']?></span>
                        </td>
                        <td class="board-price-v1"><span>24.620</span></td>
                        <td class="board-price-v2"><span>25.000</span></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
    </div>
<?php
        }else{
            return "không phải là array or không có key trong dữ liệu";
        }
    }else{
        return "không lấy được dữ liệu từ api";
    }
}

add_shortcode('shortcode_xang_dau_hom_nay_home', 'create_shortcode_xang_dau_hom_nay_home');
function create_shortcode_xang_dau_hom_nay_home()
{
    $response = wp_remote_get('https://apichogia.viit.com.vn/api/json/xang-dau');
    if(!is_wp_error($response)){
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body,true);
        if(is_array($data) && isset($data['oil_todays']) && is_array($data['oil_todays'])){
            $oil_todays = $data['oil_todays'];

?>

    <div class="board-price-domestic light">
        <div>
            <h3 class="widget-price-title">Giá xăng dầu hôm nay</h3>
        </div>
        <div class="flex-end-center flex-wrap mb-10">
            <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Vùng 1</th>
                    <th>Vùng 2</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; foreach($oil_todays as $value ) : $count++;?>
                    <tr>
                        <td class="ngoai-te board-price-name">
                            <span><?php echo $value['oil']['code']?></span>
                        </td>
                        <td class="board-price-v1"><span>24.620</span></td>
                        <td class="board-price-v2"><span>25.000</span></td>
                    </tr>
                    <?php if($count== 6){ break;} endforeach;?>
            </tbody>
        </table>
    </div>

<?php
        }else{
            return "không phải là array or không có key trong dữ liệu";
        }
    }else{
        return "không lấy được dữ liệu từ api";
    }
}

add_shortcode('shortcode_xang_dau_the_gioi_hom_nay', 'create_shortcode_xang_dau_the_gioi_hom_nay');
function create_shortcode_xang_dau_the_gioi_hom_nay(){
    $response = wp_remote_get('https://apichogia.viit.com.vn/api/json/xang-dau');
    if(!is_wp_error($response)){
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body,true);
        if(is_array($data) && isset($data['oil_todays']) && is_array($data['oil_todays'])){
            $oil_todays = $data['oil_todays'];

?>
    <style>
        .board-price h3 {
            font-size: 27.5px;
            color: black;
        }

        .board-price p {
            font-size: 14px;
            text-align: right;
            color: black;
        }

        .board-price table {
            font-size: 17px;
            background-color: #061890;
        }

        .board-price table .ngoai-te {
            display: flex;
            align-items: center;
        }

        .board-price table tr {
            text-align: center;
            color: white;
        }

        .board-price table th {
            text-align: center;
        }

        .board-price table tr td {
            padding: 5px;
            color: white;
            text-align: center;
        }
    </style>
<div class="board-price light">
        <div>
            <h3 class="widget-price-title">Giá xăng dầu thế giới</h3>
        </div>
        <div class="flex-end-center flex-wrap mb-10">
            <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Vùng 1</th>
                    <th>Vùng 2</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; foreach($oil_todays as $value ) : $count++;?>
                    <tr>
                        <td class="ngoai-te board-price-name">
                            <span><?php echo $value['oil']['code']?></span>
                        </td>
                        <td class="board-price-v1"><span>24.620</span></td>
                        <td class="board-price-v2"><span>25.000</span></td>
                    </tr>
                    <?php if($count== 8){ break;} endforeach;?>
            </tbody>
        </table>
    </div>

<?php
        }else{
            return "không phải là array or không có key trong dữ liệu";
        }
    }else{
        return "không lấy được dữ liệu từ api";
    }
}