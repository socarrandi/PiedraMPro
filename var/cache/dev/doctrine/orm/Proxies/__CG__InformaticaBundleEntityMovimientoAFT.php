<?php

namespace Proxies\__CG__\InformaticaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MovimientoAFT extends \InformaticaBundle\Entity\MovimientoAFT implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'id', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'fecha', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'equipo', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'responsableOrigen', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'responsableDestino', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'tipoMovimiento', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'usuario', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'unidad', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'dictaminado', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'log', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'estado'];
        }

        return ['__isInitialized__', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'id', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'fecha', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'equipo', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'responsableOrigen', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'responsableDestino', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'tipoMovimiento', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'usuario', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'unidad', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'dictaminado', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'log', '' . "\0" . 'InformaticaBundle\\Entity\\MovimientoAFT' . "\0" . 'estado'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MovimientoAFT $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', [$fecha]);

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', []);

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario($usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setEquipo(\InformaticaBundle\Entity\Equipo $equipo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEquipo', [$equipo]);

        return parent::setEquipo($equipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getEquipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEquipo', []);

        return parent::getEquipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponsableOrigen(\InformaticaBundle\Entity\Responsable $responsableOrigen = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponsableOrigen', [$responsableOrigen]);

        return parent::setResponsableOrigen($responsableOrigen);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponsableOrigen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsableOrigen', []);

        return parent::getResponsableOrigen();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponsableDestino(\InformaticaBundle\Entity\Responsable $responsableDestino = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponsableDestino', [$responsableDestino]);

        return parent::setResponsableDestino($responsableDestino);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponsableDestino()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsableDestino', []);

        return parent::getResponsableDestino();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoMovimiento(\InformaticaBundle\Entity\TipoMovimiento $tipoMovimiento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoMovimiento', [$tipoMovimiento]);

        return parent::setTipoMovimiento($tipoMovimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoMovimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoMovimiento', []);

        return parent::getTipoMovimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setDictaminado($dictaminado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDictaminado', [$dictaminado]);

        return parent::setDictaminado($dictaminado);
    }

    /**
     * {@inheritDoc}
     */
    public function getDictaminado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDictaminado', []);

        return parent::getDictaminado();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnidad(\InformaticaBundle\Entity\Unidad $unidad = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnidad', [$unidad]);

        return parent::setUnidad($unidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnidad', []);

        return parent::getUnidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setLog($log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLog', [$log]);

        return parent::setLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function getLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLog', []);

        return parent::getLog();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado(\InformaticaBundle\Entity\EstadoMovimientoAFT $estado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

}