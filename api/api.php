<?php
    require_once __DIR__ . '/Connection.php';

    class API{
        function select(){
            $database = new Connection;
            $information = array();
            $data = $database->prepare('SELECT * From posts');
            $data->execute();
            while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
                $information[$OutputData['postId']] = array(
                    'postId'=> $OutputData['postId'],
                    'postGategory'=> $OutputData['postGategory'],
                    'postTitle'=> $OutputData['postTitle'],
                    'postBody'=> $OutputData['postBody'],
                    'postAuthor'=> $OutputData['postAuthor']
                );
            }

            return json_encode($information);
        }
    }

?>