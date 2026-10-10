#!/bin/sh

set -eu

if [ -z "${APP_KEY:-}" ]; then
    echo "APP_KEY is required. Generate one with: php artisan key:generate --show" >&2
    exit 1
fi

case "${RUN_MIGRATIONS:-true}" in
    1|true|yes)
        php artisan migrate --force
        ;;
esac

php artisan optimize

exec "$@"
