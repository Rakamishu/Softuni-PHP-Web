<?php
session_start();

/**
 * Da jivee google za tazi funkciq
 */
function PaginateArray($input, $page, $show_per_page) {
    $page = $page < 1 ? 1 : $page;
    $start = ($page - 1) * ($show_per_page);
    $offset = $show_per_page;
    $outArray = array_slice($input, $start, $offset);
    return $outArray;
}
?>

<form method="post">
    Delimeter: 
    <select name="delimeter">
        <option value=",">,</option>
        <option value="|">|</option>
        <option value="&">&</option>
    </select> <br />
    Names: 
    <input type="text" name="names"> <br />
    Ages: 
    <input type="text" name="ages"> <br />
    <label>Age restriction? <input type="checkbox" name="age_restriction" /></label><br /><br />
    <input type="submit" name="filter" value="Filter!">
    <h3>Examples (to copy and paste in the form): </h3>
    <b>Names:</b> <br />
    Petar, Georgi, Ivan, Stefan, Dimitar, Nikolai, Simeon, Petar, Georgi, Ivan, Stefan, Dimitar, Nikolai, Simeon, Petar, Georgi, Ivan, Stefan, Dimitar, Nikolai, 
    <span style="color:red;">Malak_Simo, Malak_Petko, Malak_Goshko, Malak_Ivan4o, Malak_Stef4o, Malak_mitko, Malak_Nikolai4o, Malak_Simo</span>
    <br />
    <b>Ages:</b> <br />
    20, 21, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 35, 36, 38, 39, 40, <span style="color:red;">17, 16, 15, 14, 13, 12, 10, 9</span>
    <br />
</form>

<?php
if(isset($_POST['filter'])){
    /**
     * Vzima imenata i godinite ot $_POST, razdelq gi spored razdelitelq i gi zapisva v sesiq, za6toto nqma kak da se predade informaciqta pri smqnata na adresa..
     * Refreshva stranicata sled kato se e obnovila sesiqta, za da se zaredi vtoriq if.
     */
    $_SESSION['names'] = explode($_POST['delimeter'], $_POST['names']); 
    $_SESSION['ages'] = explode($_POST['delimeter'], $_POST['ages']);
    $_SESSION['age_restriction'] = isset($_POST['age_restriction']) ? "on" : "off"; // 4ast 3 ot zada4ata - Filter Legal Students
    header("Refresh:0");
} 
if(isset($_SESSION['names'], $_SESSION['ages'], $_SESSION['age_restriction']))
{
    $getpage = isset($_GET['page']) ? $_GET['page'] : 1; //vzima teku6tata stranica ili ako ne e setnata slaga po default 1
    
    $list = []; //sazdavame si nov masiv v koito 6te vkarvame otdelen masiv za vseki potrebitel i negovite imena i godini
    
    for($i = 0; $i < count($_SESSION['names']); $i++)
    {
        if($_SESSION['age_restriction'] == "on"){
            /**
             * Dobavqme v masiva samo ako potrebitelq e nad 18.
             */
            if($_SESSION['ages'][$i] >= 18)
            {
                $list[$i] = [['name' => $_SESSION['names'][$i], 'age' => $_SESSION['ages'][$i]]];
            }
        }
        else 
        {
            $list[$i] = [['name' => $_SESSION['names'][$i], 'age' => $_SESSION['ages'][$i]]];
        }
    }
    
?>
<table border="1" cellpadding="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $results = PaginateArray($list, $getpage, 5);
        foreach($results as $array => $person) {
            ?>
                <tr>
                    <td><?= $person[0]['name'] ?></td>
                    <td><?= $person[0]['age'] ?></td>
                </tr>
            <?php 
        }
        ?>
    </tbody>
</table>
<?php
$total_members = count($list);
$total_pages = ceil($total_members / 5); //zakraglqme nagore
$next_page = $getpage + 1;
$prev_page = $getpage - 1;
$url = "http://localhost/Softuni/Softuni-PHP-Web/PHP_BASICS_SYNTAX-Lab/Problem_2_Render_students_info.php"; //patq na faila

if($getpage > 1){
    echo '<a href="'.$url.'?page='.$prev_page.'" style="color: green; text-decoration: none;">[Previous page]</a>';
}

for($page = 1; $page <= $total_pages; $page++)
{
    echo '<a href="'.$url.'?page='.$page.'" style="';
    if($getpage == $page)
    {
        echo 'color: red; text-decoration: none;';
    }
    else
    {
        echo 'color: green; text-decoration: none;';
    }
    echo '">['.$page.']</a>';
}

if($getpage < $total_pages){
    echo '<a href="'.$url.'?page='.$next_page.'" style="color: green; text-decoration: none;">[Next page]';
}

}