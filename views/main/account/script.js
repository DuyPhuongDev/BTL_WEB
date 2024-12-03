
$(document).ready(function () {
    var orders = $('#list-orders').data('orders');
    html = '';
    orders.forEach((order, index) => {
        price = new Intl.NumberFormat('vi-VN').format(order.total) + " VNĐ";
        method = order.payment_method == "COD" ? 'Thanh toán khi nhận hàng' : 'Chuyển khoản ngân hàng';
        orderStatus = order.status === "Đang vận chuyển" ? '<span class="badge bg-warning text-dark">Đang vận chuyển</span>' : '<span class="badge bg-success">Đã giao hàng</span>';
        html += `
            <tr>
                <td>${index + 1}</td>
                <td>ORD${order.payment_id}</td>
                <td>${order.payment_date}</td>
                <td>${price}</td>
                <td>${method}</td>
                <td>${orderStatus}</td>
            </tr>
        `;
    });
    $('#list-orders').html(html);
});