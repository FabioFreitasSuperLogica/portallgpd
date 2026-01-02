<?php

abstract class View
{
    const PARAM_POLITICA = 'politica';
    const PARAM_CONTATOS = 'contatos';
    const PARAM_PORTAL = 'portal';
    const PARAM_ERROR = 'error';
    const PARAM_SUCCESS = 'success';

    /**
     * @param string $param
     * 
     * @return [void]
     */
    public static function get($param)
    {
        if (isset($_SESSION['error_message'])) $param = self::PARAM_ERROR;
        if (isset($_SESSION['codigo'])) $param = self::PARAM_SUCCESS;

        self::getByParam($param);
    }

    /*
     * @param string $param
     * 
     * @return [void]
     */
    public static function getByParam($param)
    {
        switch ($param) {
            case self::PARAM_CONTATOS:
                require_once 'views/contatos.php';
                break;
            case self::PARAM_POLITICA:
                require_once 'views/politica.php';
                break;
            case self::PARAM_PORTAL:
                require_once 'views/portal.php';
                break;
            case self::PARAM_ERROR:
                require_once 'views/error.php';
                break;
            case self::PARAM_SUCCESS:
                require_once 'views/success.php';
                break;
            default:
                require_once 'views/home.php';
                break;
        }
    }
}
