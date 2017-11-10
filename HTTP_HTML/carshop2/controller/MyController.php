<?php
class MyController extends Controller
{
    public function main()
    {
        include "view/header.php";
        include "view/menu.php";
        include "view/main.php";
        switch($this->input){
            case 'sales':
                $this->viewSales();
                break;
            case 'add-sale':
                $this->addSale();
                break;
            case 'customers':
                $this->viewCustomers();
                break;
            case 'cars':
                $this->viewCars();
                break;

            default:
                $this->error404();
                break;
        }
        include "view/footer.php";
    }
    // Todo - change main() according to problem


    public function viewSales()
    {
        $s = new SalesModel($this->db);
        $sales = $s->readAll();
        $sales_total = $s->readTotal();
        include "view/read_sales.php";
    }

    public function addSale()
    {
        include "view/view_addsale.php";
        if(isset($_POST['submit'])) {
            echo 'submited';
            $s = new SalesModel($this->db);
            $s->create($_POST['make'], $_POST['model'], $_POST['year'], $_POST['first_name'], $_POST['family_name'], $_POST['amount']);
        }
    }

    // Todo - problem 2
    public function viewCustomers()
    {
        $s = new SalesModel($this->db);
        $customers = $s->viewCustomers();
        include "view/view_customers.php";
    }

    // Todo - problem 3

    public function viewCars()
    {
        $s = new SalesModel($this->db);
        $cars = $s->viewCars();
        include "view/view_cars.php";
    }

    public function error404()
    {
        include "view/404.php";
    }

    // Todo - Problem 6
    // Implement searchCarOwner()
}
