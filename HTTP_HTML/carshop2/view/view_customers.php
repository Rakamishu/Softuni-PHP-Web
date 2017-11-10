<table>

<?php foreach($customers as $customer): ?>
<tr>
    <td>
        <?= $customer['first_name']; ?>
    </td>
    <td>
        <?= $customer['family_name']; ?>
    </td>
</tr>


<?php endforeach; ?>
</table>