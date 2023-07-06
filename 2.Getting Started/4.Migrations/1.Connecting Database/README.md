# 1.Connecting Database

## project optimize

- When there is any change of env file then run this command

```php
php artisan optimize:clear
```

## the differences between utf8_general_ci and utf8mb4_unicode_ci collations:

|                     | `utf8_general_ci`                                                           | `utf8mb4_unicode_ci`                                                        |
| ------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| Character Set       | UTF-8                                                                       | UTF-8MB4                                                                    |
| Support             | Supports a subset of Unicode characters (up to 3 bytes)                     | Supports the full Unicode character set (up to 4 bytes)                     |
| Sorting             | Performs simple binary sorting                                              | Performs Unicode-aware sorting, considering language conventions            |
| Case Sensitivity    | Case-insensitive comparison                                                 | Case-insensitive comparison                                                 |
| Accented Characters | Treats accented characters as equivalent to their non-accented counterparts | Treats accented characters as distinct from their non-accented counterparts |
| Emoji Support       | Does not support storing and comparing certain emojis                       | Supports storing and comparing emojis                                       |
