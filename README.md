# 初回環境構築方法

## phpの依存関係のインストール(実行済みの場合は不要)
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
```
cp .env.example .env
```

## パッケージのインストール
``` shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

## エイリアスの設定
エイリアス設定ファイルを開く
```
vim ~/.bashrc
```
Iキーを押して適当な場所に
```
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```
と打ち込む。その後、`esc` -> `:wq` -> エンターキーで保存して終了

`~/.bashrc`に記載したコマンドを反映
```
source ~/.bashrc
```

## 環境の操作
- 起動
```
sail up -d
```
