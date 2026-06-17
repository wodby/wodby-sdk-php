-include .env

OPENAPI_GENERATOR_VER = v7.10.0
OPENAPI_GENERATOR_IMAGE = openapitools/openapi-generator-cli:$(OPENAPI_GENERATOR_VER)
PHP_VER = 7.0-4.4.3
UID ?= $(shell id -u)

default: build

build: clean codegen
	docker run --rm -v "$(PWD)":/var/www/html wodby/php:${PHP_VER} composer install -n --prefer-dist
.PHONY: build

shell:
	docker run -it --rm -v "$(PWD)":/var/www/html wodby/php:${PHP_VER} /bin/bash
.PHONY: shell

test:
	docker run --rm -v "$(PWD)":/var/www/html wodby/php:${PHP_VER} ./vendor/bin/codecept run
.PHONY: test

codegen:
	docker run --rm \
		-v "$(PWD)":/gen \
		-w /gen \
		"$(OPENAPI_GENERATOR_IMAGE)" generate \
			-i ./swagger.json \
			-g php \
			-o ./SwaggerClient-php \
			--invoker-package=Wodby\\Api \
			--api-package=Client \
			--model-package=Model
	sudo chown -R $(UID) ./
	rm -f ./SwaggerClient-php/.php_cs \
		./SwaggerClient-php/.travis.yml \
		./SwaggerClient-php/composer.json \
		./SwaggerClient-php/git_push.sh \
		./SwaggerClient-php/phpunit.xml.dist
.PHONY: codegen

clean:
	rm -rf ./SwaggerClient-php ./.openapi-generator ./codegen.jar
.PHONY: clean
