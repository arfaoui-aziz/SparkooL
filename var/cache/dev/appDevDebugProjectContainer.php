<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOdcmirx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOdcmirx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOdcmirx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOdcmirx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerOdcmirx\appDevDebugProjectContainer([
    'container.build_hash' => 'Odcmirx',
    'container.build_id' => 'c0fe86ad',
    'container.build_time' => 1581586681,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOdcmirx');
