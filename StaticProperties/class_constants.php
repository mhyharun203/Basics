<?php
declare(strict_types=1);


class Clock {
    public const DAY_IN_SECONDS = 60 * 60 *24 ;


    public function tomorrow() {
        return time() + self::DAY_IN_SECONDS;
    }
}

echo Clock::DAY_IN_SECONDS;

$clock = new Clock;
echo $clock->tomorrow() . "<br/>";