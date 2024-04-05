<?php

add_shortcode('shortcode_ty_gia_ngan_hang', 'create_shortcode_ty_gia_ngan_hang_hom_nay');

function create_shortcode_ty_gia_ngan_hang_hom_nay()
{
    // Lấy dữ liệu từ API
    $response = wp_remote_get('https://apichogia.viit.com.vn/api/json/only_bank');
    // Kiểm tra nếu có dữ liệu từ API
    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response);
        $banks = json_decode($body, true);
        // Kiểm tra xem $banks có phải là một mảng không trước khi truy cập vào thuộc tính 'bank'
        if (is_array($banks) && isset($banks['bank']) && is_array($banks['bank'])) {
            $bank_data = $banks['bank']; // Lấy dữ liệu từ thuộc tính 'bank'
            // Kiểm tra nếu dữ liệu về ngân hàng không rỗng
            if (!empty($bank_data)) {
?>
                <style>
                    .exchange-rate__table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                        box-shadow: 0px 0px 4px 4px rgba(0, 0, 0, 0.2);
                    }

                    td,
                    th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                    }

                    .exchange-rate__table img {
                        width: 24px;
                        height: 24px;
                        margin: 0 10px;
                    }

                    .exchange-rate__table a {
                        color: #2D95E4;
                    }
                </style>
                <table class="exchange-rate__table" style="border: 1px solid #2D95E4">
                    <thead>
                        <tr style="color: black;">
                            <th class="txt_bank">Ngân hàng</th>
                            <th>Tên đầy đủ</th>
                            <th>Mã ngân hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bank_data as $bank) : ?>
                            <tr>
                                <td class="ps-3">
                                    <a href="#">
                                        <div class="bank_name">
                                            <img decoding="async" class="image-16" src="https://webtygia.com/storage/<?php echo isset($bank['image']) ? $bank['image'] : ''; ?>">
                                            <span><?php echo isset($bank['short_name']) ? $bank['short_name'] : ''; ?></span>
                                        </div>
                                    </a>
                                </td>
                                <td><?php echo isset($bank['name']) ? $bank['name'] : ''; ?></td>
                                <td><?php echo isset($bank['code']) ? $bank['code'] : ''; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
<?php
            } else {
                echo "Không có dữ liệu về ngân hàng.";
            }
        } else {
            echo "Dữ liệu từ API không hợp lệ hoặc không có dữ liệu về ngân hàng.";
        }
    } else {
        echo "Không thể lấy dữ liệu từ API.";
    }
}
