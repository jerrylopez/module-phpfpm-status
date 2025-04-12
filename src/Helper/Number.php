<?php

declare(strict_types=1);

namespace JerryLopez\PhpfpmStatus\Helper;

use NumberFormatter;

class Number
{
    public function __construct(
        private readonly NumberFormatter $numberFormatter,
    ) {
    }

    public function filesize(int $bytes): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

        for ($i = 0; ($bytes / 1024) > 0.9 && ($i < count($units) - 1); $i++) {
            $bytes /= 1024;
        }

        return sprintf('%s %s', $bytes, $units[$i]);
    }

    public function percentage(int|float $number, int $precision = 0, ?int $maxPrecision = null): false|string
    {
        $formatter = $this->numberFormatter->create('en', NumberFormatter::PERCENT);

        if (! is_null($maxPrecision)) {
            $formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, $maxPrecision);
        } else {
            $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
        }

        return $formatter->format($number / 100);
    }
}
