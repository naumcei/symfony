UPGRADE FROM 8.0 to 8.1
=======================

DependencyInjection
-------------------

 * Deprecate configuring options `alias`, `parent`, `synthetic`, `file`, `arguments`, `properties`, `configurator` or `calls` when using `from_callable`

DoctrineBridge
--------------

 * Deprecate setting an `$aliasMap` in `RegisterMappingsPass`. Namespace aliases are no longer supported in Doctrine.

FrameworkBundle
---------------

 * Deprecate setting the `framework.profiler.collect_serializer_data` config option
