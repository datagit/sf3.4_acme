
A Symfony project created on January 17, 2018, 2:44 pm.

# sf3.4_acme
- (setup 3.4)[http://symfony.com/doc/3.4/setup.html]
- (best practices)[https://symfony.com/doc/3.4/best_practices/index.html]
- (how to master and create new environments)[https://symfony.com/doc/3.4/configuration/environments.html]
- ('%env(DATABASE_HOST)%')[https://symfony.com/doc/3.4/configuration/external_parameters.html]
# Packages
```bash
$ symfony new my_project_name 3.4
$ composer require api-platform/core
$ composer require stof/doctrine-extensions-bundle
$ composer require friendsofsymfony/user-bundle "~2.0"
$ php bin/console |grep enity
$ php bin/console doctrine:generate:entity
$ php bin/console doctrine:schema:update --force
# https://symfony.com/doc/3.4/configuration.html
$ php bin/console config:dump-reference {command}
# php bin/console config:dump-reference twig or fos_user or doctrine
$ composer require "doctrine/doctrine-fixtures-bundle"
# https://api-platform.com/docs/core/fosuser-bundle
# https://api-platform.com/docs/core/nelmio-api-doc
#$ composer require nelmio/api-doc-bundle

#https://symfony.com/doc/current/bundles/EasyAdminBundle/book/installation.html
$ composer require javiereguiluz/easyadmin-bundle
# https://github.com/symfony/demo/blob/master/src/Entity/Post.php
$ sudo -u datdm php bin/console doctrine:schema:update --force
$ php bin/console doctrine:mapping:info
# https://symfony.com/doc/current/bundles/StofDoctrineExtensionsBundle/index.html
# https://github.com/Atlantic18/DoctrineExtensions/tree/v2.4.x/doc
# http://symfony.com/doc/current/bundles/EasyAdminBundle/index.html
# https://knpuniversity.com/screencast/easyadminbundle
# http://docs.ansible.com/ansible/latest/YAMLSyntax.html
# https://stackoverflow.com/questions/16587769/doctrine-array-vs-simple-array-vs-json-array
$ composer require vich/uploader-bundle
# http://symfony.com/doc/current/bundles/EasyAdminBundle/integration/vichuploaderbundle.html
$ composer require egeloen/ckeditor-bundle
# http://symfony.com/doc/current/bundles/EasyAdminBundle/integration/ivoryckeditorbundle.html
$ composer require friendsofphp/php-cs-fixer
# https://github.com/friendsofphp/php-cs-fixer
$ php-cs-fixer fix  --dry-run  --using-cache=no src/AppBundle/Entity/Tag.php
$ php-cs-fixer fix /path/to/code --dry-run --using-cache=no
$ php-cs-fixer fix
$ php ./vendor/bin/simple-phpunit
$ php ./vendor/bin/simple-phpunit tests/AppBundle/Util/CalculatorTest.php
$ php-cs-fixer fix src/AppBundle/Util/Calculator.php --dry-run --using-cache=no
$ composer require --dev easycorp/easy-deploy-bundle
# https://github.com/EasyCorp/easy-deploy-bundle/blob/master/doc/getting-started.md
$ php bin/console deploy staging --dry-run
$ php bin/console rollback staging --dry-run
# https://github.com/ansistrano/deploy
# https://help.github.com/enterprise/2.12/user/articles/checking-for-existing-ssh-keys/
# https://help.github.com/articles/testing-your-ssh-connection/
$ composer require cmen/google-charts-bundle
# https://packagist.org/packages/cmen/google-charts-bundle
```
#Frontend
```
# nodejs, webpack series
# https://webpack.js.org/configuration/
# https://kipalog.com/posts/Webpack-series----gioi-thieu-tu-co-ban-den-cang-co--D--ep1
```