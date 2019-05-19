class MyUserClass
{
    private $connection;
    private $user = "user";
    private $password = "password";
    private $db = "localhost";

    public function __construct()
    {
        $this->openConnection();
    }

    private function openConnection()
    {
        $this->connection = new DatabaseConnection($this->$db, $this->$user, $this->$password);
    }

    public function getUserList()
    {
        $results = $this->connection->query('SELECT name FROM user');
        return sort($results);
    }
}
