<?php

/**
 * Class PriceObservable
 */
class PriceObservable implements \SplSubject
{

    /**
     * @var
     */
    public $price;

    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * Observable constructor.
     */
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }


    /**
     * Notify all observer which want to know change price
     */
    public function notify()
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    /**
     * change price and notify all observer
     */
    public function changePrice(): void
    {
        echo "\nSubject: I'm doing something important.\n";
        $this->price = rand(0, 10);

        echo "Subject: Price has just changed to: {$this->price}\n";
        $this->notify();
    }
}
