<?php
add_shortcode('shortcode_tong_hop_ngoai_te', 'create_shortcode_tong_hop_ngoai_te');


function create_shortcode_tong_hop_ngoai_te()
{

    // Lấy dữ liệu từ API
    $response = wp_remote_get('https://apichogia.viit.com.vn/api/json/only_currency');

    if(!is_wp_error($response)){
        $body = wp_remote_retrieve_body($response);
        $currency = json_decode($body, true);

        if(is_array($currency) && isset($currency['currency']) && is_array($currency['currency'])){
            $data_currency = $currency['currency'];
            if(!empty($data_currency)){
                ?>
                <style>
                    .exchange-rate__table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        box-shadow: 0px 0px 4px 4px rgba(0, 0, 0, 0.2);
                        font-size: 16px;
                        color: black;
                    }

                    .exchange-rate__table title{
                        font-weight: 600;
                    }
                    td,
                    th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #F1F1F1;
                    }

                    .exchange-rate__table img {
                        width: 24px;
                        height: 24px;
                        margin: 0 10px;
                    }

                    .exchange-rate__table a {
                        color: #2D95E4;
                    }

                    .currency_name{
                        text-transform: uppercase;
                    }
                </style>
                <table class="exchange-rate__table">
                    <thead>
                        <tr class="title">
                            <th class="txt_currency">NGOẠI TỆ</th>
                            <th>Tên đầy đủ</th>
                            <th>GIÁ MUA</th>
                            <th>GIÁ BÁN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data_currency as $item ) :?>
                        <tr>
                            <td class="ps-3">
                                <a href="#">
                                    <div class="currency_name">
                                        <img decoding="async" class="image-16" src="https://webtygia.com/storage/<?php echo isset($item['image']) ? $item['image'] : ''; 
                                                                                                                    ?>">
                                        <span><?php echo isset($item['name']) ? $item['name'] : ''; 
                                                ?></span>
                                    </div>
                                </a>
                            </td>
                            <td><?php echo isset($item['title']) ? $item['title'] : ''; ?></td>
                            <td><?php echo isset($item['rate_first']['buy']) ? $item['rate_first']['buy'] : ''; ?></td>
                            <td><?php echo isset($item['rate_first']['sell']) ? $item['rate_first']['sell'] : ''; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php
            }else{
                return "Data rỗng";
            }
        }else{
            return "Data không phải array or không có data";
        }
    }else {
        echo "Không thể lấy dữ liệu từ API.";
    }


}
