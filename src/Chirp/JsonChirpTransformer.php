<?php declare(strict_types=1);

namespace Chirper\Chirp;

interface JsonChirpTransformer
{
    public function toChirp(string $json): Chirp;

    public function toJson(Chirp $chirp): string;
}