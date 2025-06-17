# Тестовое задание: API `/api/prices`

Простое API на Laravel 10 для отображения списка товаров с конвертацией цен.

### Эндпоинт

```
GET /api/prices
```

Параметры:
- `currency` (необязательный): `RUB`, `USD`, `EUR`

Примеры:
- `/api/prices` — список в рублях
- `/api/prices?currency=USD` — в долларах
- `/api/prices?currency=EUR` — в евро

### Пример ответа

```json
{
  "data": [
    {
      "id": 1,
      "title": "Товар 1",
      "price": "1 200 ₽"
    },
    ...
  ]
}
```

### Использовано

- Laravel 10
- Laravel Resource
- SQLite (встроенный файл)
