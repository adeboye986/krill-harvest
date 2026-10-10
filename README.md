# Krill Harvest

Laravel 13 website for Krill Harvest.

## Local development

Requirements: PHP 8.5, Composer, and Node.js 24.

```bash
composer run setup
composer run dev
```

## EasyPanel deployment

The repository includes a production Docker image built with PHP 8.5,
FrankenPHP, Composer, and Vite. It runs as a non-root user, listens on port
`8080`, writes logs to standard error, runs pending migrations at startup, and
uses Laravel's `/up` health endpoint.

1. Create an EasyPanel **App** service.
2. Select the GitHub/Git repository and the `main` branch. Use `/` as the build
   path.
3. Select **Dockerfile** as the builder and set the file path to `Dockerfile`.
4. Add the environment variables below. Keep secrets in EasyPanel; do not
   commit a populated `.env` file.
5. Add the automatic domain with internal protocol **HTTP** and target port
   `8080`.
6. Deploy and verify `https://your-domain.example/up` returns a successful
   response.

Generate `APP_KEY` on a trusted machine with `php artisan key:generate --show`.
Use the internal hostname and credentials shown by the EasyPanel database
service for the `DB_*` values.

```dotenv
APP_NAME="Krill Harvest"
APP_ENV=production
APP_KEY=base64:replace-with-a-generated-key
APP_DEBUG=false
APP_URL=https://$(PRIMARY_DOMAIN)

LOG_CHANNEL=stderr
LOG_LEVEL=info

DB_CONNECTION=pgsql
DB_HOST=replace-with-easypanel-database-host
DB_PORT=5432
DB_DATABASE=krill_harvest
DB_USERNAME=replace-with-database-user
DB_PASSWORD=replace-with-database-password

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=true
SESSION_SECURE_COOKIE=true
CACHE_STORE=database
QUEUE_CONNECTION=sync

MAIL_MAILER=smtp
MAIL_SCHEME=tls
MAIL_HOST=replace-with-smtp-host
MAIL_PORT=587
MAIL_USERNAME=replace-with-smtp-user
MAIL_PASSWORD=replace-with-smtp-password
MAIL_FROM_ADDRESS=hello@example.com
MAIL_FROM_NAME="${APP_NAME}"
CONTACT_MAIL_TO=replace-with-recipient-address

RUN_MIGRATIONS=true
```

Set `RUN_MIGRATIONS=false` only when migrations are managed separately. For a
durable deployment, use an EasyPanel PostgreSQL/MySQL service instead of the
image's fallback SQLite database. If the app later stores user uploads on the
local disk, attach persistent storage at `/app/storage/app/public` or switch
`FILESYSTEM_DISK` to object storage.
