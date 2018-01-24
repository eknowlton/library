# Library
Basic library book API.


### API Endpoitns

*List Books*

`GET /api/library/books`

```
[
  {
    'title': 'Sams Teach Yourself SQL',
    'author': 'SAMS',
    'edition': 5
  },
  { 
    'title' => 'Teach Yourself Ruby',
    'author' => 'SAMS',
    'edition' => 1
  }
]
```

*Fetch Book*

`GET /api/library/books/6`

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
