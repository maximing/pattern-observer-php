<?php
namespace Observer;

class Job
{
    private $__name;
    private $__salary;

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->__name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->__name;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary)
    {
        $this->__salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->__salary;
    }
}