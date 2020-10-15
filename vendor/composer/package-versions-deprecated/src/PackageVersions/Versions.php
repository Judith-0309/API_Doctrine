<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.11.1@6e6903cd5e3a5be60a79439e3ee8fe126f78fe86',
  'doctrine/doctrine-bundle' => '1.10.3@907dafe1ba73c4c3b0f0ae8cfc1b9958c002e58c',
  'doctrine/doctrine-cache-bundle' => '1.3.2@9baecbd6bfdd1123b0cf8c1b88fee0170a84ddd1',
  'doctrine/doctrine-migrations-bundle' => 'v1.2.1@6276139e0b913a4e5120fc36bb5b0eae8ac549bc',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => 'v1.5.0@c81147c0f2938a6566594455367e095150547f72',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'symfony/asset' => 'v3.4.45@86dc86fe186790d2e8d5a87cd50066d387dcc04c',
  'symfony/cache' => 'v3.4.45@01f4cc9de5aa1a49cce75280680c8a78907bb55e',
  'symfony/class-loader' => 'v3.4.45@5e119b7df5e4db6fcd0570ea20f28e2bc57c3da2',
  'symfony/config' => 'v3.2.14@e5533fcc0b3dd377626153b2852707878f363728',
  'symfony/console' => 'v3.2.14@eced439413608647aeff243038a33ea246b2b33a',
  'symfony/debug' => 'v3.4.45@9109e4414e684d0b75276ae203883467476d25d0',
  'symfony/dependency-injection' => 'v3.1.10@f4a04433f82eb8ca58555d1b6375293fc7c90d18',
  'symfony/doctrine-bridge' => 'v3.2.14@222b98544413272cb366b1b3c638c43f096ffca7',
  'symfony/event-dispatcher' => 'v3.2.14@b8de6ee252af19330dd72ad5fc0dd4658a1d6325',
  'symfony/filesystem' => 'v3.4.45@495646f13d051cc5a8f77a68b68313dc854080aa',
  'symfony/finder' => 'v3.4.45@52140652ed31cee3dabd0c481b5577201fa769b4',
  'symfony/framework-bundle' => 'v3.1.10@38cba0b700ffaa3ca7b156b11aebf8d560c6ef83',
  'symfony/http-foundation' => 'v3.4.45@2264e389995997d2786c1eeb0a45db8e77dac132',
  'symfony/http-kernel' => 'v3.2.14@18ec42e19ec676d7da5ddff13f1eed68d88fb460',
  'symfony/orm-pack' => 'v2.0.0@46aa731f213140388ee11ff3d2b6776a3b4a0d90',
  'symfony/polyfill-apcu' => 'v1.18.1@f1d94a98e364f4b84252331a40cb7987b847e241',
  'symfony/polyfill-ctype' => 'v1.18.1@1c302646f6efc070cd46856e600e5e0684d6b454',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php56' => 'v1.18.1@13df84e91cd168f247c2f2ec82cc0fa24901c011',
  'symfony/polyfill-php70' => 'v1.18.1@0dd93f2c578bdc9c72697eaa5f1dd25644e618d3',
  'symfony/polyfill-util' => 'v1.18.1@46b910c71e9828f8ec2aa7a0314de1130d9b295a',
  'symfony/routing' => 'v3.1.10@f25581d4eb0a82962c291917f826166f0dcd8a9a',
  'symfony/security-core' => 'v3.4.45@8347ac1f5ce519d8df4d40eabffc2d73148c6c78',
  'symfony/security-csrf' => 'v3.4.45@5ab36a8f0c7d69a39a19d9b3aabca1c3426701da',
  'symfony/stopwatch' => 'v3.4.45@a7a98f40dcc382a332c3729a6d04b298ffbb8f1f',
  'symfony/templating' => 'v3.4.45@13f009936b5fa42468ea112ae402cbe4fba9bf30',
  'symfony/translation' => 'v3.2.14@df36a48672b929bf3995eb62c58d83004b1d0d50',
  'symfony/yaml' => 'v2.8.52@02c1859112aa779d9ab394ae4f3381911d84052b',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  '__root__' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
