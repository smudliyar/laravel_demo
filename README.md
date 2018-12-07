# laravel_demo
laravel demo running app
----------------------------------------------
-----Deployment in the Linux machine ---------
----------------------------------------------


RUN FOLLOWING COMMAND IN LINUX TERMINAL
---------------------------------------
1. git clone https://github.com/smudliyar/laravel_demo.git
2. cd laravel_demo
2. composer update
3. php artisan key:generate
4. php artisan migrate


FOLLOW BELOW STEPS AFTER EXECUTING ABOVE COMMANDS
-------------------------------------------------
5. Update database details in environment file ".env"
6. Try to start the php inbuilt server using below command
   - php artisan serve
7. Try to open below url
   - http://localhost:8000
   - http://localhost:8000/login
8. Register user using below url

