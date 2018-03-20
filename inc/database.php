 <?php  
 class database  
 {  
      public  $connect;  
      private $host = 'localhost';  
      private $username = 'root';  
      private $password = '';  
      private $database = 'classes';   
      function __construct()  
      {  
           $this->database_connect();  
      }  
      public function database_connect()  
      {  
           $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);  
      } 
       public function execute_query($query)  
      {  
           return mysqli_query($this->connect, $query);  
      }  

  }
  $object = new database();