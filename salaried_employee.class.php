<?php

/*
* Author: Adam Patrick
* Date: 10/9/18
* Name: salaried_employee.class.php
* Description: This class models a salaried employee, subclass of employee
*/

class SalariedEmployee extends Employee {
    private $weekly_salary;
    //define constructor
    public function __construct($weekly_salary){
        $this->weekly_salary = $weekly_salary;
    }
    //define getters
    public function getWeeklySalary(){
        return $this->weekly_salary;
    }
    public function getPaymentAmount(){
        return $this->getWeeklySalary();
    }
    //
    public function toString(){
        parent::toString();
        printf("Weekly Salary: %0.2f", $this->getWeeklySalary());
        printf("Payment Amount: %0.2f", $this->getPaymentAmount());
    }
}
