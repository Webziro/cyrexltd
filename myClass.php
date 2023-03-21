<?php
    class Contact extends database{
    public function getProfile($name, $email, $message){
        $message = htmlspecialchars($data['_message']);
        $name = htmlspecialchars($data['_name']);
        $email = htmlspecialchars($data['_email']);
        $subject = htmlspecialchars($data['_subject']);
        
        if(empty($message) || (empty($name) || empty($email) || empty($subject)){
            $response = array(
                "status" => 0,
                "message" => '<div style="color:red; padding: 12px;">Please !</div>'
            );
        }else{

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $response = array(
                    "status" => 0,
                    "message" => '<div style="color:red; padding: 12px;">Input a valid email!</div>'
                );
            }else{
                
            $stmt = $this->prepare("INSERT INTO " . UserContact . " (contactMessage contactName, contactEmail, contactSubject) VALUES ( :_message, :_name :_email, :_suject) ");
            $stmt->bindParam(":_message", $message);
            $stmt->bindParam(":_name", $name);
            $stmt->bindParam(":_email", $email);
            $stmt->bindParam(":_subject", $suject);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $response = array(
                    "status" => 1,
                    "message" => "Success"
                );
            } else {
                $response = array(
                    "status" => 0,
                    "message" => "Something went wrong, try again!"
                );
            }
        }

    }
    return $response;
    }
}
?>