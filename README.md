# MAMP for PHP7.4

MAMP PHP7.4の環境に近づけたDocker環境です。


## 導入方法

### 構成

- ウエブサーバー: php:7.4.30-apache
- - mcrypt-1.05
- データベース: mariadb:10.5
- データベース管理ツール: phpMyAdmin

Docker ベースになっています。



## 起動方法

docker-composerを使用します。

前のプロジェクトのdockerは必ずダウンしてください。

```sh
$ docker-compose down
```

必要に応じてビルドします。

```sh
$ docker-compose build
```

dockerを起動します。

```sh
$ docker-compose up -d
```



## 初期設定

htdocsにデプロイします。


## 起動方法

`http://localhost:8888` をブラウザから実行してください。

PHP Infoは以下

http://localhost:8888/info.php


## 管理画面ログイン

準備中


## ユーザーページにログイン

準備中


### データベースの利用

1. `http://127.0.0.1:8889` でphpMyAdminを起動

2. ログインします。

   ```sh
   root
   password
   ```

## その他Dockerで困ったら

```
コンテナ一覧
docker ps -a
コンテナ削除
docker rm コンテナ名

イメージ一覧
docker images
イメージ削除
docker rmi イメージ名
一括系
コンテナを全削除する
docker ps -aq | xargs docker rm
イメージを全削除する
docker images -aq | xargs docker rmi
```