<?php

namespace PicturePark\API\Model;

class BusinessProcessCreateRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicates if the system starting the business process supports cancellation.
     *
     * @var bool
     */
    protected $supportsCancellation;
    /**
    * Notification data to send to the user when creating the business process.
    Set to null to not create a notification.
    *
    * @var mixed|null
    */
    protected $notification;
    /**
     * Initial state of the business process.
     *
     * @var string
     */
    protected $initialState;
    /**
     * Indicates if the system starting the business process supports cancellation.
     *
     * @return bool
     */
    public function getSupportsCancellation() : bool
    {
        return $this->supportsCancellation;
    }
    /**
     * Indicates if the system starting the business process supports cancellation.
     *
     * @param bool $supportsCancellation
     *
     * @return self
     */
    public function setSupportsCancellation(bool $supportsCancellation) : self
    {
        $this->initialized['supportsCancellation'] = true;
        $this->supportsCancellation = $supportsCancellation;
        return $this;
    }
    /**
    * Notification data to send to the user when creating the business process.
    Set to null to not create a notification.
    *
    * @return mixed
    */
    public function getNotification()
    {
        return $this->notification;
    }
    /**
    * Notification data to send to the user when creating the business process.
    Set to null to not create a notification.
    *
    * @param mixed $notification
    *
    * @return self
    */
    public function setNotification($notification) : self
    {
        $this->initialized['notification'] = true;
        $this->notification = $notification;
        return $this;
    }
    /**
     * Initial state of the business process.
     *
     * @return string
     */
    public function getInitialState() : string
    {
        return $this->initialState;
    }
    /**
     * Initial state of the business process.
     *
     * @param string $initialState
     *
     * @return self
     */
    public function setInitialState(string $initialState) : self
    {
        $this->initialized['initialState'] = true;
        $this->initialState = $initialState;
        return $this;
    }
}