<?php declare(strict_types=1);

namespace Chirper\Chirp;

interface ChirpPersistenceDriver
{
    /**
     * @param Chirp $chirp
     * @return bool
     *
     * @throws PersistenceDriverException
     */
    public function save(Chirp $chirp): bool;
}