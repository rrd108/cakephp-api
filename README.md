# CakePHP REST API

## Endpoints

| URL               | HTTP method | Auth | JSON Response     |
| ----------------- | ----------- | ---- | ----------------- |
| /users/login.json | POST        |      | user's token      |
| /users.json       | GET         | Y    | all users         |
| /products.json    | GET         |      | all products      |
| /products.json    | POST        | Y    | new product added |
| /products.json    | PATCH       | Y    | edited product    |
| /products.json    | DELETE      | Y    | true / false      |
