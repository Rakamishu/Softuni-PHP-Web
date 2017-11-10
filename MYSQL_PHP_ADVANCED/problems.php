<?php

include "Database.php";

class Carshop
{
    private $db;

    public function __construct ()
    {
        $db = new Database();
        $this->db = $db->getDb();
    }

    public function setSale($car, $person, $amount)
    {
        try {
            // Insert into car
            $this->db->beginTransaction();
            $stmt = $this->db->prepare("
          INSERT INTO `cars`
            (`id`,`make`, `model`, `year`)
          VALUES
            (?, ?, ?, ?)");
            $car_id = "null";
            $stmt->bindParam(1, $car_id);
            $stmt->bindParam(2, $car['make']);
            $stmt->bindParam(3, $car['model']);
            $stmt->bindParam(4, $car['year']);
            $stmt->execute();
            $last_car = $this->db->lastInsertId();

            $stmt2 = $this->db->prepare("INSERT INTO customers (first_name, last_name) VALUES (?, ?)");
            $stmt2->bindParam(1, $person['first_name']);
            $stmt2->bindParam(2, $person['last_name']);
            $stmt2->execute();
            $last_customer = $this->db->lastInsertId();

            $stmt3 = $this->db->prepare("INSERT INTO sales (car_id, customer_id, sale, amount) VALUES (?, ?, NOW(), ?)");
            $stmt3->bindParam(1, $last_car);
            $stmt3->bindParam(2, $last_customer);
            $stmt3->bindParam(3, $amount);
            $stmt3->execute();


            $this->db->commit();
            echo 'New sale entered '.date("Y-m-d H:i");
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }

    public function getSales()
    {
        try {
            $result = $this->db->query('CALL get_sales(@p0)', PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['amount_total'];
            }


        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }


}

$input = trim(fgets(STDIN));
$data = explode(", ", $input);

$carshop = new Carshop();

if($data[0] == "Sales") {
    $carshop->getSales();
} else {
    $amount = explode(" ", $data['5']);
    $carshop->setSale(['make'=> $data[0], 'model' => $data[1], 'year' => $data[2]], ['first_name' => $data[3], 'last_name' => $data[4]], $amount[1]);
}
