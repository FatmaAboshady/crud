<?php



require("inc/mysqlphpconn.php");



//  $sql = "CREATE TABLE users (
//     id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(255) NOT NULL,
//     email VARCHAR(255) NOT NULL UNIQUE,
//     password VARCHAR(64) NOT NULL,
//     created_at DATETIME NOT NULL DEFAULT NOW(),
//     PRIMARY KEY(id)
// )";
    
//     if (mysqli_query($conn, $sql)) {
//       echo "Table user created successfully";
//     } else {
//       echo "Error creating table: " . mysqli_error($conn);
//     }
    

//     $sql = "CREATE TABLE posts (
//         id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
//         title VARCHAR(255) NOT NULL,
//         body TEXT NOT NULL,
//         user_id INTEGER UNSIGNED NOT NULL,
//         created_at DATETIME NOT NULL DEFAULT NOW(),
//         PRIMARY KEY(id),
//         FOREIGN KEY(user_id) REFERENCES users(id)
//     )";
        
//         if (mysqli_query($conn, $sql)) {
//           echo "Table posts created successfully";
//         } else {
//           echo "Error creating table: " . mysqli_error($conn);
//         }
        

//      $sql= "INSERT INTO users (name, email, password) 
//     VALUES ('test user', 'test@user.com', '$2y$10Etzw3W594D27kuNjGRkXruHxB8gA3f3IapbXRCvVrqXhbL8UIeC0q')";

   
    
//     $retval = mysqli_query($conn, $sql);
            
//      if(! $retval ) {
//          echo "Error creating table: " . mysqli_error($conn);
// }
            
//      echo "Entered data successfully in tablen users <br> ";
            

    



     $sql= "INSERT INTO posts (title, user_id, body) 
VALUES 

('test post three', 1, 'Lorem Ipsum  simply dummy')";
 
    
     
     $retval = mysqli_query($conn, $sql);
             
      if(! $retval ) {
          echo "Error creating table: " . mysqli_error($conn);
 }
             
      echo "Entered data successfully in table posts \n";


?>