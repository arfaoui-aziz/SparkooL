<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQwgwk6x\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQwgwk6x/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQwgwk6x.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQwgwk6x\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerQwgwk6x\appDevDebugProjectContainer([
    'container.build_hash' => 'Qwgwk6x',
    'container.build_id' => 'adde1739',
    'container.build_time' => 1582678815,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQwgwk6x');
