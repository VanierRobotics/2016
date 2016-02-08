<?php

class _User extends Model
{
    private $userID;
    private $username;
    private $password;
    private $fname;
    private $lname;
    private $email;

    //"Constructor makes generic if not own wall" -Evan
    /**
     * _User constructor
     * @param int $tempID User_ID
     */
    public function __construct($tempID = -1)
    {
        parent::__construct();
        switch ($tempID) {
            case -1 : //Guest, not implemented I think...
                $this->userID = 0;
                $this->username = 'guest';
                $this->password = 'nop';
                $this->fname = 'Guest';
                $this->lname = '';
                break;
            case ($tempID === Session::get('my_user')['id']) : //load my wall.
                $st = $this->db->select('SELECT * FROM users WHERE user_id = :uid', array(
                    ':uid' => $tempID,
                ));
                if (count($st) > 0)
                    $this->init_self($st[0]);
                else //that user doesn't exist, give error and redirect to self
                    header('Location: ../');
                break;
            default :
                $st = $this->db->select('SELECT * FROM users WHERE user_id = :uid', array(
                    ':uid' => $tempID,
                ));
                if (count($st) > 0)
                    $this->init_generic($st[0]);
                else //that user doesn't exist, give error and redirect to self
                    header('Location: ../');
                break;
        }
    }

    /**
     * Initializes your logged in user (so password + session storage)
     * @param $st array
     */
    public function init_self($st)
    {
        $this->init_generic($st);
        $this->setPassword($st['password']);
        $this->store(); //STORE USER INFO IN SESSION ARRAY
    }

    /**
     * Initializes a basic user
     * @param $st array
     */
    public function init_generic($st)
    {
        $this->userID = $st['user_id'];
        $this->username = $st['username'];
        //self::setPassword($st['password']);
        self::setFName($st['first_name']);
        self::setLName($st['last_name']);
    }

    /**
     * Saves a my_user array to the session
     */
    public function store()
    {
        Session::set('my_user', [
            'id' => $this->getUserID(),
            'username' => $this->getUsername(),
            //'pass'      => $this->getPassword(),
            'first_name' => $this->getFname(),
            'last_name' => $this->getLname()
        ]);
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($newThings)
    {
        $this->email = $newThings;
    }

    public function getFname()
    {
        return $this->fname;
    }

    public function setFName($newThings)
    {
        $this->fname = $newThings;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function setLName($newThings)
    {
        $this->lname = $newThings;
    }

    /**
     * Verifies user/pass combo for website access
     * @param $username string username to verify
     * @param $password string hashed password to test
     * @return bool    result of the process....
     */
    public function authenticate($username, $password)
    {
        //Search db for user/password and get as array
        $st = $this->db->select('SELECT * FROM users WHERE username = :username AND password = :pass', array(
            ':username' => $username,
            ':pass' => $password
        ))[0];

        if (count($st) > 0)  // if count is not 0, user & password was right
        {
            $this->db->update('users',['login_ip' => $_SERVER['REMOTE_ADDR']],' user_id = '.$st['user_id']);
            $this->init_self($st); //initialize from statement and store user info in session as array
            //Session::set('id', $st['user_id']); //Set user's own id to session (if we want to switch from using user info array)
            return true;
        }
        return false;
    }

    public function getID()
    {
        return $this->userID;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($newThing)
    {
        $this->password = $newThing;
    }

    public function getName()
    {
        return $this->fname . ' ' . $this->lname;
    }
}