<table>

    <?php foreach($cars as $car): ?>
        <tr>
            <td>
                <?= $car['make']; ?>
            </td>
            <td>
                <?= $car['model']; ?>
            </td>
            <td>
                <?= $car['year']; ?>
            </td>
        </tr>


    <?php endforeach; ?>
</table>