---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](https://farmer-to-consumer.test/docs/collection.json)

<!-- END_INFO -->

#Auth


APIs Auth management
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register User

> Example request:

```bash
curl -X POST \
    "https://farmer-to-consumer.test/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"John Doe","email":"johndoe@farmer-to-consumer.test","password":"johndoe2020","password_confirmation":"johndoe2020"}'

```

```javascript
const url = new URL(
    "https://farmer-to-consumer.test/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "John Doe",
    "email": "johndoe@farmer-to-consumer.test",
    "password": "johndoe2020",
    "password_confirmation": "johndoe2020"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "user": {
        "name": "John Doe",
        "email": "johndoe@farmer-to-consumer.test",
        "email_verified_at": null,
        "created_at": "2020-08-25T11:53:39.000000Z",
        "updated_at": "2020-08-25T11:53:39.000000Z"
    },
    "token": "1|8Fh0rH9Z7ZFTH7q883gnhy7zspRY7LtBLmY5qWt6NLZYKfpCIkTt9zgkuKRWqhZ0MFL3ulcj1x3oE81D"
}
```

### HTTP Request
`POST api/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | full name.
        `email` | string |  required  | email address.
        `password` | string |  required  | user password.
        `password_confirmation` | string |  required  | password confirmation.
    
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login User

> Example request:

```bash
curl -X POST \
    "https://farmer-to-consumer.test/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"johndoe@farmer-to-consumer.test","password":"johndoe2020"}'

```

```javascript
const url = new URL(
    "https://farmer-to-consumer.test/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "johndoe@farmer-to-consumer.test",
    "password": "johndoe2020"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "user": {
        "name": "John Doe",
        "email": "johndoe@farmer-to-consumer.test",
        "email_verified_at": null,
        "created_at": "2020-08-25T11:53:39.000000Z",
        "updated_at": "2020-08-25T11:53:39.000000Z"
    },
    "token": "1|8Fh0rH9Z7ZFTH7q883gnhy7zspRY7LtBLmY5qWt6NLZYKfpCIkTt9zgkuKRWqhZ0MFL3ulcj1x3oE81D"
}
```

### HTTP Request
`POST api/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | email address.
        `password` | string |  required  | user password.
    
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## Logout User

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "https://farmer-to-consumer.test/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://farmer-to-consumer.test/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
"Token deleted"
```

### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->


