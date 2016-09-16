 <?php

require_once __DIR__ . '/Model.php';

class Items extends Model {

    protected static $table = 'items';
    public static function findAdsByUser($username)
    {

    	self::dbConnect();

    	$query = 'SELECT * FROM ' . self::$table . ' WHERE username = :username';
    	$stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instances = [];
        foreach ($results as $result) {
            $instance = new static;
            $instance->attributes = $results;
            $instances[] = $instance;

        }
        return $instances;
    }

    public static function findByKeyword($keyword) {
        self::dbConnect();
        $filter = $_POST['search_type'];
        if ($filter == 'weapons' XOR 'armor') {
            $query = 'SELECT * FROM ' .self::$table . ' WHERE keywords = :keywords';
            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':keywords', $keyword, PDO::PARAM_STR);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $instance = null;

            $instances = [];
            foreach ($results as $result) {
                $instance = new static;
                $instance->attributes = $results;
                $instances[] = $instance;

            }
            return $instances;
        } else {
            echo "Error!";
        }

        
    }

    public static function Features()
        {

            self::dbConnect();

            $query = 'SELECT * FROM ' . self::$table . ' WHERE featured = :featured';

            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':featured', 1, PDO::PARAM_INT);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $instances = [];
            foreach ($results as $result) {
                $instance = new static;
                $instance->attributes = $result;
                $instances[] = $instance;

            }
            return $instances;
        }

    public static function singleItem($name)
        {

            self::dbConnect();

            $query = 'SELECT * FROM ' . self::$table . ' WHERE name = :name';

            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $instance = new static;
            $instance->attributes = $result;

            return $instance;
    }
    public static function searchItem($name_or_keyword)
        {
            self::dbConnect();

            $query = 'SELECT * FROM ' . self::$table . ' WHERE name LIKE :name OR keywords LIKE :keyword;';

            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':name', "%$name_or_keyword%", PDO::PARAM_STR);
            $stmt->bindValue(':keyword', "%$name_or_keyword%", PDO::PARAM_STR);           
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $instances = [];
            foreach ($results as $result) {
                $instance = new static;
                $instance->attributes = $result;
                $instances[] = $instance;

            }
            return $instances;
    }
}

?>