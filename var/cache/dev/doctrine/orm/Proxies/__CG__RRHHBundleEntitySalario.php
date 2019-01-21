<?php

namespace Proxies\__CG__\RRHHBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Salario extends \RRHHBundle\Entity\Salario implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'id', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'salarioEscala', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'antiguedad', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'adicionalDelTurismo', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'perfEmpresarial', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'encAlmacen', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'tecnico', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'grupoEnergetico', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'retribucionComp20', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'retribucionComp30', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'otrosPagos', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'contrato'];
        }

        return ['__isInitialized__', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'id', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'salarioEscala', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'antiguedad', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'adicionalDelTurismo', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'perfEmpresarial', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'encAlmacen', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'tecnico', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'grupoEnergetico', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'retribucionComp20', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'retribucionComp30', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'otrosPagos', '' . "\0" . 'RRHHBundle\\Entity\\Salario' . "\0" . 'contrato'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Salario $proxy) {
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
    public function setSalarioEscala($salarioEscala)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalarioEscala', [$salarioEscala]);

        return parent::setSalarioEscala($salarioEscala);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalarioEscala()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalarioEscala', []);

        return parent::getSalarioEscala();
    }

    /**
     * {@inheritDoc}
     */
    public function setAntiguedad($antiguedad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAntiguedad', [$antiguedad]);

        return parent::setAntiguedad($antiguedad);
    }

    /**
     * {@inheritDoc}
     */
    public function getAntiguedad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAntiguedad', []);

        return parent::getAntiguedad();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdicionalDelTurismo($adicionalDelTurismo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdicionalDelTurismo', [$adicionalDelTurismo]);

        return parent::setAdicionalDelTurismo($adicionalDelTurismo);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdicionalDelTurismo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdicionalDelTurismo', []);

        return parent::getAdicionalDelTurismo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerfEmpresarial($perfEmpresarial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerfEmpresarial', [$perfEmpresarial]);

        return parent::setPerfEmpresarial($perfEmpresarial);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerfEmpresarial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerfEmpresarial', []);

        return parent::getPerfEmpresarial();
    }

    /**
     * {@inheritDoc}
     */
    public function setEncAlmacen($encAlmacen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEncAlmacen', [$encAlmacen]);

        return parent::setEncAlmacen($encAlmacen);
    }

    /**
     * {@inheritDoc}
     */
    public function getEncAlmacen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEncAlmacen', []);

        return parent::getEncAlmacen();
    }

    /**
     * {@inheritDoc}
     */
    public function setTecnico($tecnico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTecnico', [$tecnico]);

        return parent::setTecnico($tecnico);
    }

    /**
     * {@inheritDoc}
     */
    public function getTecnico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTecnico', []);

        return parent::getTecnico();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrupoEnergetico($grupoEnergetico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrupoEnergetico', [$grupoEnergetico]);

        return parent::setGrupoEnergetico($grupoEnergetico);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrupoEnergetico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrupoEnergetico', []);

        return parent::getGrupoEnergetico();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetribucionComp20($retribucionComp20)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetribucionComp20', [$retribucionComp20]);

        return parent::setRetribucionComp20($retribucionComp20);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetribucionComp20()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetribucionComp20', []);

        return parent::getRetribucionComp20();
    }

    /**
     * {@inheritDoc}
     */
    public function setRetribucionComp30($retribucionComp30)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRetribucionComp30', [$retribucionComp30]);

        return parent::setRetribucionComp30($retribucionComp30);
    }

    /**
     * {@inheritDoc}
     */
    public function getRetribucionComp30()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRetribucionComp30', []);

        return parent::getRetribucionComp30();
    }

    /**
     * {@inheritDoc}
     */
    public function setOtrosPagos($otrosPagos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOtrosPagos', [$otrosPagos]);

        return parent::setOtrosPagos($otrosPagos);
    }

    /**
     * {@inheritDoc}
     */
    public function getOtrosPagos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOtrosPagos', []);

        return parent::getOtrosPagos();
    }

    /**
     * {@inheritDoc}
     */
    public function setContrato(\RRHHBundle\Entity\Contrato $contrato = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContrato', [$contrato]);

        return parent::setContrato($contrato);
    }

    /**
     * {@inheritDoc}
     */
    public function getContrato()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContrato', []);

        return parent::getContrato();
    }

}