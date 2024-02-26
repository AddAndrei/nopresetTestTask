<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and
creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in
many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache)
  storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all
modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a
modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video
tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging
into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in
becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in
the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by
the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell
via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## TestTask description

php artisan migrate
php artisan db:seed
php artisan serve

## Auth
из сидов создаст пользователя
user:admin
password:admin

/api/register
keys: {
    name: string|required
    email: string|required
    password: string|required
    password_confirmation: string|required
}
example
response: {
    "id": 9,
    "name": "test",
    "email": "aneiasdasd@yandex.rud44",
    "token": "4|qdUVO88h0AyVCK2dURBQFXFwou7CJwo1dwc0eqjM49418652",
    "heroes": null
}
api/login
keys: {
    email: string|required
    password: string|required
}
example response: {
    "id": 4,
    "name": "admin",
    "email": "admin@admin.com",
    "token": "5|nFi55cMna1o3sNWydPVcokOg32CP4ZUg8FsLdxMk2acea950",
    "heroes": null
}

## Books

api/books [GET]
для получения книг по автору указываем поле author
keys: {
    author: string|nullable 
}

example response: {
{
"data": [
    {
    "id": 32,
    "title": "Miss",
    "description": "Magnam quia qui hic veritatis aut. Quo impedit veritatis dolores voluptas est ducimus. Dolore a incidunt et.",
    "author": {
    "id": 30,
    "name": "Ms. Carli Gerhold I",
    "books": 10
    }
},
{
"id": 37,
"title": "Dr.",
"description": "Nesciunt qui a nam repellendus. Perferendis est et vero maiores facere est. Numquam praesentium voluptatibus odit qui libero veritatis.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
},
{
"id": 41,
"title": "Prof.",
"description": "Corrupti incidunt asperiores non. Natus quae et excepturi corporis et. Iure nihil ut iste sit deleniti. Deserunt quibusdam voluptatem unde non. Molestias cum id officiis quia.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
},
{
"id": 43,
"title": "Mr.",
"description": "Similique nemo eum et consequatur eligendi. Cupiditate beatae autem veniam ut ipsam fuga ad atque.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
},
{
"id": 45,
"title": "Miss",
"description": "Quaerat repellendus odio placeat possimus omnis repellendus consectetur. Facilis ut placeat fugiat inventore excepturi quis. Illum velit ad incidunt voluptatibus.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
},
{
"id": 46,
"title": "Mr.",
"description": "Blanditiis sequi non aperiam rerum. Illum quaerat fugiat recusandae maiores ratione ut modi. Facere ex qui dolore et. Rerum voluptas rerum sed.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
},
{
"id": 47,
"title": "Mrs.",
"description": "Veniam in totam architecto. Recusandae cupiditate aut vero maiores. Maxime officiis id sed distinctio. Quo tenetur nesciunt et aut.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
},
{
"id": 54,
"title": "Prof.",
"description": "Assumenda non ullam quia necessitatibus aut ut perferendis. Vel sit atque eos laudantium totam error nulla officia. Et consequatur odit cumque in.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
},
{
"id": 58,
"title": "Dr.",
"description": "Ut esse ut et omnis eos esse. Quo inventore saepe voluptatem eum et nihil. Et voluptates eveniet quia quis.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
},
{
"id": 60,
"title": "Dr.",
"description": "Qui cumque molestiae asperiores odio. Sit qui quod velit. Placeat placeat quaerat qui itaque. Eligendi harum expedita cumque saepe ut qui praesentium.",
"author": {
"id": 30,
"name": "Ms. Carli Gerhold I",
"books": 10
}
}
]
}
}
}


store
api/books
keys: {
"title":"test",
"description":"test",
"author_id": 25
}
example response: {
"id": 67,
"title": "test",
"description": "test",
"author": {
"id": 26,
"name": "Carli Eichmann",
"books": 7
}

}
