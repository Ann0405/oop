<?php
$id_number = '23-01-0837';
$firstname = 'Mae Ann';
$lastname = 'Pacquiao';
$birthdate = 'April 5, 2001';

class Student { // class name

    public string $id_number;
    public string $firstname;
    public string $lastname;
    public string $birthdate;

    // Constructor
    public function __construct($id_number, $firstname, $lastname) {
        $this->id_number = $id_number;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function setBirthdate(string $date) {
        $this->birthdate = $date;
    }

    public function getBirthdate(): string {
        return $this->birthdate;
    }

    public function completeName(): string { // methods
        return $this->firstname . " " . $this->lastname;
    }

    public function displayBirthdate(): string {
        $timestamp = strtotime($this->birthdate);
        return date("F j, Y", $timestamp);
    }
}

$student = new Student($id_number, $firstname, $lastname); // blueprint
$student->setBirthdate($birthdate);

echo "Complete Name: " . $student->completeName() . "<br>"; // 
echo "Birthdate: " . $student->displayBirthdate(); // Fixed echo statement
?>
