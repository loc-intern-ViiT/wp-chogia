<?php
add_shortcode('shortcode_lai_suat_vay_mua_xe', 'create_shortcode_lai_suat_vay_mua_xe');

function create_shortcode_lai_suat_vay_mua_xe(){
    $response = wp_remote_get('https://apichogia.viit.com.vn/api/json/lai-suat?slug=vay-mua-xe');
    if(!is_wp_error($response)){
        $body = wp_remote_retrieve_body($response);
        $interest_rate = json_decode($body,true);

        if(is_array($interest_rate) && isset($interest_rate['rates']) && is_array($interest_rate['rates']) ){
            if (!empty($interest_rate['rates'])) {
            ?>
            <style>
                .interest-rate__wrapper {
                    position: relative;
                    overflow: auto;
                }

                .interest-rate__table {
                    border-collapse: collapse;
                    width: 100%;
                    background-color: #fff;
                    border-color: #ececec;
                    border-spacing: 0;
                    margin-bottom: 1em;
                    width: 100%;
                }

                .interest-rate__table th {
                    border: 1px solid #dee2e6;
                    text-transform: none !important;
                    padding: 5px;
                }

                .interest-rate__table td {
                    border: 1px solid #dee2e6;
                    text-transform: none !important;
                }

                .image-16 {
                    width: 16px;
                    height: 16px;
                }
                .sticky-col{
                    position: sticky;
                    z-index: 1;
                    left: 0;
                }
            </style>
            <div class="interest-rate__wrapper">
                <table class="interest-rate__table">
                    <thead style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                        <tr>
                            <th rowspan="2" class="sticky-col"
                                style="padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);">Ngân hàng</th>
                            <th style="text-align: center; padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);"
                                colspan="11">Kỳ hạn</th>
                        </tr>
                        <tr>
                            <th>6 tháng</th>
                            <th>9 tháng</th>
                            <th>12 tháng</th>
                            <th>18 tháng</th>
                            <th>2 năm</th>
                            <th>3 năm</th>
                            <th>4 năm</th>
                            <th>5 năm</th>
                            <th>6 năm</th>
                            <th>7 năm</th>
                            <th>8 năm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($interest_rate['rates'] as $key => $value) :?>
                            <tr>
                            <td class="sticky-col"
                                style="display: flex; align-items: center; gap: 10px; padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);">
                                <img class="image-16"
                                    src="https://webtygia.com/storage/<?php echo isset($bank['image']) ? $bank['image'] : ''; ?>"><span><?php echo $key ?></span>
                            </td>
                            <?php $value_data = $value['6thang'];?>

                            <td><?php echo isset($value_data['loan_rate']) ? $value_data['loan_rate'] : '11'; ?></td>
                                
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                            <td>8.00</td>
                            <td>8.00</td>
                            <td>8.00</td>
                            <td>8.00</td>
                            <td>8.00</td>
                            <td>8.00</td>
                            <td>8.00</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>  
            <?php
            }
        }
        else{
            return "không phải là array or không có key trong dữ liệu";
        }
    }
    else{
        return "không lấy được dữ liệu từ api";
    }
}
