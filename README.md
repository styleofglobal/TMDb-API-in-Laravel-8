<p align="center"><a href="#" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## HOWTO, Details are as follows:

1. Open CMD run <code>git clone https://github.com/styleofglobal/StarWarsAPI</code>
2. cd StarWarsAPI
3. Run the command <code>composer install</code>
4. After successful completing the step 3, create a database "starwarsapi" and update mysql connection details in ".env" file.
5. Run the command <code>php artisan migrate:fresh --seed</code> & <code>php artisan serv</code> to run the application as php development server.
6. Login from the web is required to fetch movies data from TMDB, default login details are: email: styleofglobal@gmail.com & password: smallworldfs.
7. Run this command if data is not showing after first login from the web <code>php artisan cache:clear</code>. 

## Test-Driven Development (TDD) approach
Run the command <code>php artisan test</code>
Warning: TTY mode is not supported on Windows platform.

    $ PASS  Tests\Unit\ExampleTest
    $ ✓ basic test
    $ 
    $ PASS  AuthenticationTest
    $ ✓ login screen can be rendered
    $ ✓ users can authenticate using the login screen
    $ ✓ users can not authenticate with invalid password
    $ 
    $ PASS  Tests\Feature\MovieControllerTest
    $ ✓ fetching movie details from t m d b
    $ ✓ listing movies
    $ ✓ create movies
    $ ✓ updating movie
    $ ✓ deleting movie
    $ ✓ fetching movie details
    $ 
    $ PASS  RegistrationTest
    $ ✓ registration screen can be rendered
    $ ✓ new users can register
    $ 
    $ Tests:  12 passed
    $ Time:   7.93s
    $ 

### For URI/API List please check file API Details.xlsx.
### For Postman API export file please check file smallworldfs.postman_collection.json.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

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
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
