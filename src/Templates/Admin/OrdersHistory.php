<?php

namespace FullzTools\Templates\Admin;

/**
 * Orders History Template
 * 
 * Display order history in admin panel
 */
class OrdersHistory
{
    /**
     * Render orders history
     */
    public function render($orders)
    {
        ?>
        <div class="orders-history">
            <h2>Orders History</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= htmlspecialchars($order['id']) ?></td>
                        <td><?= htmlspecialchars($order['customer']) ?></td>
                        <td><?= htmlspecialchars($order['amount']) ?></td>
                        <td><?= htmlspecialchars($order['status']) ?></td>
                        <td><?= htmlspecialchars($order['date']) ?></td>
                        <td>
                            <a href="/admin/orders/view/<?= $order['id'] ?>">View</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php
    }
}
