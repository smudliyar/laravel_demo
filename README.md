# laravel_demo
laravel demo running app
----------------------------------------------
-----Deployment in the Linux machine ---------
----------------------------------------------


RUN FOLLOWING COMMAND IN LINUX TERMINAL
---------------------------------------
1. git clone https://github.com/smudliyar/laravel_demo.git
2. cd laravel_demo
3. composer update
4. php artisan key:generate


FOLLOW BELOW STEPS AFTER EXECUTING ABOVE COMMANDS
-------------------------------------------------
5. Update database details in environment file ".env"
6. Run following command to migrate database
   - php artisan migrate 
7. Try to start the php inbuilt server using below command
   - php artisan serve
8. Try to open below url
   - http://localhost:8000
   - http://localhost:8000/login
9. Register user using below url
   - http://localhost:8000/register
   
10 After registration, login using below url

   - http://localhost:8000/login
   
11 Once loggedin success, redirected to home/dashboard page


