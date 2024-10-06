<?php
/* Template Name: Work Orders */

get_header(); ?>

<div class="container">
    <h1>Work Orders</h1>
    
    <table id="workOrdersTable" class="table table-striped">
        <thead>
            <tr>
                <th>Work Order ID</th>
                <th>Account ID</th>
                <th>Date Received</th>
                <th>Status</th>
                <th>Source</th>
                <th>Type</th>
                <th>Vendor Name</th>
                <th>Short Description</th>
                <th>Address</th>
                <th>Parcel #</th>
                <th>Days</th>
            </tr>
        </thead>
        <tbody>
            <?php
            global $wpdb;
            $results = $wpdb->get_results("SELECT * FROM your_table_name");
            foreach ($results as $row) {
                echo '<tr class="clickable-row" data-href="' . esc_url( get_permalink() . '?work_order_id=' . $row->work_order_id ) . '">';
                echo '<td>' . esc_html($row->work_order_id) . '</td>';
                echo '<td>' . esc_html($row->account_id) . '</td>';
                echo '<td>' . esc_html($row->date_received) . '</td>';
                echo '<td>' . esc_html($row->status) . '</td>';
                echo '<td>' . esc_html($row->source) . '</td>';
                echo '<td>' . esc_html($row->type) . '</td>';
                echo '<td>' . esc_html($row->vendor_name) . '</td>';
                echo '<td>' . esc_html($row->short_desc) . '</td>';
                echo '<td>' . esc_html($row->addr_name . ', ' . $row->addr_add_1) . '</td>';
                echo '<td>' . esc_html($row->parcel_number) . '</td>';
                echo '<td>' . esc_html($row->days) . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Make rows clickable
        const rows = document.querySelectorAll('.clickable-row');
        rows.forEach(row => {
            row.addEventListener('click', function() {
                window.location = this.dataset.href;
            });
        });

        // Initialize DataTable
        $('#workOrdersTable').DataTable();
    });
</script>

<?php get_footer(); ?>
