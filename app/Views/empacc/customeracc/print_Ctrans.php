<!DOCTYPE html>
<html>

<head>
    <title></title>
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
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($data_customer as $transaction) {
            ?>
                <tr>

                    <td>
                        <span class="row px-3  text-xs"><?php echo $transaction->c_id ?></span>
                        <span class="row px-3"><?php echo $transaction->name_customer ?></span>
                    </td>
                    <td>
                        <span class="row px-3  text-xs"><?php echo $transaction->employee_id ?></span>
                        <span class="row px-3"><?php echo $transaction->name_employee ?></span>
                    </td>
                    <td><?php echo $transaction->phone ?></td>
                    <td><?php echo $transaction->weight ?> KG</td>
                    <td><?php echo $transaction->item_avail ?></td>
                    <td><?php echo $transaction->total ?></td>
                    <td><?php echo $transaction->date ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>

    <p>Note: Year-month-day time format (yyyy-mm-dd)</p>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>