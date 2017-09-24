<form action="" method="post">
    Categories: <input type="text" name="categories" /><br />
    Tags: <input type="text" name="tags" /><br />
    Months: <input type="text" name="months" /><br />
    <input type="submit" name="submit" value="Generate" />
</form>
<?php
if(isset($_POST['submit']) && !empty($_POST['categories']) && !empty($_POST['tags']) && !empty($_POST['months']))
{
    
    echo '<h2>Categories</h2>';
    echo '<ul>';
        $cats = explode(", ", $_POST['categories']);
        foreach($cats as $cat)
        {
            echo "<li>".$cat."</li>";
        }
    
    echo '</ul>';
    echo '<h2>Tags</h2>';
    echo '<ul>';
        $tags = explode(", ", $_POST['tags']);
        foreach($tags as $tag)
        {
            echo "<li>".$tag."</li>";
        }
    echo '</ul>';
    echo '<h2>Months</h2>';
    echo '<ul>';
        $months = explode(", ", $_POST['tags']);
        foreach($months as $month)
        {
            echo "<li>".$month."</li>";
        }
    echo '</ul>';
    
}