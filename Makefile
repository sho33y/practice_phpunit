.PHONY: test
PHPUNIT=./vendor/phpunit/phpunit/phpunit

test:
	$(PHPUNIT) --configuration phpunit.xml test/
