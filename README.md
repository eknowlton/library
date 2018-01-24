# Library
Basic library book API.


### API Endpoitns

*List Books*

`GET /api/library/books`

```
[
    {
        "id": 6,
        "created_at": "2018-01-24 22:53:45",
        "updated_at": "2018-01-24 22:53:45",
        "title": "Teach Yourself Ruby Now Again",
        "author": "SAMS",
        "edition": "1st",
        "editions": [
            {
                "id": 2,
                "book_id": 6,
                "title": "Learn Ruby in 5 Days",
                "author": "SAMS",
                "edition": "2nd",
                "created_at": "2018-01-24 22:53:45",
                "updated_at": "2018-01-24 22:53:45"
            },
            {
                "id": 3,
                "book_id": 6,
                "title": "Teach Yourself Ruby Now",
                "author": "SAMS",
                "edition": "1st",
                "created_at": "2018-01-24 22:58:07",
                "updated_at": "2018-01-24 22:58:07"
            },
            {
                "id": 4,
                "book_id": 6,
                "title": "Teach Yourself Ruby Now",
                "author": "SAMS",
                "edition": "1st",
                "created_at": "2018-01-24 22:58:17",
                "updated_at": "2018-01-24 22:58:17"
            },
            {
                "id": 5,
                "book_id": 6,
                "title": "Teach Yourself Ruby Now Again",
                "author": "SAMS",
                "edition": "1st",
                "created_at": "2018-01-24 22:58:30",
                "updated_at": "2018-01-24 22:58:30"
            }
        ]
    }
]
```

*Fetch Book*

`GET /api/library/books/6`

```
{
    "id": 6,
    "created_at": "2018-01-24 22:53:45",
    "updated_at": "2018-01-24 22:53:45",
    "title": "Teach Yourself Ruby Now Again",
    "author": "SAMS",
    "edition": "1st",
    "editions": [
        {
            "id": 2,
            "book_id": 6,
            "title": "Learn Ruby in 5 Days",
            "author": "SAMS",
            "edition": "2nd",
            "created_at": "2018-01-24 22:53:45",
            "updated_at": "2018-01-24 22:53:45"
        },
        {
            "id": 3,
            "book_id": 6,
            "title": "Teach Yourself Ruby Now",
            "author": "SAMS",
            "edition": "1st",
            "created_at": "2018-01-24 22:58:07",
            "updated_at": "2018-01-24 22:58:07"
        },
        {
            "id": 4,
            "book_id": 6,
            "title": "Teach Yourself Ruby Now",
            "author": "SAMS",
            "edition": "1st",
            "created_at": "2018-01-24 22:58:17",
            "updated_at": "2018-01-24 22:58:17"
        },
        {
            "id": 5,
            "book_id": 6,
            "title": "Teach Yourself Ruby Now Again",
            "author": "SAMS",
            "edition": "1st",
            "created_at": "2018-01-24 22:58:30",
            "updated_at": "2018-01-24 22:58:30"
        }
    ]
}
```

*Create Book*

`POST /api/library/books`

```
{
    "title": "Learn Ruby in 5 Days",
    "author": "SAMS",
    "edition": "2",
}
```

```
{
    "id": 6,
    "title": "Learn Ruby in 5 Days",
    "author": "SAMS",
    "edition": "2",
    "created_at": "2018-01-24 22:04:08",
    "updated_at": "2018-01-24 22:04:08"
}
```

*Update Book ( New Edition )*

`POST /api/library/books/6`

```
{
  "title": "Teach Yourself Ruby Now Again",
  "author": "SAMS"
```

```
{
    "id": 6,
    "created_at": "2018-01-24 22:53:45",
    "updated_at": "2018-01-24 22:53:45",
    "title": "Teach Yourself Ruby Now Again",
    "author": "SAMS",
    "edition": "1st",
    "editions": [
        {
            "id": 2,
            "book_id": 6,
            "title": "Learn Ruby in 5 Days",
            "author": "SAMS",
            "edition": "2nd",
            "created_at": "2018-01-24 22:53:45",
            "updated_at": "2018-01-24 22:53:45"
        },
        {
            "id": 3,
            "book_id": 6,
            "title": "Teach Yourself Ruby Now",
            "author": "SAMS",
            "edition": "1st",
            "created_at": "2018-01-24 22:58:07",
            "updated_at": "2018-01-24 22:58:07"
        },
        {
            "id": 4,
            "book_id": 6,
            "title": "Teach Yourself Ruby Now",
            "author": "SAMS",
            "edition": "1st",
            "created_at": "2018-01-24 22:58:17",
            "updated_at": "2018-01-24 22:58:17"
        },
        {
            "id": 5,
            "book_id": 6,
            "title": "Teach Yourself Ruby Now Again",
            "author": "SAMS",
            "edition": "1st",
            "created_at": "2018-01-24 22:58:30",
            "updated_at": "2018-01-24 22:58:30"
        }
    ]
}```
*Delete Book*

`DELETE /api/library/books/6`
