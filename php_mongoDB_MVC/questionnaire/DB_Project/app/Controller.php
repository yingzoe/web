<?php

class questionaire{

    public function add() {
        require __DIR__ . '/templates/addQuestionnaire.php';
    }

    public function upload() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $file = "../uploads/file.xml";
            if(!move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
                echo "<script>alert('There was an error uploading the file. Please try again.');window.location.href='/DB_Project/web/questionaire/add'</script>";
            }
            else {
                $xml=simplexml_load_file($file);
                $params = $xml;
            }
        }

        require __DIR__.'/templates/savedQuestionnaire.php';
    }

    public function publish() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $m = new Model(Config::$mvc_db_name);

            $file = "../uploads/file.xml";
            $xml=simplexml_load_file($file);

            $m->addQuestionnaire($xml);

            echo "<script>alert('The file was successfully added to the database.');</script>";

        }
        echo "<script>window.location.href='/DB_Project/web/questionaire/all'</script>";
    }

    public function all(){
        $m = new Model(Config::$mvc_db_name);
            // THE $params VARIABLES IS INJECTED IN THE TEMPLATE (it's an array)
        $params = $m->getQuestionaires();
        require __DIR__ . '/templates/getQuestionaires.php';
        }
 
    public function delete(){
        $m = new Model(Config::$mvc_db_name);
        @session_start();
        if($_SESSION["authentic"] == "SIP"){
            if($_SESSION["currentUser"] == "ying"){
                $flag = $m->deleteQuestionaire($_GET['id']);
                if($flag == 0){
                    echo "<script>alert('Delete successfully!')</script>";
                }else{
                    echo "<script>alert('Delete unsuccessfully!')</script>";
                }

            }else{
                echo "<script>alert('The operation \'delele\' only can be done by administrators.')</script>";
            }
            echo "<script>location='/DB_Project/web/questionaire/all'</script>";
        }
    }

    public function solve(){
         $m = new Model(Config::$mvc_db_name);
        $flag = 0;
        //VALIDATE IF THE USER HAS ALREADY ANSWERED THE TEST
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            @session_start();
            if($_SESSION["authentic"] == "SIP"){
             $flag= $m->validateScore($_GET['id'],$_SESSION['currentUser']);
            }
        }
        
        if($flag!=0){
            if($_SERVER['REQUEST_METHOD']=='GET'){
                // THE $params VARIABLES IS INJECTED IN THE TEMPLATE (it's an array)
                $params = $m->getQuestionaire($_GET['id']);
                
                if($params!=NULL){
                    require __DIR__ . '/templates/solveQuestionaire.php';
                } else{
                    //var_dump($params);
                    echo "<script>alert('This questionaire isn\'t in the database!');window.location.href='/DB_Project/web/questionaire/all'</script>";
                }
        //require __DIR__ . '/templates/solveQuestionaire.php';
            }
        }else{
            echo "<script>alert('You have already answered this questionaire.');window.location.href='/DB_Project/web/questionaire/all'</script>";
        }
    }
    
    public function submit(){
        $m = new Model(Config::$mvc_db_name);
        $score = 0;
        $cont = 0; //THIS VARIABLE IS USED TO COUNT THE QUESTIONS idk
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// CALCULATE THE TOTAL SCORE
                //get the questions
            $questionaire = $m->getQuestionaire($_POST['questionaire_n']);
            foreach($questionaire['questions'] as $question ){
                $q_answer = $question['answer'];
                $q_n = $question['question_n'];
                $answer = $_POST["$q_n"];
                if ($q_answer == $answer){
                    $score++;
                }
                $cont++;
            }
            
            @session_start();

        // validate whether there really is an active session or not
        if (isset($_SESSION["authentic"])){
        if($_SESSION["authentic"] == "SIP"){
         $m->insertScore($_POST['questionaire_n'],$_SESSION['currentUser'], floor($score / $cont * 100));
         //echo $_SESSION['currentUser'];
        }
            
        }
          }
        
        $m = new Model(Config::$mvc_db_name);
        // THE $params VARIABLES IS INJECTED IN THE TEMPLATE (it's an array)
        @session_start();

        // validate whether there really is an active session or not
        if (isset($_SESSION["authentic"])){
        if($_SESSION["authentic"] == "SIP"){
        $params = $m->getScores($_SESSION['currentUser']);
         
        }
        }
    require __DIR__ . '/templates/getScores.php';
    }
    }



class user{
    
    public function login(){
        //phpinfo();
        require __DIR__ . '/templates/login.php';
    }

    public function subscribe(){
        $m = new Model(Config::$mvc_db_name);
        if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['name'] != NULL && $_POST['password'] != NULL){
            $m->addUser($_POST['name'], $_POST['password']);
            echo "<script>alert('You have subscibed successfully!');</script>";
        }
        require __DIR__ . '/templates/subscribe.php';
    }

    
    public function auth(){
        $m = new Model(Config::$mvc_db_name);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$result = $m->authUser($_POST['name'], $_POST['password']);
          }
        if($result == 0){
		     session_start();
			 $_SESSION['authentic']= "SIP";
			 $_SESSION['currentUser']= $_POST['name'];
			 $params = $m->getQuestionaires();
            require __DIR__ . '/templates/getQuestionaires.php';
		 }
		 else{
			 echo "<script>alert('ERROR');window.location.href='login'</script>”";
		 }
    }
    
    public function bye()
     {
		 session_start();
		 session_destroy();
         header("Location: /DB_Project/web/user/login");
     }
    
}


class score{
    
    public function all(){
        $m = new Model(Config::$mvc_db_name);
        // THE $params VARIABLES IS INJECTED IN THE TEMPLATE (it's an array)
        @session_start();

        if (isset($_SESSION["authentic"])){
        if($_SESSION["authentic"] == "SIP"){
        $params = $m->getScores($_SESSION['currentUser']);
         require __DIR__ . '/templates/getScores.php';
        }
        }
    }

}