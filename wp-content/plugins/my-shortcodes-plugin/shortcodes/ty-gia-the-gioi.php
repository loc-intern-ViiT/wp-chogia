<?php
add_shortcode('shortcode_gia_vang_the_gioi', 'create_shortcode_gia_vang');

function create_shortcode_gia_vang()
{
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

        .cur-icon {
            width: 28px;
            height: 28px;
            margin-right: 6px;
            background: url(http://chogia.viit.com.vn/wp-content/uploads/2024/03/currencies.png);
        }

        .ci-usd {
            background-position: 0 -584px;
        }

        .ci-jpy {
            background-position: 0 -224px;
        }

        .ci-eur {
            background-position: 0 -128px;
        }

        .ci-chf {
            background-position: 0 -56px;
        }

        .ci-gbp {
            background-position: 0 -152px;
        }

        .ci-aud {
            background-position: 0 0;
        }
    </style>
    <!-- AAbank -->
    <div class="board-price light">
        <div>
            <h3 class="widget-price-title">Tỷ giá AABank</h3>
        </div>
        <div class="flex-end-center flex-wrap mb-10">
            <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
        </div>
        <table class="AABank">
            <thead>
                <tr>
                    <th class="">Ngoại tệ</th>
                    <th>Mua</th>
                    <th>Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ngoai-te">
                        <div class="cur-icon ci-usd"></div>
                        <span>USD</span>
                    </td>
                    <td><span>24.620</span></td>
                    <td><span>25.000</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te">
                        <div class="cur-icon ci-jpy"></div>
                        <span>JPY</span>
                    </td>
                    <td><span>159</span></td>
                    <td><span>168</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te">
                        <div class="cur-icon ci-eur"></div>
                        <span>EUR</span>
                    </td>
                    <td><span>26.126</span></td>
                    <td><span>27.442</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te">
                        <div class="cur-icon ci-chf"></div>
                        <span>CHF</span>
                    </td>
                    <td><span>0</span></td>
                    <td><span>28.945</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te">
                        <div class="cur-icon ci-gbp"></div>
                        <span>GBP</span>
                    </td>
                    <td><span>30.592</span></td>
                    <td><span>32.002</span></td>
                </tr>
                <tr>
                    <td class="ngoai-te">
                        <div class="cur-icon ci-aud"></div>
                        <span>AUD</span>
                    </td>
                    <td><span>15.792</span></td>
                    <td><span>16.556</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- giá vàng thế giới -->
    <div class="board-price light">
        <div>
            <h3 class="widget-price-title">Giá vàng thế giới</h3>
        </div>
        <div class="flex-end-center flex-wrap mb-10">
            <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Mua</th>
                    <th>Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span>1.899</span></td>
                    <td><span>1.900</span></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
