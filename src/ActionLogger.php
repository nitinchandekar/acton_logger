<?php 
namespace Jet\JetStream;
use Throwable;
final class ActionLogger{
    /**
     * ActionLogger Class
     * @libary Actionlogger
     * @author Nitin Chandekar <nitin.chandekar@jetsynthesys.com>
     * Summary of $loggerParams
     * @since            Jan 06, 2023
     * @copyright        2023 Jetsynthesys Pvt Ltd.
     * @version          v1.0.0     
     */
    protected $loggerParams = [];
    
    public function __construct(array $params)
    {
        $this->loggerParams = $params;        
    }

    public function userActivity():void{

        try {
            
            $log  = PHP_EOL.
                    "-------------------------".PHP_EOL;
            $fileName = '/storage/logs/' . gethostname() . '-user-' . date('Y-m-d') . '.log';
            file_put_contents($fileName, $this->loggerParams, FILE_APPEND);
        } catch (Throwable $th) {
            throw $th;
        }
       
    }

    function myErrorLog($message = 'no message') {
        $date = date('Y-m-d H:i:s');
        $fp   = fopen('/var/log/moodle-errors.log', 'a');
        if (!$fp) {
             throw new \Exception("Could not open log file! Permission error?");
        }
        fwrite($fp, $date . ' ' . $message . "\n");
        fclose($fp);
    }
    

}