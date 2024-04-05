<?php

add_shortcode('shortcode_ty_gia_ngan_hang', 'create_shortcode_ty_gia_ngan_hang_hom_nay');
function create_shortcode_ty_gia_ngan_hang_hom_nay()
{

?>
    <style>
        .exchange-rate__table th {
            color: black;

        }

        .exchange-rate__table img {
            margin-left: 1em;
            width: 24px;
            height: 24px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
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
    </style>
    <table class="exchange-rate__table">
        <thead>
            <tr>
                <th>ngân hàng</th>
                <th>tên đầy đủ</th>
                <th>mã ngân hàng</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="board-price-name">
                    <a href="#">
                        <img src="https://webtygia.com/storage/images/9d72757312c6f93781294775fb36c1e3.png" alt="img ABBANK">
                        <span>ABBANK</span>
                    </a>
                </td>
                <td><span>Ngân hàng An Bình</span></td>
                <td><span>ABB</span></td>
            </tr>
            <tr>
                <td class="board-price-name">
                    <a href="#">
                        <img src="https://webtygia.com/storage/images/09196bb08a9fe4a585d78e2c467be934.png" alt="img ABBANK">
                        <span>ACB</span>
                    </a>
                </td>
                <td><span>Ngân hàng Á Châu</span></td>
                <td><span>ACB</span></td>
            </tr>
            <tr>
                <td class="board-price-name">
                    <a href="#">
                        <img src="https://webtygia.com/storage/images/09196bb08a9fe4a585d78e2c467be934.png" alt="img ABBANK">
                        <span>AGRIBANK</span>
                    </a>
                </td>
                <td><span>Ngân hàng Nông Nghiệp và Phát Triển Nông Thôn</span></td>
                <td><span>AGR</span></td>
            </tr>
            <tr>
                <td class="board-price-name">
                    <a href="#">
                        <img src="https://webtygia.com/storage/images/feba3fd4f6a9df6600a288cca8cbdd0f.png" alt="img ABBANK">
                        <span>BIDV</span>
                    </a>
                </td>
                <td><span>Ngân hàng Đầu tư và Phát Triển Việt Nam</span></td>
                <td><span>BIDV</span></td>
            </tr>
            <tr>
                <td class="board-price-name">
                    <a href="#">
                        <img src="https://webtygia.com/storage/images/4d11b6c3b74b7bda27bcd3a6446d5ea7.png" alt="img ABBANK">
                        <span>BVBANK</span>
                    </a>
                </td>
                <td><span>Ngân hàng Bảo Việt</span></td>
                <td><span>BVB</span></td>
            </tr>
            <tr>
                <td class="board-price-name">
                    <a href="#">
                        <img src="	https://webtygia.com/storage/images/6055d5012fd812bbf94f9956c34b3c7d.png" alt="img ABBANK">
                        <span>CBBank</span>
                    </a>
                </td>
                <td><span>Ngân hàng Xây Dựng</span></td>
                <td><span>CBBank</span></td>
            </tr>
        </tbody>
    </table>


<?php
}
