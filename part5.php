<?php
$dbh = mysqli_connect('localhost', 'root', 'buoi5php'); 
    // Kết nối tới MySQL server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_error());
    // Nếu kết nối thất bại thì đưa ra thông báo lỗi
    
    if (!mysqli_select_db($dbh,'my_personal_contacts'))     
    die("Unable to select database: " . mysqli_error());
    // Thông báo lỗi nếu chọn CSDL thất bại
    
    $sql_stmt = "SELECT * FROM my_contacts"; 
    // Câu lệnh select
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL
     
    if (!$result)     
        die("Database access failed: " . mysqli_error()); 
        // Thông báo lỗi nếu thực thi thất bại
        
        $rows = mysqli_num_rows($result); 
        // Lấy số hàng trả về
    
    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {         
            echo 'ID: ' . $row['id'] . '<br>';         
            echo 'Full Names: ' . $row['full_names'] . '<br>';        
            echo 'Gender: ' . $row['gender'] . '<br>';         
            echo 'Contact No: ' . $row['contact_no'] . '<br>';         
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'City: ' . $row['city'] . '<br>';         
            echo 'Country: ' . $row['country'] . '<br><br>';     
        } 
    } 
mysqli_close($dbh); // Đóng kết nối CSDL
?>

<?php
$dbh = mysqli_connect('localhost', 'root', 'buoi5php'); 
    // Kết nối với MySQL Server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    if (!mysqli_select_db($dbh, 'my_personal_contacts'))     
    die("Unable to select database: " . mysql_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
    $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    
    $result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
    if (!$result) {
        die("Adding record failed: " . mysqli_error()); 
        // Thông báo lỗi nếu thực thi câu lệnh thất bại
    } else {
        echo "Poseidon has been successfully added to your contacts list";
    }

    mysqli_close($dbh); // Đóng kết nối CSDL 
?>

<?php

$dbh = mysqli_connect('localhost', 'root', 'buoi5php'); 
// Kết nối tới MySQL Server

if (!$dbh)    
die("Unable to connect to MySQL: " . mysqli_error()); 
// Thông báo lỗi nếu kết nối thất bại 

if (!mysqli_select_db($dbh,'my_personal_contacts'))     
die("Unable to select database: " . mysql_error()); 
// Thông báo lỗi nếu chọn CSDL thất bại

$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
$sql_stmt .= "WHERE `id` = 5";

$result = mysqli_query($dbh,$sql_stmt);
// Thực thi câu lệnh SQL

if (!$result) {
    die("Deleting record failed: " . mysqli_error());
    // Thông báo lỗi nếu thực thi thất bại
} else {
    echo "ID number 5 has been successfully updated";
}

mysqli_close($dbh); //close the database connection
?>

<?php

$dbh = mysqli_connect('localhost', 'root', 'buoi5php'); 
    // Kết nối với MySQL Server
    
    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_error()); 
    // Thông báo lỗi nếu kết nối thất bại
    
    if (!mysqli_select_db($dbh,'my_personal_contacts'))     
    die("Unable to select database: " . mysqli_error()); 
    // Thông báo lỗi nếu chọn CSDL thất bại
    
    $id = 4; 
    // ID của Venus trong CSQL
    
    $sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
    // Câu lệnh SQL Delete
    
    $result = mysqli_query($dbh,$sql_stmt); 
    // Thực thi câu lệnh SQL
    
    if (!$result) {
        die("Deleting record failed: " . mysqli_error());
        // Thông báo lỗi nếu thực thi thất bại 
    } else {
        echo "ID number $id has been successfully deleted";
    }
    
    mysqli_close($dbh); // Đóng kết nối CSDL
?>
 
<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$dbname = "buoi5php";

// Tạo kết nối
try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    // Thiết lập chế độ lỗi
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Câu lệnh INSERT INTO
    $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
    VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";
    
    // Chuẩn bị câu lệnh SQL
    $stmt = $dbh->prepare($sql);
    
    // Gán giá trị cho các tham số
    $stmt->bindParam(':full_names', $full_names);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':contact_no', $contact_no);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':country', $country);
    
    // Gán giá trị cho các biến
    $full_names = 'Laura';
    $gender = 'Female';
    $contact_no = '234';
    $email = 'laura@gmail.com';
    $city = 'Rome';
    $country = 'Italy;'
    
    // Thực thi câu lệnh SQL
    $stmt->execute();
    
    echo "Thêm dữ liệu thành công";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$dbh = null;
?>

<?php
    // Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$dbname = "buoi5php";

// Tạo kết nối
try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    // Thiết lập chế độ lỗi
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu lệnh UPDATE
    $sql = "UPDATE my_contacts 
    SET  = :full_names = new_full_names, gender = :new_gender WHERE id = :id";
    
    // Chuẩn bị câu lệnh SQL
    $stmt = $dbh->prepare($sql);
    
    // Gán giá trị cho các tham số
    $stmt->bindParam(':new_full_names', $new_full_names);
    $stmt->bindParam(':new_gender', $new_gender);
    $stmt->bindParam(':id', $id);
    
    // Gán giá trị cho các biến
    $full_names = 'George';
    $gender = 'Male';
    $id = 1;
    
    // Thực thi câu lệnh SQL
    $stmt->execute();
    
    echo "Cập nhật thành công";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$dbh = null;
?>

<?php
 // Thông tin kết nối MySQL
 $servername = "localhost";
 $username = "root";
 $dbname = "buoi5php";
 
 // Tạo kết nối
 try {
     $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username);
     // Thiết lập chế độ lỗi
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Chuẩn bị câu lệnh SQL và ràng buộc các tham số
     $stmt = $dbh->prepare("DELETE FROM my_contacts WHERE id =:id");
     $stmt->bindParam(':id', $id);
     
     // Xóa dữ liệu
     $id = "3";
     $stmt->execute();
     
     echo "Xóa dữ liệu thành công<br>";
     } catch(PDOException $e) {
         echo "Lỗi khi xóa dữ liệu: " . $e->getMessage();
     }
     
     // Đóng kết nối
     $dbh = null;
     ?>

<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$dbname = "buoi5php";

// Tạo kết nối
try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    // Thiết lập chế độ lỗi
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        // Chuẩn bị câu lệnh SQL
        $stmt = $dbh->prepare("SELECT id, full_names , contact_no, email FROM my_contacts");
        $stmt->execute();
    
        // Thiết lập chế độ lấy dữ liệu
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // Hiển thị dữ liệu
    while ($row = $stmt->fetch()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Full Names: " . $row['full_names'] . "<br>";
        echo "Contact No: " . $row['contact_no'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
} catch(PDOException $e) {
    echo "Lỗi khi hiển thị dữ liệu: " . $e->getMessage();
}

// Đóng kết nối
$dbh = null;
?>
     



