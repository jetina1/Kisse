 Kise Expense application

## Screenshots

![preview img](/preview.png)

![preview img](/preview2.png)

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
-   password = user123
