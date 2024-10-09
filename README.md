Kise Expense application

## Screenshots

register
![preview img](/register.jpg)

login
![preview img](/login.jpg)

dashboard
![preview img](/dashboard.jpg)

add income
![preview img](/addIncome.jpg)

profile view and edit
![preview img](/updateProfile.jpg)

## Run Locally

Clone the project

```bash
  git clone https://github.com/jetina1/Kisse.git project-name
```

Go to the project directory

```bash
  cd project-name
```

-   Copy .env.example file to .env and edit database credentials there

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan migrate:fresh --seed
```

#### Login

as an admin

-   email = admin@gmail.com
-   password = admin123
    as an user
-   email = user@gmail.com
-   password = user1234
