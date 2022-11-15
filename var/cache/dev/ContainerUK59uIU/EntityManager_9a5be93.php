<?php

namespace ContainerUK59uIU;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderea90d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf1e98 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa2c92 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getConnection', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getMetadataFactory', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getExpressionBuilder', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'beginTransaction', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getCache', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'transactional', array('func' => $func), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'commit', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->commit();
    }

    public function rollback()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'rollback', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getClassMetadata', array('className' => $className), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'createQuery', array('dql' => $dql), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'createNamedQuery', array('name' => $name), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'createQueryBuilder', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'flush', array('entity' => $entity), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'clear', array('entityName' => $entityName), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->clear($entityName);
    }

    public function close()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'close', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->close();
    }

    public function persist($entity)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'persist', array('entity' => $entity), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'remove', array('entity' => $entity), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'refresh', array('entity' => $entity), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'detach', array('entity' => $entity), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'merge', array('entity' => $entity), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'contains', array('entity' => $entity), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getEventManager', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getConfiguration', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'isOpen', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getUnitOfWork', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getProxyFactory', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'initializeObject', array('obj' => $obj), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'getFilters', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'isFiltersStateClean', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'hasFilters', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return $this->valueHolderea90d->hasFilters();
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

        $instance->initializerf1e98 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderea90d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderea90d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderea90d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, '__get', ['name' => $name], $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        if (isset(self::$publicPropertiesa2c92[$name])) {
            return $this->valueHolderea90d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea90d;

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

        $targetObject = $this->valueHolderea90d;
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
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea90d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderea90d;
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
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, '__isset', array('name' => $name), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea90d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderea90d;
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
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, '__unset', array('name' => $name), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea90d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderea90d;
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
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, '__clone', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        $this->valueHolderea90d = clone $this->valueHolderea90d;
    }

    public function __sleep()
    {
        $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, '__sleep', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;

        return array('valueHolderea90d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf1e98 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf1e98;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf1e98 && ($this->initializerf1e98->__invoke($valueHolderea90d, $this, 'initializeProxy', array(), $this->initializerf1e98) || 1) && $this->valueHolderea90d = $valueHolderea90d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderea90d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderea90d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
