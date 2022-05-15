# ローカル
### vue最新化
npm run dev

### サーバー起動
php artisan serve

# heroku
### heroku cli必要
brew tap heroku/brew && brew install heroku

### 確認
heroku --version

### push
git push heroku main

### config 確認
heroku config

### herokuの立ち上げる
heroku open

# メモ
・herokuに上げるときは階層に注意！
ソースは直下に置くこと。そうしないと、herokuのビルドパッケージと合わない
(NG)
ABC
Labc_app
    L app
    L boot
(OK)
ABC
L app
L boot

・package.jsoに追記必要（npm installなど）

scriptsの最後に
"heroku-postbuild": "npm run prod"

### 参考
https://zenn.dev/shimotaroo/articles/8896edaf30f57d
https://mrkmyki.com/laravel%E3%82%92heroku%E3%81%AB%E3%83%87%E3%83%97%E3%83%AD%E3%82%A4%E3%81%99%E3%82%8B%E3%80%82#toc7
