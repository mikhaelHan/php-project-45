# Установка зависимостей
install:
	composer install

# Запуск brain-games
brain-games:
	./bin/brain-games

# Запуск brain-even
brain-even:
	./bin/brain-even

# Запуск валидации
validate:
	composer validate

# Запуск линтера
lint:
	composer lint
lint-fix:
	composer lint-fix