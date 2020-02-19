<?php

class PriceObserver implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->price < 3) {
            echo "PriceObserver: Reacted to the event.\n";
        }
    }
}
