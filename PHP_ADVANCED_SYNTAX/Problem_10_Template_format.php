<?php

$template = '<?xml version="1.0" encoding="UTF-8"?>
<quiz>
  <question>
    {question text}
  </question>
  <answer>
    {answer text}
  </answer>
</quiz>';


$input = 'Who was the forty-second president of the U.S.A.?, William Jefferson Clinton';
$data = explode(", ", $input);

$template = str_replace('{question text}', $data[0], $template);
$template = str_replace('{answer text}', $data[1], $template);

echo $template;