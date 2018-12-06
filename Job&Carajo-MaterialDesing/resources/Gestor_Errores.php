<?php

/**
 * Clase que me permitirá llevar un registro de los errores que se producen
 */
class Gestor_Errores {
    
    /**
     * Lista en la que guardamos los errores. Solo se podrá almacenar una descripción
     * por campo
     * @var array
     */
    private $errores=array();
    
    public function __construct() {
    
    }
    
    /**
     * Anota un error para un campo en nuestro gestor de errores
     * @param type $campo
     * @param type $descripcion
     */
    public function AnotaError($campo, $descripcion)
    {
        $this->errores[$campo]=$descripcion;
    }
    
    /**
     * Indica si hay errores
     * @return boolean
     */
    public function HayErrores()
    {
        return count($this->errores)>0;
    }
    
    /**
     * Indica si hay error en un campo
     * @return boolean
     */
    public function HayError($campo)
    {
        return isset($this->errores[$campo]);
    }        

    public function listaErrores()
    {
        if ($this->HayErrores())
        {
            return $this->errores;
        }
        else
        {
            return '';
        }
    }
}
