# Zend {Expressive} User Authentication module

## Installation

```bash
$ composer require awoyotoyin/zfe-user:dev-master
```

### Register the module
This module requires the awoyotoyin/zfe-base module and must be registered to function properly

> ### Zend Expressive
>
> ```bash
> 
> use Zfe\Common\ConfigProvider as CommonConfigProvider;
> use Zfe\User\ConfigProvider as UserConfigProvider;
> 
> $aggregator = new ConfigAggregator([
>     ...
>     CommonConfigProvider::class,
>     UserConfigProvider::class,
>     ...
> ], $cacheConfig['config_cache_path']);
> ```

## Usage

A work in progress
