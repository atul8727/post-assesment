# Laravel Posts API

This is a simple Laravel RESTful API for managing blog posts. It includes user authentication with Sanctum, paginated post listing, and email notifications when a new post is created.

## Features

-   User registration & login (Sanctum)
-   Create & list posts
-   Pagination (10 posts per page)
-   Email notification to admin on new post
-   Seeder for dummy data

## Installation

1. Install dependencies  
   `composer install`

2. Set up `.env` file  
   `cp .env.example .env`  
   Update DB and MAIL settings

3. Generate app key  
   `php artisan key:generate`

4. Run migrations & seed database  
   `php artisan migrate --seed`

5. Serve the app  
   `php artisan serve`

## API Endpoints

### Auth

-   `POST /api/register` – Register a user
-   `POST /api/login` – Login and get token
-   `POST /api/logout` – Logout (requires token)

### Posts (requires Bearer token)

-   `GET /api/posts` – Get paginated list (10 per page)
-   `POST /api/posts` – Create a new post

## Seeder

Use this to generate 50 dummy posts:

```bash
php artisan db:seed
```
