<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use \App\Book;

class BookApiTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Can list books.
     * 
     * @return void
     */
    public function testCanListBooks()
    {
        $response = $this->get('/api/library/books');

        $response
            ->assertStatus(200);
    }

    /**
     * Can fetch book.
     *
     * @return void
     */
    public function testCanFetchBook() 
    {
        $book = factory(Book::class)->create();

        $response = $this->get('/api/library/books/' . $book->id );

        $response
            ->assertStatus(200)
            ->assertJson($book->toArray());

    }

    /**
     * A valid book is created.
     *
     * @return void
     */
    public function testValidBookIsCreated()
    {
        $bookData = [
            'title' => 'Sams Teach Yourself SQL',
            'author' => 'SAMS',
            'edition' => 5
        ];

        $response = $this->json('POST', '/api/library/books', $bookData);

        $response
            ->assertStatus(200)
            ->assertJson($bookData);
    }

    /**
     * A invalid book is not created.
     *
     * @return void
     */
    public function testInvalidBookIsNotCreated() 
    {
        $bookData = [
            'title' => 'Invalid Book Data'
        ];

        $response = $this->json('POST', '/api/library/books', $bookData);

        $response
            ->assertStatus(422)
            ->assertJson([
                'message' => 'The given data was invalid.',
                'errors' => [
                    'author' => [
                        'The author field is required.'
                    ]
                ]
            ]);

    }

    /**
     * A valid request updates a book.
     *
     * @return void
     */
    public function testValidBookIsUpdated()
    {
        $book = factory(Book::class)->create();

        $newBookData = [
            'title' => 'Sams Teach Yourself SQL',
            'author' => 'SAMS',
            'edition' => 6
        ];

        $response = $this->json('POST', '/api/library/books/' . $book->id, $newBookData);

        $response
            ->assertStatus(200)
            ->assertJson($newBookData);

    }

    /**
     * A invalid book is not updated.
     *
     * @return void
     */
    public function testInvalidBookIsNotUpdated() 
    {
        $book = factory(Book::class)->create();

        $newBookData = [
            'title' => 1
        ];

        $response = $this->json('POST', '/api/library/books/' . $book->id, $newBookData);

        $response
            ->assertStatus(422)
            ->assertJson([
                'errors' => [
                    'title' => [
                        'The title must be a string.'
                    ],
                ]
            ]);

    }

    public function testCanDeleteBook()
    {
        $book = factory(Book::class)->create();

        $response = $this->delete('/api/library/books/' . $book->id);

        $response
            ->assertStatus(200);
    }
}
