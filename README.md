# phpunit vs paratest

## phpunit (Time: 01:20.026)

```
❯ ./vendor/bin/phpunit tests
PHPUnit 9.5.0 by Sebastian Bergmann and contributors.

................                                                  16 / 16 (100%)

Time: 01:20.026, Memory: 6.00 MB

OK (16 tests, 16 assertions)
```

## paratest (Time: 00:20.109)

```
❯ ./vendor/bin/paratest -p8 tests
Running phpunit in 8 processes with /home/tarek/paratest-demo/vendor/phpunit/phpunit/phpunit

................                                                  16 / 16 (100%)

Time: 00:20.109, Memory: 6.00 MB

OK (16 tests, 16 assertions)
```
