<?php

add_shortcode('shortcode_gia_vang_trong_nuoc', 'create_shortcode_gia_vang_trong_nuoc');
function  create_shortcode_gia_vang_trong_nuoc()
{
?>
    <div class="board-price-domestic">
        <div>
            <h3 class="widget-price-title">Giá vàng trong nước</h3>
        </div>
        <div class="flex-end-center flex-wrap mb-10">
            <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
        </div>
        <table class="bg-light">
            <thead>
                <tr>
                    <th class="pl-5px">hệ thống</th>
                    <th>Mua</th>
                    <th>Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="board-price-name"><span>SJC</span></td>
                    <td><span>1.899</span></td>
                    <td><span>1.900</span></td>
                </tr>
                <tr>
                    <td class="board-price-name"><span>VÀNG NHẴN SJC</span></td>
                    <td><span>69.600.000</span></td>
                    <td><span>70.800.000</span></td>
                </tr>
                <tr>
                    <td class="board-price-name"><span>AVPL</span></td>
                    <td><span>78.300.000</span></td>
                    <td><span>80.800.000</span></td>
                </tr>
                <tr>
                    <td class="board-price-name"><span>SJC</span></td>
                    <td><span>62.450.000</span></td>
                    <td><span>63.700.000</span></td>
                </tr>
                <tr>
                    <td class="board-price-name"><span>SJC</span></td>
                    <td><span>78.700.000</span></td>
                    <td><span>81.000.000</span></td>
                </tr>
                <tr>
                    <td class="board-price-name"><span>VÀNG TRẮNG</span></td>
                    <td><span>49.320.000</span></td>
                    <td><span>53.820.000</span></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
