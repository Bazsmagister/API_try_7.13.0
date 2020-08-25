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

---

API idea from SO
api caller controller :

class DataController extends Controller
{
public function postRequest()
{
$client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://localhost:8001/api/store', [
            'form_params' => [
                'name' => 'krunal',
            ]
        ]);
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
}

    public function getRequest()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:8001/api/index');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        exit;
    }

}

api caller route :

Route::get('/', function () {
return view('welcome');
});

Route::get('post','DataController@postRequest');
Route::get('get','DataController@getRequest');

api provider controller :

class GuzzlePostController extends Controller
{
public function store(Request $request)
    {
        $data = new GuzzlePost();
$data->name=$request->get('name');
\$data->save();
return response()->json('Successfully added');

    }

    public function index()
    {
        $data = GuzzlePost::all();
        return response()->json($data);
    }

}

api provider route :

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('store', 'GuzzlePostController@store');
Route::get('index', 'GuzzlePostController@index');

the api caller served on port 8000, the provider served on port 8001

---
