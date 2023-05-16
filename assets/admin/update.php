<?php

include_once "../includes/dbh.inc.php";
if(empty($conn)){
    $conn = new stdClass();
}

if (isset($_POST["update"]))
{
    $newFileName = $_POST["title"];
    if (empty($newFileName))
    {
        $newFileName = "book";
    }
    else
    {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }
	$id = $_POST["id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = isset($_POST["genre"]) ? $_POST["genre"] : "";
    $price = $_POST["price"];

    $file = $_FILES["imgName"];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTempName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png");

    if (in_array($fileActualExt, $allowed))
    {
        if ($fileError === 0)
        {
            if ($fileSize < 2000000)
            {
                if ($price < 0 || $price > 10000)
                {
                    echo "Incorrect price";
                    exit();
                }
                else {                      //TO DO if genre not in database
                    $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                    $fileDestination = "../new_img/book_covers/" . $imageFullName;

                    if (empty($title) || empty($author) || empty($genre) || empty($price)) {
                        header("Location: ../../shop.php?update=empty");
                        exit();
                    } else {
                        $sql = "SELECT * FROM books;";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed";
                        } else {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            $rowCount = mysqli_num_rows($result);

                            $sql = "UPDATE books 
									SET title = ?, genre = ?, author = ?, price = ?, imgName = ?
									WHERE id = ?";
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "SQL statement failed";
                            } else {
								$vymazat = 44;
	                            mysqli_stmt_bind_param($stmt, "sssssi", $title, $genre, $author, $price, $imageFullName, $id);
                                mysqli_stmt_execute($stmt);

                                move_uploaded_file($fileTempName, $fileDestination);
                                header("Location: ../../shop.php?update=success");
                            }
                        }
                    }
                }
            }
            else
            {
                echo "File size is too big!";
                exit();
            }
        }
        else
        {
            echo "You had an error!";
            exit();
        }
    }
    else
    {
        echo "Wrong file type!";
        exit();
    }
}
?>


