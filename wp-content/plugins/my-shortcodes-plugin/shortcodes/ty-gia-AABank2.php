<?php

add_shortcode('shortcode_ty_gia_AABank2', 'create_shortcode_ty_gia_AABank2');
function  create_shortcode_ty_gia_AABank2()
{
?>
    <style>
        .board-price-domestic {
            border: 1px solid #EEEEEE;
            margin: 5px;
            padding: 10px;
            padding-bottom: 0px;
        }

        .board-price-domestic h3 {
            font-size: 27.5px;
            color: black;
        }

        .board-price-domestic p {
            font-size: 14px;
            text-align: right;
            color: black;
        }

        .board-price-domestic table {
            font-size: 17px;
        }

        .board-price-domestic table tr {
            height: 50px;
            border-bottom: 1px solid #EEEEEE;
        }

        .board-price-domestic table tr th {
            color: black;
        }

        .board-price-domestic table tr td {
            height: 100%;
        }

        .board-price-domestic table .ngoai-te {
            color: #1091FF;
            display: flex;
            align-items: center;
            height: 50px;
        }

        .board-price-domestic table .board-price-name {
            color: #1091FF;
            font-weight: 750;
        }

        .cur-icon {
            width: 28px;
            height: 28px;
            margin-right: 6px;
            background: url(http://chogia.viit.com.vn/wp-content/uploads/2024/03/currencies.png);
        }
    </style>
    <div class="board-price-domestic light">
        <div>
            <h3 class="widget-price-title">Tỷ giá AABank</h3>
        </div>
        <div class="flex-end-center flex-wrap mb-10">
            <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
        </div>
        <table class="bg-light">
            <thead>
                <tr>
                    <th class="pl-5px">Ngoại tệ</th>
                    <th>Mua</th>
                    <th>Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ngoai-te board-price-name">
                        <div class="cur-icon ci-usd"></div>
                        <span>USD</span>
                    </td>
                    <td><span>24.620</span></td>
                    <td><span>25.000</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te board-price-name">
                        <div class="cur-icon ci-jpy"></div>
                        <span>JPY</span>
                    </td>
                    <td><span>159</span></td>
                    <td><span>168</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te board-price-name">
                        <div class="cur-icon ci-eur"></div>
                        <span>EUR</span>
                    </td>
                    <td><span>26.126</span></td>
                    <td><span>27.442</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te board-price-name">
                        <div class="cur-icon ci-chf"></div>
                        <span>CHF</span>
                    </td>
                    <td><span>0</span></td>
                    <td><span>28.945</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te board-price-name">
                        <div class="cur-icon ci-gbp"></div>
                        <span>GPB</span>
                    </td>
                    <td><span>30.592</span></td>
                    <td><span>32.002</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te board-price-name">
                        <div class="cur-icon ci-aud"></div>
                        <span>AUD</span>
                    </td>
                    <td><span>15.792</span></td>
                    <td><span>16.556</span></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
