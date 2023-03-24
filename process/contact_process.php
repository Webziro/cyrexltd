<?php
    class Contact extends database{
    public function getProfile($data){
        // extract data from $data array and sanitize inputs
        $message = htmlspecialchars($data['_message']);
        $name = htmlspecialchars($data['_name']);
        $email = htmlspecialchars($data['_email']);
        $subject = htmlspecialchars($data['_subject']); 
        
        // check if required fields are empty
        if(empty($message) || empty($name) || empty($email) || empty($subject)){
            $response = array(
                "status" => 0,
                "message" => '<div style="color:red; padding: 12px;">Please fill in all fields!</div>'
            ); 
        }else{

            // validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $response = array(
                    "status" => 0,
                    "message" => '<div style="color:red; padding: 12px;">Please enter a valid email address!</div>'
                );
            }else{
                
            $stmt = $this->prepare("INSERT INTO " . UserContact . " (contactMessage, contactName, contactEmail, contactSubject) VALUES (:message, :name, :email, :subject)");
            $stmt->bindParam(":message", $message);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":subject", $subject);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $response = array(
                    "status" => 1,
                    "message" => "Thank you for contacting us. We will get back to you soon!"
                );
            } else {
                $response = array(
                    "status" => 0,
                    "message" => "Something went wrong, please try again!"
                );
            }
        }

    }
    return $response;
    }
}
?>