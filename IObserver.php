<?php
namespace Observer;

interface IObserver
{
    public function update(Job $job);
}