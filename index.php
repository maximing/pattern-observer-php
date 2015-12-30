<?php
use Observer\ {
    Human,
    WebSite,
    Newspaper,
    Job,
    RecruitmentAgency
};

require_once('IObserver.php');
require_once('ISubject.php');
require_once('Job.php');
require_once('RecruitmentAgency.php');
require_once('Human.php');
require_once('WebSite.php');
require_once('Newspaper.php');

$job = new Job();
$job->setName('Программист');
$job->setSalary(1000);

$human = new Human();
$newspaper = new Newspaper();
$webSite = new WebSite();

$recruitmentAgency = new RecruitmentAgency();
$recruitmentAgency->registerObserver($human);
$recruitmentAgency->registerObserver($newspaper);
$recruitmentAgency->registerObserver($webSite);
$recruitmentAgency->setJob($job);
/*
Итог:
Человек получил обновление о новой вакансии Программист с зарплатой 1000 USD
Газета получила обновление о новой вакансии Программист с зарплатой 1000 USD
Веб-сайт получил обновление о новой вакансии Программист с зарплатой 1000 USD
*/

// Исключаем человека из рассылки, видимо, он нашел работу по прошлому уведомлению о вакансии :)
$recruitmentAgency->removeObserver($human);

$job = new Job();
$job->setName('Менеджер');
$job->setSalary(800);
$recruitmentAgency->setJob($job);
/*
Итог:
Газета получила обновление о новой вакансии Менеджер с зарплатой 800 USD
Веб-сайт получил обновление о новой вакансии Менеджер с зарплатой 800 USD
*/