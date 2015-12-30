<?php
namespace Observer;

interface ISubject
{
    public function registerObserver(IObserver $observer);
    public function removeObserver(IObserver $observer);
}