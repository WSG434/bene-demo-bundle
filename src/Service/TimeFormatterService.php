<?php
declare(strict_types=1);

namespace Bene\DemoBundle\Service;

final class TimeFormatterService
{
    public function formatSeconds(int $seconds): string
    {
        $days = intdiv($seconds, 86400);
        $seconds %= 86400;

        $hours = intdiv($seconds, 3600);
        $seconds %= 3600;

        $minutes = intdiv($seconds, 60);
        $seconds %= 60;

        return sprintf('%dd %02dh %02dm %02ds', $days, $hours, $minutes, $seconds);
    }
}