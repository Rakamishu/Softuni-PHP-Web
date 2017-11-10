<?php
error_reporting(E_ALL);
include "Database.php";

class CallCenter
{
    private $dbh;
    private $input;
    private $country_name;
    private $country_code;
    private $capital;
    private $currency_code;
    private $continent_code;
    private $currency_description;
    private $continent_name;
    private $mountain_id;

    public function __construct($input)
    {
        $this->input = $input;
        try {
            $this->db = new Database();
            $this->dbh = $this->db->getDb();
        } catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }

    public function getCapital(): string
    {
        $stmt = $this->dbh->prepare("SELECT * FROM `countries` WHERE `country_name` = ? OR `country_code` = ? OR `iso_code` = ?");
        $stmt->execute(array($this->input, $this->input, $this->input));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->country_name = $row['country_name'];
        $this->country_code = $row['country_code'];
        $this->capital = $row['capital'];
        $this->currency_code = $row['currency_code'];
        $this->continent_code = $row['continent_code'];

        return 'Country: ' . $this->country_name . PHP_EOL . 'Capital: ' . $this->capital . PHP_EOL;
    }

    public function getCurrency(): string
    {
        $currencies_prep = $this->dbh->prepare("SELECT * FROM currencies WHERE currency_code = ?");
        $currencies_prep->execute([$this->currency_code]);
        $currow = $currencies_prep->fetch(PDO::FETCH_ASSOC);

        $this->currency_description = $currow['description'];

        return 'Currency: ' . $this->currency_description . PHP_EOL;
    }

    public function getContinent(): string
    {
        $continent_prep = $this->dbh->prepare("SELECT * FROM continents WHERE continent_code = ?");
        $continent_prep->execute([$this->continent_code]);
        $controw = $continent_prep->fetch(PDO::FETCH_ASSOC);

        $this->continent_name = $controw['continent_name'];

        return 'Continent: ' . $controw['continent_name'] . PHP_EOL;
    }


    public function getMountain(): string
    {
        $mountain_country_prep = $this->dbh->prepare("SELECT COUNT(*) as count, mountain_id FROM mountains_countries WHERE country_code = ?");
        $mountain_country_prep->execute([$this->country_code]);
        $mountain_country_row = $mountain_country_prep->fetch(PDO::FETCH_ASSOC);

        $this->mountain_id = $mountain_country_row['mountain_id'];

        if ($mountain_country_row['count'] > 0) {
            return 'Forward customer for special offers!';
        }
        return '';
    }

    public function getPeak(): string
    {
        $peak_prep = $this->dbh->prepare("SELECT * FROM peaks WHERE mountain_id = ?");
        $peak_prep->execute([$this->mountain_id]);
        $peak_row = $peak_prep->fetch(PDO::FETCH_ASSOC);
        if ($peak_row['elevation'] > 4000) {
            return 'Show high mountain special equipment offers!';
        }
        return '';
    }

    public function __toString(): string
    {
        return $this->getCapital().$this->getCurrency().$this->getContinent().$this->getMountain().$this->getPeak().PHP_EOL;
    }

    public function addCustomer(string $customer_name, string $customer_family, string $country_code)
    {
        $exists = $this->checkExistingCustomer($country_code);
        if($exists == 0){
            throw new Exception("Country doesn't exist.");
        }
        else
        {
            $addCustomer = $this->dbh->prepare("INSERT INTO customer (customer_name, customer_family, country_code) VALUES (?, ?, ?)");
            $addCustomer->execute([$customer_name, $customer_family, $country_code]);
            echo new CallCenter($country_code);
        }
    }

    public function checkExistingCustomer(string $country_code)
    {
        $count = $this->dbh->prepare("SELECT COUNT(*) as count FROM countries WHERE iso_code = ?");
        $count->execute([$country_code]);
        $countrow = $count->fetch(PDO::FETCH_ASSOC);
        return $countrow['count'];
    }

}

while(true) {
    $input = trim(fgets(STDIN));
    $split = explode(" ", $input);
    $split_comma = explode(", ", $input);
    $country = @substr($split[1], 0, -1);

    if ($input == "Bye") {
        echo "Good bye!";
        break;
    }

    $app = new CallCenter($input);

    if(isset($split[1]))
    {
        try {
            $app->addCustomer($split_comma[1], $split_comma[2], $country);
        } catch (Exception $ex) {
            echo $ex->getMessage().PHP_EOL;
        }
    }
    else
    {
        echo $app;
    }

}
