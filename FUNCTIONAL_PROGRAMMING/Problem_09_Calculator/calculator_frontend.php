<?php include "calculator.php"; ?>

<form action="" method="get">
    <input type="text" name="a" />
    <input type="text" name="b" />
    <select name="operation">
        <option value="sum">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="submit" value="Go" />
    <br /><br />
    = <input type="text" value="<?php if($output){ echo $output[0]; } ?>" />
</form>

