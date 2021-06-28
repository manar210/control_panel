

       <?php 
      error_reporting(E_ALL & ~E_NOTICE );
      ini_set('display_errors',1);


    

           $conn= new mysqli("localhost","root","","motors");

           if(isset($_POST['save'])){

        
            $motor1 = $_POST["motor1"];
            $motor2 = $_POST["motor2"];
            $motor3 = $_POST["motor3"];
            $motor4 = $_POST["motor4"];
            $motor5 = $_POST["motor5"];
            $motor6 = $_POST["motor6"];
          
   
                   $sql= $conn->prepare("INSERT INTO table1(motor1,motor2,motor3,motor4,motor5,motor6) 
                   values('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')");
                    $sql->execute();
   
                       echo "sucessfully";
                    }
                   elseif(isset($_POST['run'])){

                    $sql= $conn->prepare("INSERT INTO table2(run) values('1') ");
                    $sql->execute();
                       echo "sucessfully";
                 

                     
                   }
          

         ?>