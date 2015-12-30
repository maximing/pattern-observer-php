<?php
namespace Observer;

class Human implements IObserver
{

    public function update(Job $job)
    {
        echo "Человек получил обновление о новой вакансии {$job->getName()} с зарплатой {$job->getSalary()} USD";
        echo '<br>';
    }
}