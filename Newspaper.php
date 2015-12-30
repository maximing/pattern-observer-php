<?php
namespace Observer;

class Newspaper implements IObserver
{

    public function update(Job $job)
    {
        echo "Газета получила обновление о новой вакансии {$job->getName()} с зарплатой {$job->getSalary()} USD";
        echo '<br>';
    }
}