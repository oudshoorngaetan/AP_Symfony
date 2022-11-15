<?php

namespace Container3YSXDPg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere91ca = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8b73c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties314eb = [
        
    ];

    public function getConnection()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getConnection', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getMetadataFactory', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getExpressionBuilder', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'beginTransaction', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getCache', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'transactional', array('func' => $func), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'commit', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->commit();
    }

    public function rollback()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'rollback', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getClassMetadata', array('className' => $className), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'createQuery', array('dql' => $dql), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'createNamedQuery', array('name' => $name), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'createQueryBuilder', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'flush', array('entity' => $entity), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'clear', array('entityName' => $entityName), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->clear($entityName);
    }

    public function close()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'close', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->close();
    }

    public function persist($entity)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'persist', array('entity' => $entity), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'remove', array('entity' => $entity), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'refresh', array('entity' => $entity), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'detach', array('entity' => $entity), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'merge', array('entity' => $entity), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'contains', array('entity' => $entity), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getEventManager', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getConfiguration', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'isOpen', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getUnitOfWork', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getProxyFactory', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'initializeObject', array('obj' => $obj), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'getFilters', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'isFiltersStateClean', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'hasFilters', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return $this->valueHoldere91ca->hasFilters();
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

        $instance->initializer8b73c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere91ca) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere91ca = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere91ca->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, '__get', ['name' => $name], $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        if (isset(self::$publicProperties314eb[$name])) {
            return $this->valueHoldere91ca->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere91ca;

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

        $targetObject = $this->valueHoldere91ca;
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
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere91ca;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere91ca;
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
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, '__isset', array('name' => $name), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere91ca;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere91ca;
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
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, '__unset', array('name' => $name), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere91ca;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere91ca;
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
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, '__clone', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        $this->valueHoldere91ca = clone $this->valueHoldere91ca;
    }

    public function __sleep()
    {
        $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, '__sleep', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;

        return array('valueHoldere91ca');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8b73c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8b73c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8b73c && ($this->initializer8b73c->__invoke($valueHoldere91ca, $this, 'initializeProxy', array(), $this->initializer8b73c) || 1) && $this->valueHoldere91ca = $valueHoldere91ca;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere91ca;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere91ca;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
