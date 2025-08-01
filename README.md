# SBI — Пример REST API для управления продуктами и категориями

**SBI** — это тестовый проект, демонстрирующий реализацию REST API для работы с категориями и продуктами. Поддерживает экспорт продуктов в Excel с использованием библиотеки **Maatwebsite Excel**. Архитектура построена с применением паттернов **Repository** и **Service**.

## 🚀 Возможности

- CRUD для продуктов и категорий
- Связь "категория — продукты"
- Экспорт списка продуктов в Excel
- Чистая архитектура с разделением ответственности

## 🛠️ Стек технологий

- PHP 8.2
- Laravel 12.21
- MySQL
- Maatwebsite Excel
- Паттерны Repository & Service

## ⚙️ Установка и запуск

```bash
git clone https://github.com/ShohijahonAxmetov/sbi.git
cd sbi
composer install
cp .env.example .env
php artisan key:generate
```
## Создание базы данных

Создайте две базы данных (основная БД и БД для тестирования), после выполните команды:
```bash
php artisan migrate --seed
php artisan storage:link
```
Для тестирования измените данные БД в файле phpunit.xml
Для запуска тестов:
```bash
php artisan test
```

Для запуска очередей используйте команду
```bash
php artisan queue:work
```

Для запуска приложения используйте команду:
```bash
php artisan serve
```
Ссылка на документация: [Ссылка](https://www.postman.com/okcteam/workspace/sbi)