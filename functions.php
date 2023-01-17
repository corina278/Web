<?php
function get_title($conn, $id)
{   
        $query = "SELECT book_title FROM books WHERE book_id='$id'";
		$result = mysqli_query($conn, $query);
		$data = mysqli_fetch_assoc($result) or die(mysqli_error($conn));
		$name = $data['book_title'];
    	return $name;

}

?>