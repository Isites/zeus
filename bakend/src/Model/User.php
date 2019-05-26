<?php
namespace Zeus\Model;

/**
 * @Entity @Table(name="user")
 */
class User {

    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $last_active_time;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $create_time;


    public function isActive() {
        return false;
    }

}