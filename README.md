<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 概要

## 環境構築

1.

```
git clone https://github.com/akira-0924/sample-app-backend.git
```

2.

```
composer update
```

3.  `.env.example`をコピーして`.env`を作成

ローカルの DB を作成する（変更したい場合は環境と config ファイルを編集してください）
DB 名：cleanachitecture
ポート：8889
ユーザー名：user1
パスワード：password123

4.

```
php artisan migrate
```

5.

```
php artisan serve
```
