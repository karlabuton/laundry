<!DOCTYPE html>
<html>

<head>
    <title>Customer Data Report</title>
    <style>
        body {
            width: 90%;
            margin: auto;
        }

        table {
            border: 1px solid #ddd;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 12px;
            border-collapse: collapse;
            text-align: left;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 12px;
        }

        table th {
            font-weight: bold;
            text-align: left;
        }

        span {
            margin-left: 20px;
        }

        .center {
            text-align: center;
        }

        #no {
            width: 30px;
        }
    </style>
</head>

<body>
    <h5>LAUNDRY</h5>
    <h1>Customer Data Report</h1>

    <table id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class="">
                <th>Customer's name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Weight</th>
                <th>Add Ons</th>
                <th>Total</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $grandTotal = 0;

            foreach ($data_customer as $transaction) {
                $total = (float)$transaction->total;

                // Check if there are any add-ons
                if (!empty($transaction->item_price)) {
                    // If add-ons exist, calculate the total including add-ons
                    $total += (float)$transaction->item_price;
                }

                $grandTotal += $total; // Add to grand total
            ?>
                <tr>
                    <td>
                        <span class="row px-3 text-xs"><?php echo $transaction->c_id ?></span>
                        <span class="row px-3"><?php echo $transaction->name_customer ?></span>
                    </td>
                    <td><?php echo $transaction->address ?></td>
                    <td><?php echo $transaction->phone ?></td>
                    <td><?php echo $transaction->weight ?> KG</td>
                    <td><?php echo $transaction->item_avail ?></td>
                    <td><?php echo number_format($total, 2) ?></td>
                    <td><?php echo $transaction->req_status ?></td>
                    <td><?php echo $transaction->date ?></td>
                </tr>
            <?php }
            ?>
            <tr>
                <td colspan="5"><b>GRAND TOTAL</b></td>
                <td><b><?php echo number_format($grandTotal, 2) ?></b></td>
                <td colspan="2"></td>
            </tr>
        </tbody>
    </table>

    <p>Note: Year-month-day time format (yyyy-mm-dd)</p>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>