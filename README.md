The most important.

url contains : api
f.e.:

http://127.0.0.1:8000/api/articles

curl -X GET localhost:8000/api/articles

'email' => 'admin@test.com',
'password' => 'toptal',

Try o login with curl:

//curl -v -d "vb_login_email=admin@test.com&vb_login_password=toptal&do=login" http://127.0.0.1:8000/login.php

CREATE:
curl -d '{"title":"title2", "body":"bodybody"}' -H "Content-Type: application/json" -X POST http://localhost:8000/api/articles;

DELETE
curl -X DELETE http://localhost:8000/api/articles/52;

READ
curl -X GET http://localhost:8000/api/articles/1;

READ_all
curl -X GET http://localhost:8000/api/articles

UPDATE, PATCH:
curl -X PATCH -d '{"title":"new_title", "body":"new body"}' http://localhost:8000/api/articles/1

LOGIN -> EXPIRED
curl -v -d "email":"admin@test.com", "password":"toptal" -H "Content-Type: application/x-www-form-urlencoded" http://127.0.0.1:8000/login

php artisan ui bootstrap
