<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDGPNUK6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDGPNUK6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDGPNUK6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDGPNUK6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDGPNUK6\App_KernelDevDebugContainer([
    'container.build_hash' => 'DGPNUK6',
    'container.build_id' => 'c4615305',
    'container.build_time' => 1668303876,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDGPNUK6');
