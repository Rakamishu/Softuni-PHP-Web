<?php

$people = [
  ['name'=> 'John'  , 'height'=> 1.65],
  ['name'=> 'Peter' , 'height'=> 1.85],
  ['name'=> 'Silvia', 'height'=> 1.69],
  ['name'=> 'Martin', 'height'=> 1.82]
];


$filter = function  ($people)
{
    return array_filter(
            $people,
            function ($people)
            {
                if($people['height'] < 1.80)
                {
                    unset($people);
                }
                if(isset($people)){
                    return $people;
                }
            }
    );
};

print_r($filter($people));