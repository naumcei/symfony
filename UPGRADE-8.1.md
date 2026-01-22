UPGRADE FROM 8.0 to 8.1
=======================

Symfony 8.1 is a minor release. According to the Symfony release process, there should be no significant
backward compatibility breaks. Minor backward compatibility breaks are prefixed in this document with
`[BC BREAK]`, make sure your code is compatible with these entries before upgrading.
Read more about this in the [Symfony documentation](https://symfony.com/doc/8.1/setup/upgrade_minor.html).

If you're upgrading from a version below 8.0, follow the [8.0 upgrade guide](UPGRADE-8.0.md) first.

DependencyInjection
-------------------

 * Deprecate configuring options `alias`, `parent`, `synthetic`, `file`, `arguments`, `properties`, `configurator` or `calls` when using `from_callable`
 * Deprecate default index/priority methods when defining tagged locators/iterators; use the `#[AsTaggedItem]` attribute instead

DoctrineBridge
--------------

 * Deprecate setting an `$aliasMap` in `RegisterMappingsPass`. Namespace aliases are no longer supported in Doctrine.

FrameworkBundle
---------------

 * Deprecate setting the `framework.profiler.collect_serializer_data` config option

HttpKernel
----------

 * Deprecate passing a non-flat list of attributes to `Controller::setController()`
 * Deprecate the `Symfony\Component\HttpKernel\DependencyInjection\Extension` class, use the parent `Symfony\Component\DependencyInjection\Extension\Extension` class instead:

   ```diff
   - use Symfony\Component\HttpKernel\DependencyInjection\Extension;
   + use Symfony\Component\DependencyInjection\Extension\Extension;

   class ExampleExtension extends Extension
   {
       // ...
   }
   ```

Uid
---

 * Add argument `$format` to `Ulid::isValid()`
