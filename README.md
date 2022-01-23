[//]: <> (// This is confusing, I KNOW, so let me explain it to you)
# Laravel CRUD application
A web-based system where a user for capture invoices
* production code test
* input validation/error handling is important
* Part of Bigger System
* Scalable
* not need to implement authentication 


# Instructions
###### Incase it is needed :grin:
:checkered_flag: ```[MAC OS BIG SUR TERMINAL ]```  
Create Database "first" via Mysql Workbench -- 
Called - laraUID6 -- change details in .env

- **root@comp %** ```composer install```
- **root@comp %** ```php artisan migrate --seed```
- **root@comp %** ```php artisan ui bootstrap --auth``` :grin:
- **root@comp %** ```php artisan serve```

[//]: <> (// put here so I dont have to redo it again for another test => copy paste :-/ ...)
[//]: <> (// composer require laravel/ui)
[//]: <> (// php artisan key:generate`)
[//]: <> (// php artisan ui bootstrap`)
[//]: <> (// php artisan ui vue --auth`)
[//]: <> (// php artisan session:table)
[//]: <> (// npm install)
[//]: <> (// npm run dev)

###### SHOW ME START DASHBOARD OF INVOICES
:checkered_flag: ```[BROWSER URL - CHANGE PORT]``` 
- <a href="http://127.0.0.1:8000/list">http://127.0.0.1:8000/list</a>



# ScreenShots

###### ADMIN LOGIN
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/2022/Propay/images/showtable.png" alt="create contact" width="300" height="150">

###### ADMIN SHOWTABLE
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/2022/Propay/images/admin.png" alt="create contact" width="300" height="150">

###### CONTACT FORM
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/2022/Propay/images/contactform.png" alt="create contact" width="300" height="150">

###### MAILTRAP
<img src="https://raw.githubusercontent.com/DeanDevel/DevTests/main/2022/Propay/images/mailtrap.png" alt="create contact" width="300" height="150">


# Test Instructions
Hi there, thanks for taking the time to show us your skills! By stepping up to this challenge, you give us a chance to see if and how you would fit in with the team in terms of technical capability.

We leave a lot of things in this challenge up to you and that is by design; if it's not specifically mentioned, feel free to pick and choose and inform us about those choices.

We prefer that the assignment is written in PHP, however you're free to do it in your language of choice - it’s the way you tackle this challenge that interests us!
Don't hesitate to ask if anything is unclear.
Good luck!

Our focus points
You have all the freedom in the world to solve the challenge as you see fit. We'll not judge you on the choice of framework, database, etc but we will be on the lookout for a few things:

Your approach to development problems in general
Your proficiency in understanding and writing queries
Your ability to create effective solutions
Just working code is not enough, we highly value good, clean code. Your code should be secure and well structured, it should be easy to understand and capable of scaling.

Time constraints
Every one of us has gone through the phase you're in now: doing interviews while working a full work week at your current job. And we bet every company is asking you to complete their own challenge, just like we do, within a certain time frame. It's a busy time for you and we realise that.
The thing is: we can't distinguish between excellent candidates that haven't put in the time and the ones that did put in a lot more time but wouldn't have the technical skills yet to feel comfortably challenged in our teams.
If you feel like you don't have enough time to show off your skills, simply ask us for more. It's ok, really! But we do like to know that up front, not on the day you agreed to turn it in; actually just as soon as you realise that you need just a day or two more.

The Challenge
We’d like you to build a UI and API that allows a user to capture invoices as shown in the image below, and store it in a database. You can assume that your solution is part of a bigger system, so you do not need to implement authentication or additional list/view screens. Keep in mind how invoices would be handled in a real system - some elements would be pre-configured or selectable, rather than being captured from scratch.
You can use any framework and database you like, and you can pre-populate the database however you wish. Our only requirement is that you use plain SQL queries, and not an ORM. We will review and test your solution as we would production code, meaning input validation/error handling is important. 