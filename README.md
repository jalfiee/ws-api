# lando

- `cp .env.example.ws-api .env`

- set .env to test private channels

```yml
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
```

- `lando start`

- `lando composer install`

- `lando php artisan key:generate`

- `lando php artisan migrate:refresh --seed`
