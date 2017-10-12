<?php

class Radio
{
    private $artist;
    private $song;
    private $time;
    
    public function __construct($artist, $song, $time)
    {
        $this->setArtist($artist);
        $this->setSong($song);
        $this->setTime($time);
    }
    
    function setArtist($artist) {
        if(strlen($artist) < 3 || strlen($artist) > 20) 
        {
            throw new Exception("Artist name should be between 3 and 20 symbols.");
        }
        $this->artist = $artist;
    }

    function setSong($song) {
        if(strlen($song) < 3 || strlen($song) > 30) 
        {
            throw new Exception("Song name should be between 3 and 30 symbols.");
        }
        $this->song = $song;
    }

    function setTime($time) {
        $explode = explode(":", $time);
        if($explode[0] < 0 || $explode[0] > 14)
        {
            throw new Exception("Song minutes should be between 0 and 14.");
        }
        if($explode[1] < 0 || $explode[1] > 59)
        {
            throw new Exception("Song seconds should be between 0 and 59.");
        }
        $this->time = $time;
    }
    
}

$lines = trim(fgets(STDIN));
$playlist = [];
$log = [];
$total_time = 0;

for($i = 0; $i < $lines; $i++)
{
    $song = explode(";", trim(fgets(STDIN)));
    $song_artist = $song[0];
    $song_name = $song[1];
    $song_time = $song[2];
    try {
        $playlist[] = new Radio($song_artist, $song_name, $song_time);
        $total_time += intval(substr($song_time, 0, 2))*60*1000 + intval(substr($song_time, 2, 2))*1000;
        $log[] = "Song added.";
    } catch (Exception $ex) {
        $log[] = $ex->getMessage();
    }
    
}
$total = count($playlist);
foreach($log as $l){
    echo $l."\n";
}
echo 'Songs added: '.$total."\n";
echo 'Playlist length: '.formatMilliseconds($total_time);

//found this on the internet but is not the best function.
function formatMilliseconds($milliseconds) {
    $seconds = floor($milliseconds / 1000);
    $minutes = floor($seconds / 60);
    $hours = floor($minutes / 60);
    $milliseconds = $milliseconds % 1000;
    $seconds = $seconds % 60;
    $minutes = $minutes % 60;

    $format = '%uh %02um %02us%03u';
    $time = sprintf($format, $hours, $minutes, $seconds, $milliseconds);
    return rtrim($time, '0');
}
