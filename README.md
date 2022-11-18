# 初回環境構築方法

## 依存関係のインストール(実行済みの場合は不要)
```
sudo apt update -y
```
```
sudo apt install curl php-cli php-mbstring git unzip
```

<!-- ## composerのインストール
> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

> php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

> curl -sS https://getcomposer.org/installer | php

> sudo mv composer.phar /usr/local/bin/composer

> sudo chmod +x /usr/local/bin/composer

> source ~/.bashrc

> php composer-setup.php

> php -r "unlink('composer-setup.php');" -->

## `.env.example`をコピーして`.env`ファイルを作成する<br>
> cp .env.example .env

## パッケージのインストール
``` 
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs`
```

## sail up
```
vendor/bin/sail up -d
```