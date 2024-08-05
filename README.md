# my-train-depot
## 概要
Nゲージ,プラレールなどの在庫管理ツール

## 環境構築
開発環境はlaravel sailで構築
```
$ gh repo clone oratake/my-train-depot
$ cd my-train-depot
# 使い捨てdockerコンテナを使ってcomposer install
# 参考: https://readouble.com/laravel/11.x/ja/sail.html#installing-composer-dependencies-for-existing-projects
$ docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
$ cp .env.example .env
$ ./vendor/bin/sail up
$ ./vendor/bin/sail artisan key:generate
$ ./vendor/bin/sail npm i
$ ./vendor/bin/sail npm run dev
```

