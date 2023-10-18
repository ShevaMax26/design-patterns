<?php

namespace App\DesignPatterns\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplSubject
{
    private SplObjectStorage $observers;
    private string $email;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function changeEmail(string $email): void
    {
        $this->email = $email;
        $this->notify();
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function notify(): void
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
