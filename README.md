# Contao polyfill Symfony

The package provides some Symfony resources for bundles that want to be
compatible with both Symfony 4 and 5:

## What's inside?

### `InputBag`

The `InputBag` class was added to the HttpFoundation component in Symfony 5.
The polyfill will save you a lot of `if (class_exists(InputBag:class))` checks
by providing the `InputBag` class in Symfony 4 as well.

### `TranslatorInterface`

The `TranslatorInterface` has been moved from the Translation component to the
Contracts component in Symfony 5. The polyfill restores the old interface in
Symfony 5.

## Scope

If you want your Contao extension to be compatible with multiple Contao
versions (e.g. `4.9` to `4.13`), you will also have to be compatible with both
Symfony 4 and 5. Require the polyfill in your `composer.json` in this case.

## License

Contao is licensed under the terms of the LGPLv3.

## Getting support

Visit the [support page][2] to learn about the available support options.

[1]: https://contao.org
[2]: https://contao.org/en/support.html
