
<table>
    <th>Name</th>
    <th>Job title</th>
    <th>Hire Date</th>
    <th>Salary</th>
    <?php foreach($params as $p): ?>
    <tr>
        <td><?= $p['first_name'] ?></td>
        <td><?= $p['job_title'] ?></td>
        <td><?= $p['hire_date'] ?></td>
        <td><?= $p['salary'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
