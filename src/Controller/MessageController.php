<?php
/**
 * Created by PhpStorm.
 * User: abdullah.s
 * Date: 6/8/2019
 * Time: 4:44 PM
 */

namespace Aos\AutoloaderPsr4\Controller;

use Aos\AutoloaderPsr4\Service\DequeueMessageInterface;
use Aos\AutoloaderPsr4\Service\EnqueueMessageInterface;
use Aos\AutoloaderPsr4\Service\EnqueueMessageService;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class MessageController extends AbstractActionController
{
    public $dequeueMessageService;
    public $enqueueMessageService;

    public function __construct(DequeueMessageInterface $dequeueMessageService, EnqueueMessageInterface $enqueueMessageService) {
        $this->dequeueMessageService = $dequeueMessageService;
        $this->enqueueMessageService = $enqueueMessageService;
    }

    public function dequeueAction() {
        try{
            return new JsonModel([
                'success' => $this->dequeueMessageService->dequeue()
            ]);
        }
        catch(\Exception $e){
            throw $e;
        }
    }

    public function enqueueAction() {
        try{
            return new JsonModel([
                'success' => $this->enqueueMessageService->enqueue('message')
            ]);
        }
        catch(\Exception $e){
            throw $e;
        }
    }
}