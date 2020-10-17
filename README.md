# example-php-sdk-password-generator
Генератор паролей написанный для приложения Chatium и использующий PHP SDK.

# Установка

1. Склонируйте репозиторий
    ```
    git clone git@github.com:chatium/example-php-sdk-password-generator.git
    ```

2. Установите зависимости
    ```
    cd example-php-sdk-password-generator
    composer install
    ```

3. Локальный запуск
    ```
    php -S 127.0.0.1:8000 -t src
    ```
4. Чтобы проверить работоспособность своего приложения, установите туннель для проброски локального окружения в интернет.
    ```
    # Придумайте произвольный токен, например (dn83sik2), выполнив команду
    openssl rand -hex 5 
   
    # Установите туннель
    npm install -g @chatium/dev-tunnel-client
    
    # Запустите туннель с полученным токеном
    dev-tunnel --domain=dn83sik2 8000
    ``` 
5. Откройте страницу приложения с указанием токена туннеля
    ```
    https://chatium.com/app/testium.dn83sik2/
    ```
   
