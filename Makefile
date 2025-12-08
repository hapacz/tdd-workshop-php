IMAGE_NAME := tdd-workshop-php

.PHONY: build composer-install test shell

build:
	docker build -t $(IMAGE_NAME) .

composer-install:
	docker run --rm \
		-v $(PWD):/app \
		-w /app \
		$(IMAGE_NAME) \
		composer install

test:
	docker run --rm \
		-v $(PWD):/app \
		-w /app \
		$(IMAGE_NAME) \
		./vendor/bin/phpunit

shell:
	docker run --rm -it \
		-v $(PWD):/app \
		-w /app \
		$(IMAGE_NAME) \
		bash
