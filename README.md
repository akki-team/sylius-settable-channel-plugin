# SettableChannelContextPlugin

## Overview

This plugin allows you to set the channel context directly, with a Channel or a ChannelCode thanks to the SettableChanneContextInterface.

Very useful in your symfony commands where channel context cannot be determined because there is no request.

[See the methods available for the SettableChannelContextInterface.](src/Context/SettableChannelContextInterface.php)

## Installation

1. Install the plugin to your project with the following command:
```bash
$ composer require akki/sylius-settable-channel-plugin
```

2. After the installation, check that the plugin is correctly declared in your project in the file `config/bundles.php`.

```php

 return [
    ...
    Akki\SyliusSettableChannelPlugin\AkkiSyliusSettableChannelPlugin::class => ['all' => true],
];
 ```
