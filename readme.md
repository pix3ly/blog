# Blog

Lorem ipsum, what can I say; it's a blog.

## Requirements

- MySQL
- PHP
- Composer

## Getting it to run

**1.** Clone

```
git clone https://github.com/pix3ly/blog
```

**2.** Get dependencies

```
cd blog && composer install
```

**3.** Configure

```
cp .env.example .env && vim .env
```

**4.** Migrate

```
php artisan migrate
```

**5.** Serve

```
php artisan serve
```
