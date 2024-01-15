# Описание проекта
В этом репозитории находится веб-сайт, разработаный с использованием фреймворка Symfony.

Блог представляет собой платформу набором статьей, отсортированных по дате создания.

Сайт предоставляет возможность создания, редактирования и удаления статей через административную панель. 

Пользователи могут зарегистрироваться, войти в свои учетные записи и создавать новые статьи.

Каждый пользователь может оставлять комментарии к статьям, однако для этого им нужно либо авторизоваться, либо предоставить свой адрес электронной почты для размещиния комментариев. Комментарии от авторизованных пользователей публикуются сразу, в то время как комментарии от других пользователей требуют одобрения администратора.

Пользователи с правами администратора могут удалять и изменять статьи, а также управлять комментариями, пропускать или отвергать их.

Также на сайте доступна система поиска по опубликованным статьям.
# Инструкция для разварачивания проекта
1. Установить среду разработки поддерживающую PHP (PhpStorm, VsCode или др.)

2. Установить PHP и Symfony. Внести их расположение в переменные среды Path.

3. Загрузить код из репозитория в нужную папку.

4. Установить зависимости через Composer (в файле .env, composer.json)

5. Выбрать СУБД и установить базу данных.

6. Настроить подключение с БД (в файле .env, docker-compose.yaml).

7. Провести миграции при помощи команд.

8. Запустить приложение на сервере. 