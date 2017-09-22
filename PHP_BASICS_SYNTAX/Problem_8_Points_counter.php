<?php

$input = 'LA|Bryant|70
L%@A|Odom|67
James|%CAVA@@LIE$$$RS|54
C@art%er|GR%%IZZ%%LIE@S@@@|49
Anthony|KNICKS|11
UTAH|Jo%%%%hn$$so@@n|24
S@@PU*R*S$|Ga***so**l|32
Jone@@@@s|KNICKS|5';


$input = preg_replace('/[^A-Za-z0-9|\n]/', '', $input);
$split_new_lines = explode("\n", $input);


foreach($split_new_lines as $team)
{
    $explode = explode("|", $team);

    echo $explode[0].' => '.$explode[2]."\nMost points scored by ".$explode[1]."\n";
}

