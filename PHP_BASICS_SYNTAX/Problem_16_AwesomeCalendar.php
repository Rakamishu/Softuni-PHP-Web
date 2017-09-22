<?php

$now = new DateTime('now');

$months = ['януари', 'февруари', 'март', 'април', 'май', 'юни', 'юли', 'август', 'септември', 'октомври', 'ноември', 'декември'];
$current_year = $now->format("Y");
$current_month = $now->format("m");
$current_day = $now->format("d");
$month = 0;

echo '<table class="calendar">';
echo '<th colspan="4" class="year">'.$current_year.'</th>';

for($row = 1; $row <= 3; $row++)
{
    echo '<tr>';
    for ($column=1; $column<=4; $column++)
    {
        echo '<td class="month">';

        $month++;

        $month_details = new DateTime($now->format("Y-".$month."-1"));
        $first_day_in_month = $month_details->format('w');
        $month_days = $month_details->format('t');

        if ($first_day_in_month == 0)
        {
            $first_day_in_month = 7;
        }

        echo '<table class="month_box">';
        echo '<th colspan="7">'.$months[$month-1].'</th>';
        echo '<tr class="days"><td>По</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пе</td><td>Сб</td><td>Не</td></tr><tr>';
        for($i=1; $i<$first_day_in_month; $i++)
        {
            echo '<td> </td>';
        }

        for($day = 1; $day <= $month_days; $day++)
        {
            $pos = ($day + $first_day_in_month - 1) % 7;
            
            if(($day == $current_day) && ($month == $current_month))
            {
                $class = 'today';
            }
            else
            {
                $class = 'day';
            }
            
            if($pos == 0 || $pos == 6)
            {
                $class .= ' weekend';
            }

            echo '<td class="'.$class.'">'.$day.'</td>';
            if ($pos==0)
            {
                echo '</tr><tr>';
            }
        }
        echo '</tr>';
        echo '</table>';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

<style type="text/css">
body {
    font-family: Verdana; 
}
.calendar {
    width: 700px;
}
.calendar, .calendar table, .calendar td {
    text-align: center;
}
.calendar table, .month_box td {    
}
.calendar .year{
    font-size:18pt; 
}
.calendar .month{
    width: 25%;
    vertical-align: top;
}
.calendar .month table{
    font-size:8pt;
}
.calendar .month th{
    text-align: center;
    font-size:12pt;
    color:#996666;
    border-top: 1px solid #000000;
    border-bottom: 1px solid #000000;
}
.calendar .month .weekend{
    color:#ff0000;
}
.calendar .month .today{
    background:#000000;
    color: #ffffff;
}
</style>


