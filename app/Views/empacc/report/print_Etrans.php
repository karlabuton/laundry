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
    <h1>Employee Data Report</h1>

    <table id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class="">

                <th>Employee Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Salary/month</th>
                <th>Join</th>
                <th>End</th>

            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($data_report as $employee) {
            ?>
                <tr>

                    <td><?php echo $employee->name_employee . ' ' ?><sup>(<?php echo substr($employee->gender, 0, 1) ?>)</sup></td>
                    <td><?php echo $employee->address ?></td>
                    <td><?php echo $employee->number ?></td>
                    <td>$<?php echo $employee->salary ?></td>
                    <td><?php echo $employee->date_join ?></td>
                    <td><?php if ($employee->date_stop == '0000-00-00') {
                            echo '-';
                        } else {
                            echo $employee->date_stop;
                        } ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <p>Note: Year-month-day time format (yyyy-mm-dd)</p>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>