<?php


namespace shop;


class ErrorHandler
{
    public function __construct()
    {
        if (DEBUG) {
            error_reporting(-1);
        } else {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler(\Exception $e): void
    {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    /**
     * логирование ошибок
     * @param string $message
     * @param string $file
     * @param string $line
     */
    protected function logErrors(string $message = '', string $file = '', string $line = ''): void
    {
        error_log('[' . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Строка {$line}
        \n========================\n", 3, ROOT . '/tmp/errors.log');
    }


    protected function displayError(string $errorNumber, string $string, $file, int $line, int $responce = 404): void
    {
        http_response_code($responce);
        if ($responce === 404 && !DEBUG) {
            require_once WWW . '/errors/404.php';
            die;
        }
        if (DEBUG) {
            require_once WWW . '/errors/dev.php';
        } else {
            require_once WWW . '/errors/prod.php';
        }
        die;
    }
}

