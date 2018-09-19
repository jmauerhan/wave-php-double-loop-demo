<?php declare(strict_types=1);

namespace Chirper\Chirp;

class Chirp
{
    private $id;
    private $text;
    private $author;
    private $createdAt;

    public function __construct(string $id, string $text, string $author, \DateTime $createdAt)
    {
        $this->id        = $id;
        $this->text      = $text;
        $this->author    = $author;
        $this->createdAt = $createdAt;
    }
}