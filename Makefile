# Установка зависимостей
install:
	composer install

# Запуск games
brain-games:
	./bin/brain-games
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc
brain-gcd:
	./bin/brain-gcd
brain-progression:
	./bin/brain-progression

# Запуск валидации
validate:
	composer validate

# Запуск линтера
lint:
	composer lint
lint-fix:
	composer lint-fix
