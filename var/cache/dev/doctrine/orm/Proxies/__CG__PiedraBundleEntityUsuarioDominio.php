<?php

namespace Proxies\__CG__\PiedraBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UsuarioDominio extends \PiedraBundle\Entity\UsuarioDominio implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'id', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'nombre', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'primerApellido', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'segundoApellido', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'ci', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'email', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'cargo', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'usuarioRed', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'navNacional', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'navInternet', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'emailNacional', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'emailInternet', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'ftp', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'chat', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'observacion', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'baja', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'fecha'];
        }

        return ['__isInitialized__', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'id', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'nombre', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'primerApellido', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'segundoApellido', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'ci', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'email', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'cargo', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'usuarioRed', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'navNacional', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'navInternet', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'emailNacional', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'emailInternet', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'ftp', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'chat', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'observacion', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'baja', '' . "\0" . 'PiedraBundle\\Entity\\UsuarioDominio' . "\0" . 'fecha'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UsuarioDominio $proxy) {
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
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNavNacional($navNacional)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNavNacional', [$navNacional]);

        return parent::setNavNacional($navNacional);
    }

    /**
     * {@inheritDoc}
     */
    public function getNavNacional()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNavNacional', []);

        return parent::getNavNacional();
    }

    /**
     * {@inheritDoc}
     */
    public function setNavInternet($navInternet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNavInternet', [$navInternet]);

        return parent::setNavInternet($navInternet);
    }

    /**
     * {@inheritDoc}
     */
    public function getNavInternet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNavInternet', []);

        return parent::getNavInternet();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailNacional($emailNacional)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailNacional', [$emailNacional]);

        return parent::setEmailNacional($emailNacional);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailNacional()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailNacional', []);

        return parent::getEmailNacional();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailInternet($emailInternet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailInternet', [$emailInternet]);

        return parent::setEmailInternet($emailInternet);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailInternet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailInternet', []);

        return parent::getEmailInternet();
    }

    /**
     * {@inheritDoc}
     */
    public function setFtp($ftp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFtp', [$ftp]);

        return parent::setFtp($ftp);
    }

    /**
     * {@inheritDoc}
     */
    public function getFtp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFtp', []);

        return parent::getFtp();
    }

    /**
     * {@inheritDoc}
     */
    public function setChat($chat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChat', [$chat]);

        return parent::setChat($chat);
    }

    /**
     * {@inheritDoc}
     */
    public function getChat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChat', []);

        return parent::getChat();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservacion($observacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservacion', [$observacion]);

        return parent::setObservacion($observacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservacion', []);

        return parent::getObservacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCargo(\PiedraBundle\Entity\Cargo $cargo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCargo', [$cargo]);

        return parent::setCargo($cargo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCargo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCargo', []);

        return parent::getCargo();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioRed(\PiedraBundle\Entity\UsuarioRed $usuarioRed = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioRed', [$usuarioRed]);

        return parent::setUsuarioRed($usuarioRed);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioRed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioRed', []);

        return parent::getUsuarioRed();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(\PiedraBundle\Entity\Email $email = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setBaja($baja)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBaja', [$baja]);

        return parent::setBaja($baja);
    }

    /**
     * {@inheritDoc}
     */
    public function getBaja()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaja', []);

        return parent::getBaja();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimerApellido($primerApellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimerApellido', [$primerApellido]);

        return parent::setPrimerApellido($primerApellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimerApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimerApellido', []);

        return parent::getPrimerApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setSegundoApellido($segundoApellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSegundoApellido', [$segundoApellido]);

        return parent::setSegundoApellido($segundoApellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegundoApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegundoApellido', []);

        return parent::getSegundoApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setCi($ci)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCi', [$ci]);

        return parent::setCi($ci);
    }

    /**
     * {@inheritDoc}
     */
    public function getCi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCi', []);

        return parent::getCi();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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

}
