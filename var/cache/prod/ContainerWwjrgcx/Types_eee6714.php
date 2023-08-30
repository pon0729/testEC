<?php

class Types_eee6714 extends \Plugin\Api\GraphQL\Types implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldereee6714 = null;
    private $initializereee6714 = null;
    private static $publicPropertieseee6714 = [
        
    ];
    public function addAllowList(\Plugin\Api\GraphQL\AllowList $allowList)
    {
        $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, 'addAllowList', array('allowList' => $allowList), $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
        return $this->valueHoldereee6714->addAllowList($allowList);
    }
    public function get($className)
    {
        $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, 'get', array('className' => $className), $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
        return $this->valueHoldereee6714->get($className);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Plugin\Api\GraphQL\Types $instance) {
            unset($instance->entityManager, $instance->types, $instance->allowLists);
        }, $instance, 'Plugin\\Api\\GraphQL\\Types')->__invoke($instance);
        $instance->initializereee6714 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
        static $reflection;
        if (! $this->valueHoldereee6714) {
            $reflection = $reflection ?: new \ReflectionClass('Plugin\\Api\\GraphQL\\Types');
            $this->valueHoldereee6714 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Plugin\Api\GraphQL\Types $instance) {
            unset($instance->entityManager, $instance->types, $instance->allowLists);
        }, $this, 'Plugin\\Api\\GraphQL\\Types')->__invoke($this);
        }
        $this->valueHoldereee6714->__construct($entityManager);
    }
    public function & __get($name)
    {
        $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, '__get', ['name' => $name], $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
        if (isset(self::$publicPropertieseee6714[$name])) {
            return $this->valueHoldereee6714->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereee6714;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHoldereee6714;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereee6714;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHoldereee6714;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, '__isset', array('name' => $name), $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereee6714;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldereee6714;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, '__unset', array('name' => $name), $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereee6714;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldereee6714;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, '__clone', array(), $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
        $this->valueHoldereee6714 = clone $this->valueHoldereee6714;
    }
    public function __sleep()
    {
        $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, '__sleep', array(), $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
        return array('valueHoldereee6714');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Plugin\Api\GraphQL\Types $instance) {
            unset($instance->entityManager, $instance->types, $instance->allowLists);
        }, $this, 'Plugin\\Api\\GraphQL\\Types')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializereee6714 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializereee6714;
    }
    public function initializeProxy() : bool
    {
        return $this->initializereee6714 && ($this->initializereee6714->__invoke($valueHoldereee6714, $this, 'initializeProxy', array(), $this->initializereee6714) || 1) && $this->valueHoldereee6714 = $valueHoldereee6714;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereee6714;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereee6714;
    }
}
