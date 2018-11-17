#References Words
* CRUD: Create, Read, Update, Delete.
* Resource: All code who setted code
* Eloquent_ORM: A way to interactive with DB by Models. (Query Builder, Eloquent_ORM)

#Errors 
* NotFoundHttpException in RouteCollection.php line *** : Not set routes/wrong set routes.
* ReflectionException (with Function () does not exist): When we set name routes, we don't make function in array.
* ErrorException A non-numeric value encountered: When we pass wrong data from parameter of own function.
* SQLSTATE[HY000] [1045] Access denied for user 'homestead'@'localhost' (using password: YES): When we set value .env file while server don't know that. So start again server.

#Notes
* When routes views which has parameters, we make function, make name parameters (not same parameters which set routes)
* When Routing controllers, pass controller then access method of controller using '@'. 
    Example: Route::get('/posts/create', 'PostsController@create');
* Flow pass data to view: Get Data from routes (vanilla variable) -- Create parameter in method of controller to receive data from variable of routes ($variablesR) -- create key ($variablesV) to save value of variable -- when we want show data in view, usding {{ $key || $variablesV }}
* When we use compact() to pass value to view. Notes: set name value same to name parameter of method.
* More details for migrations: https://laravel.com/docs/5.2/migrations
* Display original Variables: We use var_dump();
* Use Models, we import model by 'use App\NameModel'
#Command Laravel Tutorials
* Run server: php artisan serve
* Show list routes: php artisan route:list
* Create blank controller: php artisan make:controller nameController
* Create resource controller: php artisan make:controller --resource nameController

#Link Resources
* Link Eloquent_ORM: https://viblo.asia/p/so-sanh-giua-eloquent-orm-va-querybuilder-trong-laravel-maGK7MG9lj2
* Link Usage Eloquent_ORM: https://viblo.asia/p/migrations-trong-laravel-53-bJzKmMNPK9N

#List of Errors Laravel Sky Albert Channel
* Section 07 | Video 01 | Thực hiện Insert Data Query
* Section 07 | Video 02 | Thực hiện Read Data Query
* Section 07 | Video 03 | Thực hiện Update Data Query
* Section 07 | Video 04 | Thực hiện Delete Data Query
* ===================================================
* Section 08 | Video 01 | Tìm hiểu về Việc đọc dữ liệu
* Section 08 | Video 02 | Đọc dữ liệu _Finding với Contraint