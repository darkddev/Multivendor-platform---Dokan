<?php

function add_delivery_notice() {
    echo <<<EOT
    <tr>
        <td>
            <h6 style="margin:0;">Delivery Notice</h6>
        </td>
        <td/>
    </tr>
    <tr>
        <td>
            <ul>
                <li>If your order was placed by 11 am we will have it delivered to you before 4 pm unless you selected an expedited delivery.</li>
                <li>If your order is placed after 11 am then we will schedule pickup by no later than 4:30 pm of the same day and delivery will be by no later than 8pm of the same day.</li>
                <li>If the order is placed after 4 pm pickup will be by 12 noon the next day and delivered before 4 pm tomorrow.</li>
                <li>HOWEVER, if you really need it today you can choose to have it expedited at a surcharge and it will still be delivered today</li>
            </ul>
        </td>
    </tr>    

EOT;
}

add_action("woocommerce_review_order_before_shipping", "add_delivery_notice", 11);