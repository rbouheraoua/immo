<?php

namespace ContainerRnnP7xx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder36dfd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer226e2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9df68 = [
        
    ];

    public function getConnection()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getConnection', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getMetadataFactory', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getExpressionBuilder', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'beginTransaction', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getCache', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'transactional', array('func' => $func), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'commit', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->commit();
    }

    public function rollback()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'rollback', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getClassMetadata', array('className' => $className), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'createQuery', array('dql' => $dql), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'createNamedQuery', array('name' => $name), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'createQueryBuilder', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'flush', array('entity' => $entity), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'clear', array('entityName' => $entityName), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->clear($entityName);
    }

    public function close()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'close', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->close();
    }

    public function persist($entity)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'persist', array('entity' => $entity), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'remove', array('entity' => $entity), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'refresh', array('entity' => $entity), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'detach', array('entity' => $entity), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'merge', array('entity' => $entity), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'contains', array('entity' => $entity), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getEventManager', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getConfiguration', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'isOpen', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getUnitOfWork', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getProxyFactory', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'initializeObject', array('obj' => $obj), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'getFilters', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'isFiltersStateClean', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'hasFilters', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return $this->valueHolder36dfd->hasFilters();
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

        $instance->initializer226e2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder36dfd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36dfd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder36dfd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, '__get', ['name' => $name], $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        if (isset(self::$publicProperties9df68[$name])) {
            return $this->valueHolder36dfd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36dfd;

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

        $targetObject = $this->valueHolder36dfd;
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
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36dfd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36dfd;
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
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, '__isset', array('name' => $name), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36dfd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder36dfd;
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
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, '__unset', array('name' => $name), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36dfd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder36dfd;
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
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, '__clone', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        $this->valueHolder36dfd = clone $this->valueHolder36dfd;
    }

    public function __sleep()
    {
        $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, '__sleep', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;

        return array('valueHolder36dfd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer226e2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer226e2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer226e2 && ($this->initializer226e2->__invoke($valueHolder36dfd, $this, 'initializeProxy', array(), $this->initializer226e2) || 1) && $this->valueHolder36dfd = $valueHolder36dfd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36dfd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36dfd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
