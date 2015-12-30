<?php
namespace Observer;

class WebSite implements IObserver
{
    public function update(Job $job)
    {
        echo "Веб-сайт получил обновление о новой вакансии {$job->getName()} с зарплатой {$job->getSalary()} USD";
        echo '<br>';
    }
}