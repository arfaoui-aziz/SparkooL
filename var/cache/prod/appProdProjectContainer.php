<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWftajpj\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWftajpj/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerWftajpj.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerWftajpj\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerWftajpj\appProdProjectContainer([
    'container.build_hash' => 'Wftajpj',
    'container.build_id' => 'ade5b930',
    'container.build_time' => 1581261450,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWftajpj');