<?php

namespace ContainerD1X1WQd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere9327 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer80270 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties92dd8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getConnection', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getMetadataFactory', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getExpressionBuilder', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'beginTransaction', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getCache', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getCache();
    }

    public function transactional($func)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'transactional', array('func' => $func), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'wrapInTransaction', array('func' => $func), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'commit', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->commit();
    }

    public function rollback()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'rollback', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getClassMetadata', array('className' => $className), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'createQuery', array('dql' => $dql), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'createNamedQuery', array('name' => $name), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'createQueryBuilder', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'flush', array('entity' => $entity), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'clear', array('entityName' => $entityName), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->clear($entityName);
    }

    public function close()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'close', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->close();
    }

    public function persist($entity)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'persist', array('entity' => $entity), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'remove', array('entity' => $entity), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'refresh', array('entity' => $entity), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'detach', array('entity' => $entity), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'merge', array('entity' => $entity), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getRepository', array('entityName' => $entityName), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'contains', array('entity' => $entity), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getEventManager', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getConfiguration', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'isOpen', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getUnitOfWork', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getProxyFactory', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'initializeObject', array('obj' => $obj), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'getFilters', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'isFiltersStateClean', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'hasFilters', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return $this->valueHoldere9327->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer80270 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere9327) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere9327 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere9327->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, '__get', ['name' => $name], $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        if (isset(self::$publicProperties92dd8[$name])) {
            return $this->valueHoldere9327->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9327;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere9327;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9327;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere9327;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, '__isset', array('name' => $name), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9327;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere9327;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, '__unset', array('name' => $name), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9327;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere9327;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, '__clone', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        $this->valueHoldere9327 = clone $this->valueHoldere9327;
    }

    public function __sleep()
    {
        $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, '__sleep', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;

        return array('valueHoldere9327');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer80270 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer80270;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer80270 && ($this->initializer80270->__invoke($valueHoldere9327, $this, 'initializeProxy', array(), $this->initializer80270) || 1) && $this->valueHoldere9327 = $valueHoldere9327;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere9327;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere9327;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
