<?php

class Student {

    public function __construct(
        public string $name,
        private int $age,
        private string $result
    ) {}

    public function displayStudentDetails() {
        echo "Name: $this->name <br/>";
        echo "Age: $this->age <br/>";
        echo "Result: $this->result <br/>";
    }
}


class Guardian {

    public function __construct(
        public string $guardianName,
        public string $contact
    ) {}

    public function displayGuardianDetails() {
        echo "Guardian: $this->guardianName <br/>";
        echo "Contact: $this->contact <br/>";
    }
}


class GraduateStudent extends Student {

    public function __construct(
        string $name,
        int $age,
        string $result,
        public string $degree
    ) {
        parent::__construct($name, $age, $result);
    }

    public function displayGraduateDetails() {
        $this->displayStudentDetails();
        echo "Degree: $this->degree <br/>";
    }
}


$anuj = new Student("Anuj Ghimire", 22, "A");

$anuj->displayStudentDetails();

echo "<hr/>";


$graduate = new GraduateStudent(
    "Anuj Ghimire",
    22,
    "A",
    "Bachelor of Engineering"
);

$graduate->displayGraduateDetails();

?>