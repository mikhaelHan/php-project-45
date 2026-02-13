# Установка зависимостей
install:
	composer install

# Запуск brain-games
brain-games:
	./bin/brain-games

# Запуск валидации
validate:
	composer validate