<?php
add_shortcode('shortcode_lai_suat_vay_tin_chap', 'create_shortcode_lai_suat_vay_tin_chap');

function create_shortcode_lai_suat_vay_tin_chap(){
    $response = wp_remote_get('https://apichogia.viit.com.vn/api/json/lai-suat?slug=vay-tin-chap');
    if(!is_wp_error($response)){
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body,true);

        if($data && isset($data['success']) && $data['success'] && isset($data['rates'])){

            $rates = $data['rates'];
            $time_savings = $data['time_savings'];
            if (!empty($rates) && is_array($rates)) {
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
                    text-transform: none !important;
                    align-items: center;
                    padding: 5px;
                }

                .interest-rate__table td {
                    text-transform: none !important;
                }

                .image-16 {
                    width: 16px;
                    height: 16px;
                }
                .interest-rate__table .sticky-col{
                    max-width: 200px !important;
                    
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
                            <?php foreach($time_savings as $term) : ?>
                                <th class="text-center bg-f1"><?php echo isset($term['name']) ? $term['name'] : ''; ?></th>
                            <?php endforeach ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rates as $bank => $value) :?>
                            <tr>
                            <td class="sticky-col"
                                style="display: flex; align-items: center; gap: 10px; padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);">
                                <img class="image-16"
                                    src="https://webtygia.com/storage/<?php 
                                    foreach( $value as $bank_term) : 
                                        echo $bank_term[0]['bank']['image'];
                                        break;
                                    endforeach;
                                    ?>"><span><?php echo $bank ?></span>
                            </td>
                            <?php foreach ($time_savings as $term) {
                                    ?>
                                    <td>
                                        <?php
                                        $rate = isset($value[$term['value']][0]['loan_rate']) ? $value[$term['value']][0]['loan_rate'] : '--';
                                        echo ($rate !== '--' ? number_format($rate, 2) . '' : $rate);
                                        ?>
                                    </td>
                                <?php
                                } 
                            ?>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>  
            <?php
            }
            else{
                return "không phải là array or không có key trong dữ liệu 111";
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
