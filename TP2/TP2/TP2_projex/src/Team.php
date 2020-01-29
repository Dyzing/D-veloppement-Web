<?php

    include 'IManager.php';
    include 'Employee.php';

    class Manager
    {
        private $_id;
        public $_name;
        protected $_salary;
        private $_age;
        
        function __construct(int $id, string $name, float $salary,int $age)
        {
            $this-> _id = $id;
            $this-> _name = $name;
            $this-> _salary = $salary;
            $this-> _age = $age;
        }
        
        public function getId() : int
        {
            return $this->_id;
        }
        public function getName() : string
        {
            return $this->_name;
        }
        public function getSalary() :float
        {
            return $this->_salary;
        }
        public function getAge() : int
        {
            return $this->_age;
        }
        
        public function setId(int $id)
        {
            $this -> _id = $id;
        }
        public function setName(string $name)
        {
            $this -> _name = $name;
        }
        public function setSalary(float $salary)
        {
            $this -> _salary = $salary;
        }
        public function setAge(int $age)
        {
            $this -> _age = $age;
        }
        
        public function __toString() : string
        {
            return "id : ".$this->getId() .", name  :".$this->getName() .", salary : ".$this->getSalary() .", age : ".$this->getAge();
        }
    }


    $bim = new Employee(1, "BIM", 1200.5, 21);
    $bam = new Employee(2, "BAM", 800.5, 23);
    $boom = new Employee(3, "BOOM", 2400.5, 24);
    
    
    
    $employees = [
        $bim,
        $bam,
        $boom,
    ];
    
    $managers = [
        
    ];


?>