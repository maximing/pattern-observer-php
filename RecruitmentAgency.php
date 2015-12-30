<?php
namespace Observer;

class RecruitmentAgency implements ISubject
{
    private $__observers;
    private $__job;

    public function __construct()
    {
        $this->__observers = new \SplObjectStorage();
    }

    /**
     * @param IObserver $observer
     */
    public function registerObserver(IObserver $observer)
    {
        $this->__observers->attach($observer);
    }

    /**
     * @param IObserver $observer
     */
    public function removeObserver(IObserver $observer)
    {
        $this->__observers->detach($observer);
    }

    /**
     * @param Job $job
     */
    public function setJob(Job $job)
    {
        $this->__job = $job;
        $this->__notifyObservers();
    }

    private function __notifyObservers()
    {
        foreach($this->__observers as $observer) {
            $observer->update($this->__job);
        }
    }
}