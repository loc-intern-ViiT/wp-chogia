<?php
add_shortcode('shortcode_tong_hop_ngoai_te', 'create_shortcode_tong_hop_ngoai_te');


function create_shortcode_tong_hop_ngoai_te()
{
?>
    </style>
    <table class="exchange-rate__table" style="border: 1px solid #2D95E4">
        <thead>
            <tr style="color: black;">
                <th class="txt_bank">NGOẠI TỆ</th>
                <th>Tên đầy đủ</th>
                <th>GIÁ MUA</th>
                <th>GIÁ BÁN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="ps-3">
                    <a href="#">
                        <div class="bank_name">
                            <img decoding="async" class="image-16" src="https://webtygia.com/storage/<?php //echo isset($bank['image']) ? $bank['image'] : ''; 
                                                                                                        ?>">
                            <span><?php //echo isset($bank['short_name']) ? $bank['short_name'] : ''; 
                                    ?></span>
                        </div>
                    </a>
                </td>
                <td><?php //echo isset($bank['name']) ? $bank['name'] : ''; 
                    ?></td>
                <td><?php //echo isset($bank['code']) ? $bank['code'] : ''; 
                    ?></td>
            </tr>
            <tr>
                <td class="ps-3">
                    <a href="#">
                        <div class="bank_name">
                            <img decoding="async" class="image-16" src="https://webtygia.com/storage/<?php //echo isset($bank['image']) ? $bank['image'] : ''; 
                                                                                                        ?>">
                            <span><?php //echo isset($bank['short_name']) ? $bank['short_name'] : ''; 
                                    ?></span>
                        </div>
                    </a>
                </td>
                <td><?php //echo isset($bank['name']) ? $bank['name'] : ''; 
                    ?> Đô la Australia</td>
                <td><?php //echo isset($bank['code']) ? $bank['code'] : ''; 
                    ?> 16.817 </td>
                <td><?php //echo isset($bank['code']) ? $bank['code'] : ''; 
                    ?> 17.817 </td>
            </tr>

        </tbody>
    </table>
<?php
}
