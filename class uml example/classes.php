<?
class Contact_info{ //parent class
    public $firstname;
    public $surname;
    private $p_number;
}

class Package extends Contact_info{ //child class
    public $id;
    public $size;
    public $weight; //v kg :D
    private $sender = [];
}

$order = new Package();
$order->id = intval(uniqid(rand()));
$order->size = 'small';
$order->weight = 1.4;
$order->firstname = 'martin';   //proměnná z třídy Contact_info použita přes třídu Package
$order->surname = 'job';    //proměnná z třídy Contact_info použita přes třídu Package