<?php

/*
 * Author: Adam Patrick
 * Date: 10/9/18
 * Name: salaried_employee.class.php
 * Description: This class models a salaried employee, subclass of employee
 */

class SalariedEmployee extends Employee {

    private $weekly_salary;
    private static $employee_count;

    //define constructor
    public function __construct($first_name, $last_name, $ssn, $weekly_salary) {
        parent::__construct($first_name, $last_name);
        $this->weekly_salary = $weekly_salary;
        self::$employee_count++;
    }

    //define getters
    public function getWeeklySalary() {
        return $this->weekly_salary;
    }

    public function getPaymentAmount() {
        return $this->getWeeklySalary();
    }

    //extend the parent toString method by adding output for weekly salary and payment amount
    public function toString() {
        parent::toString();
        printf("<br>Weekly Salary: %0.2f", $this->getWeeklySalary());
        printf("<br>Payment Amount: %0.2f", $this->getPaymentAmount());
    }

}
