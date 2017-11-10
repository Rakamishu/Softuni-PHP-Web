<?php
class SalesModel extends Model{
	private $date_time;
	private $amount;
	private $car_id;
	private $customer_id;
	
	public function create($make, $model, $year, $first_name, $family_name, $amount)
	{
	    $carid = $this->getCarId($make, $model);
	    $customerid = $this->getCustomerId($first_name, $family_name);

        $this->amount = $amount;
        $this->car_id = $carid;
        $this->customer_id = $customerid;

        // Insert into sales
		try{
		    $this->db->beginTransaction();
            $stmt = $this->db->prepare("
                INSERT INTO `sales`
                  (`date_time`,`amount`,`car_id`,`customer_id`)
                VALUES 
                   (NOW(), ?, ?, ?)");
            $stmt->bindParam(1, $this->amount);
            $stmt->bindParam(2, $this->car_id);
            $stmt->bindParam(3, $this->customer_id);
            $stmt->execute();
            $sale_id = $this->db->lastInsertId();
            $this->db->commit();
            return($sale_id);
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}
	// Todo - problem 1
    // Modifications to create()

    private function getCarId($make, $model)
    {
        $stmt = $this->db->prepare("SELECT id FROM cars WHERE make = ? AND model = ?");
        $stmt->execute([$make, $model]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['id'];
    }
    private function getCustomerId($first_name, $family_name)
    {
        $stmt = $this->db->prepare("SELECT id FROM customers WHERE first_name = ? AND family_name = ?");
        $stmt->execute([$first_name, $family_name]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['id'];
    }

	
	public function readAll()
	{
        try {
            $stmt = $this->db->prepare("
              SELECT *         
                FROM `deal`");
            $stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);
        } catch(PDOException $e){
		    print "Error!: " . $e->getMessage() . "<br/>";
        }
	}
	
	public function readTotal()
	{
        $stmt = $this->db->prepare("
            SELECT SUM(`amount`) as `total_amount`
              FROM `sales`");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row['total_amount'])
			return $row['total_amount'];
		else
			return false;
	}


    public function viewCustomers()
    {
        $stmt = $this->db->prepare("SELECT * FROM customers ORDER BY id DESC");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function viewCars()
    {
        $stmt = $this->db->prepare("SELECT * FROM cars ORDER BY id DESC");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}