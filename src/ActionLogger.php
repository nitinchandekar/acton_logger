<?php 
namespace Jet\JetStream;
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
        dd($this->loggerParams);
    }

}