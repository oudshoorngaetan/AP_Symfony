<?php

namespace ContainerXRh7LDH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder08afd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera80b2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf46c5 = [
        
    ];

    public function getConnection()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getConnection', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getMetadataFactory', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getExpressionBuilder', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'beginTransaction', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getCache', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getCache();
    }

    public function transactional($func)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'transactional', array('func' => $func), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'wrapInTransaction', array('func' => $func), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'commit', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->commit();
    }

    public function rollback()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'rollback', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getClassMetadata', array('className' => $className), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'createQuery', array('dql' => $dql), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'createNamedQuery', array('name' => $name), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'createQueryBuilder', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'flush', array('entity' => $entity), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'clear', array('entityName' => $entityName), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->clear($entityName);
    }

    public function close()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'close', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->close();
    }

    public function persist($entity)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'persist', array('entity' => $entity), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'remove', array('entity' => $entity), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'refresh', array('entity' => $entity), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'detach', array('entity' => $entity), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'merge', array('entity' => $entity), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getRepository', array('entityName' => $entityName), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'contains', array('entity' => $entity), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getEventManager', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getConfiguration', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'isOpen', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getUnitOfWork', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getProxyFactory', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'initializeObject', array('obj' => $obj), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'getFilters', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'isFiltersStateClean', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'hasFilters', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return $this->valueHolder08afd->hasFilters();
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

        $instance->initializera80b2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder08afd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder08afd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder08afd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, '__get', ['name' => $name], $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        if (isset(self::$publicPropertiesf46c5[$name])) {
            return $this->valueHolder08afd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08afd;

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

        $targetObject = $this->valueHolder08afd;
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
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08afd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder08afd;
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
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, '__isset', array('name' => $name), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08afd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder08afd;
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
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, '__unset', array('name' => $name), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08afd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder08afd;
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
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, '__clone', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        $this->valueHolder08afd = clone $this->valueHolder08afd;
    }

    public function __sleep()
    {
        $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, '__sleep', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;

        return array('valueHolder08afd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera80b2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera80b2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera80b2 && ($this->initializera80b2->__invoke($valueHolder08afd, $this, 'initializeProxy', array(), $this->initializera80b2) || 1) && $this->valueHolder08afd = $valueHolder08afd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder08afd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder08afd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
