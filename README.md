## Using Command Line
1) composer create-project --prefer-dist laravel/laravel <Project-Name> -vvv
2) To view all Commands: php artisan list
3) Creating Controller: php artisan make:controller <Controller-Name>
4) Resource Controller: php artisan make:controller <Controller-Name> -r   (this will create a function for CRUD)
5) Resource Route but not in CLI, go to Route and type(Route::resource('post', 'PostController'))
6) To view all Routes: php artisan route:list
7) To make model: php artisan make:model <Model-Name>
8) php artisan make:model <Model-Name> -mrc   this will create migration, model and resource controller


## Points
1) Store method in Controller can be access through POST request.
2) When creating the request laravel need @csrf inside the form, so it'll create the token for each request.