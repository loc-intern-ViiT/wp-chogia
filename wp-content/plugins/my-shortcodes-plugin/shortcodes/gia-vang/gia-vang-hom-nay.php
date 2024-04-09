<?php
add_shortcode('shortcode_gia_vang_Doji_hom_nay', 'create_shortcode_gia_vang_Doji_hom_nay');
function create_shortcode_gia_vang_Doji_hom_nay(){
    $response = wp_remote_get('https://apichogia.viit.com.vn/api/json/gia-vang?slug=vang-doji');
    if(!is_wp_error($response)){
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body,true);
        if(is_array($data) && isset($data['shows']) && is_array($data['shows'])){
            $shows = $data['shows'];

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
            
        }

        .board-price table .ngoai-te {
            display: flex;
            align-items: center;
            padding-left: 20px;
        }

        .board-price table tr {
            text-align: center;
            color: black;
        }
        tr:nth-child(even) {
            background-color: #F1F1F1;
        }
        .board-price table th {
            text-align: center;
        }

        .board-price table tr td {
            padding: 5px;
            height: 80px;
            border: 1px solid #F1F1F1;
            text-align: center;
        }
    </style>
<div class="board-price light">
        <div>
            <h3 class="widget-price-title">Giá vàng Doji</h3>
        </div>
        <div class="flex-end-center flex-wrap mb-10">
            <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
        </div>
        <table class="interest-rate__table">
            <thead>
                <tr>
                    <th>ĐỊA PHƯƠNG</th>
                    <th>LOẠI</th>
                    <th>MUA VÀO</th>
                    <th>BÁN RA</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $rowspan = 1;
                $count_row_span = 0;
                $value_brand_name ="";
                foreach($shows as $key => $value ) :
                    
                    ?>
                    <tr>
                        <td class="ngoai-te board-price-name rowspan=<?php echo $rowspan?>">
                            <span>
                                <?php 
                                    
                                    if($value_brand_name == $value['brand']['name']){
                                        $rowspan++;
                                    }else{
                                        echo $value['brand']['name'];
                                        $value_brand_name = $value['brand']['name'];
                                        $rowspan = 1;
                                    }
                                ?>
                            </span>
                        </td>
                        
                        <td class="board-price-v1"><span><?php echo $value['type']['name']?></span></td>
                        <td class="board-price-v1">
                            <span><?php echo $value['buy']?></span>
                            <div class="flex-end-center flex-wrap mb-10">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 32 32" width="12" height="12"><path fill="#5DC560" fill-rule="evenodd" d="M31.947 16c0 8.794-7.1 16-16 16C7.152 32 .053 24.793.053 16c0-8.795 7.1-16 15.894-16 8.795 0 16 7.205 16 16z" clip-rule="evenodd" class="color5dc560 svgShape"/><path fill="#FFFFFF" d="M16.755 6.755 16 6l-.755.566-4.528 4.528 1.51 1.51 2.64-2.642V26h2.076V9.962l2.83 2.642 1.51-1.321z" class="colorfff svgShape"/></svg>
                                1,000,000
                            </div>
                        </td>
                        <td class="board-price-v2">
                            <span><?php echo $value['sell']?></span>
                            <div class="">
                                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 32 32" width="12" height="12"><path fill="#FFDF00" fill-rule="evenodd" d="M32 16.053c0 8.795-7.205 15.894-16 15.894s-16-7.1-16-15.894c0-8.9 7.205-16 16-16s16 7.205 16 16z" clip-rule="evenodd" class="colorf37a5d svgShape"/><path fill="#FFFFFF" d="m26 16.012-3.969-3.651-.476-.635-.635.635-3.651 3.81 1.27 1.27 2.222-2.54c.159.952.159 1.905 0 2.699-.952 3.651-4.604 5.715-8.096 4.762-3.652-.952-5.715-4.604-4.763-8.096.953-3.652 4.604-5.557 8.097-4.763l.476-1.587c-2.223-.635-4.445-.16-6.35.952-1.905 1.111-3.334 2.699-3.81 5.08-1.27 4.445 1.428 9.05 5.873 10.16 4.446 1.112 9.05-1.428 10.16-5.873.318-.953.318-2.064.16-3.017l2.38 2.064L26 16.012z" class="colorfff svgShape"/></svg>
                                0
                            </div>
                        </td>
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