<?php declare(strict_types=1);

namespace Chirper\Chirp;

interface ChirpPersistenceDriver
{
    /**  */
    public function save(Chirp $chirp): bool;
}