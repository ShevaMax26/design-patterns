<?php

namespace App\DesignPatterns\Behavioral\ChainResponsibility;

class Lights extends HomeChecker
{
    /**
     * @throws \Exception
     */
    public function check(HomeStatus $home)
    {
        if (!$home->light) {
            throw new \Exception('The lights are still on! Abort it!');
        }

        $this->next($home);
    }
}
