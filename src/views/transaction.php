<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($transactions as $transaction): ?>
                <tr>
                    <td><?= $transaction[0] ?></td>
                    <td><?= $transaction[1] ?></td>
                    <td><?= $transaction[2] ?></td>
                    <td>
                        <?php if(formate_number($transaction[3]) < 0): ?>
                            <span style="color: red">
                                <?= $transaction[3] ?>
                            </span>
                        <?php elseif(formate_number($transaction[3]) > 0) :?>
                            <span style="color: green">
                                <?= $transaction[3] ?>
                            </span>
                        <?php else:?>
                            <?= $transaction[3] ?>
                        <?php endif ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Total income</th>
                <td colspan="3"><?= $totals['income'] ?></td>
            </tr>
            <tr>
                <th>Total expense</th>
                <td colspan="3"><?= $totals['expense'] ?></td>
            </tr>
            <tr>
                <th>Net total</th>
                <td colspan="3"><?= $totals['total'] ?></td></tr>
        </tfoot>
    </table>
</body>
</html>