<?php declare(strict_types=1);

/*
 * This file is part of the Ambientia QueueCommand package.
 */

namespace Ambientia\QueueCommand;

/**
 * @author mati.andreas@ambientia.ee
 */
class TimeProvider
{

    public function time(): int
    {
        return time();
    }
}