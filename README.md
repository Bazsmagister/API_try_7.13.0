The most important.

url contains : api
f.e.:

http://127.0.0.1:8000/api/articles

curl -X GET localhost:8000/api/articles

'email' => 'admin@test.com',
'password' => 'toptal',

Try o login with curl:

//curl -v -d "vb_login_email=admin@test.com&vb_login_password=toptal&do=login" http://127.0.0.1:8000/login.php

curl -d '{"title":"title2", "body":"bodybody"}' -H "Content-Type: application/json" -X POST http://localhost:8000/api/articles;

curl -X DELETE http://localhost:8000/api/articles/52;
