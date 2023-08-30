<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['cache.app'])) {
        yield 'cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : null) && false ?: '_'};
    }
    if (isset($this->services['cache.system'])) {
        yield 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : null) && false ?: '_'};
    }
    if (isset($this->services['cache.validator'])) {
        yield 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : null) && false ?: '_'};
    }
    if (isset($this->services['cache.serializer'])) {
        yield 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : null) && false ?: '_'};
    }
    if (isset($this->services['cache.annotations'])) {
        yield 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : null) && false ?: '_'};
    }
    if (isset($this->services['profiler'])) {
        yield 'profiler' => ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : null) && false ?: '_'};
    }
    if (isset($this->services['validator'])) {
        yield 'debug.validator' => ${($_ = isset($this->services['validator']) ? $this->services['validator'] : null) && false ?: '_'};
    }
    if (isset($this->services['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : null) && false ?: '_'};
    }
    if (isset($this->services['debug.event_dispatcher'])) {
        yield 'debug.event_dispatcher' => ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : null) && false ?: '_'};
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : null) && false ?: '_'};
    }
    if (isset($this->services['form.type.entity'])) {
        yield 'form.type.entity' => ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : null) && false ?: '_'};
    }
    if (isset($this->services['monolog.handler.buffered'])) {
        yield 'monolog.handler.buffered' => ${($_ = isset($this->services['monolog.handler.buffered']) ? $this->services['monolog.handler.buffered'] : null) && false ?: '_'};
    }
    if (isset($this->services['monolog.handler.console'])) {
        yield 'monolog.handler.console' => ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : null) && false ?: '_'};
    }
    if (isset($this->services['monolog.handler.GmoPaymentGateway4'])) {
        yield 'monolog.handler.GmoPaymentGateway4' => ${($_ = isset($this->services['monolog.handler.GmoPaymentGateway4']) ? $this->services['monolog.handler.GmoPaymentGateway4'] : null) && false ?: '_'};
    }
    if (isset($this->services['monolog.handler.YamatoPayment4'])) {
        yield 'monolog.handler.YamatoPayment4' => ${($_ = isset($this->services['monolog.handler.YamatoPayment4']) ? $this->services['monolog.handler.YamatoPayment4'] : null) && false ?: '_'};
    }
    if (isset($this->services['swiftmailer.email_sender.listener'])) {
        yield 'swiftmailer.email_sender.listener' => ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : null) && false ?: '_'};
    }
}, function () {
    return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->services['cache.validator'])) + (int) (isset($this->services['cache.serializer'])) + (int) (isset($this->services['cache.annotations'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->services['debug.stopwatch'])) + (int) (isset($this->services['debug.event_dispatcher'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->services['form.type.entity'])) + (int) (isset($this->services['monolog.handler.buffered'])) + (int) (isset($this->services['monolog.handler.console'])) + (int) (isset($this->services['monolog.handler.GmoPaymentGateway4'])) + (int) (isset($this->services['monolog.handler.YamatoPayment4'])) + (int) (isset($this->services['swiftmailer.email_sender.listener']));
}), ['cache.app' => 'reset', 'cache.system' => 'reset', 'cache.validator' => 'reset', 'cache.serializer' => 'reset', 'cache.annotations' => 'reset', 'profiler' => 'reset', 'debug.validator' => 'reset', 'debug.stopwatch' => 'reset', 'debug.event_dispatcher' => 'reset', 'security.token_storage' => 'setToken', 'form.type.entity' => 'reset', 'monolog.handler.buffered' => 'reset', 'monolog.handler.console' => 'reset', 'monolog.handler.GmoPaymentGateway4' => 'reset', 'monolog.handler.YamatoPayment4' => 'reset', 'swiftmailer.email_sender.listener' => 'reset']);
