<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use hasFactory;

    private string $title;

    private string $author;

    private string $genre;

    private int $numberOfPages;

    private int $yearPublished;

    /**
     * @param string $title
     * @param string $author
     * @param string $genre
     * @param int $numberOfPages
     * @param int $yearPublished
     */
    public function __construct(string $title, string $author, string $genre, int $numberOfPages, int $yearPublished)
    {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->numberOfPages = $numberOfPages;
        $this->yearPublished = $yearPublished;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return int
     */
    public function getNumberOfPages(): int
    {
        return $this->numberOfPages;
    }

    /**
     * @param int $numberOfPages
     */
    public function setNumberOfPages(int $numberOfPages): void
    {
        $this->numberOfPages = $numberOfPages;
    }

    /**
     * @return int
     */
    public function getYearPublished(): int
    {
        return $this->yearPublished;
    }

    /**
     * @param int $yearPublished
     */
    public function setYearPublished(int $yearPublished): void
    {
        $this->yearPublished = $yearPublished;
    }
}
