<!-- @format -->

# pemrograman-web-1

Repository ini di peruntukan untuk matakuliah pemrograman web 1 dan latihan mandiri laravel di rumah.

## Setup Project

- Cloning project

```bash
git clone https://github.com/ariefdrm/pemrograman-web-1.git
```

- Move to directory laravel

```bash
cd pemrograman-web-1/MasterProject/
```

- Installing dependencies

```bash
composer install
npm install
```

- Create a copy of your .env file

```bash
cp .env.example .env
```

- Generate your encryption key

```bash
php artisan key:generate
```

- Build dependencies for bootstrap

```bash
npm run build
```

- Running prject

```bash
php artisan serve
```
