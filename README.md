# Zend {Expressive} User Authentication module

## Installation

```bash
$ composer require awoyotoyin/zfe-auth:dev-master
```

### Register the module
This module requires the awoyotoyin/zfe-base module and must be registered to function properly

> ### Zend Expressive
>
> ```bash
> 
> use Zfe\Common\ConfigProvider as CommonConfigProvider;
> use Zfe\Auth\ConfigProvider as AuthConfigProvider;
> 
> $aggregator = new ConfigAggregator([
>     ...
>     CommonConfigProvider::class,
>     AuthConfigProvider::class,
>     ...
> ], $cacheConfig['config_cache_path']);
> ```

## Usage

A work in progress
