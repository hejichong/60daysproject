function get_categories() {
   //query database for a list of categories
	 $conn = db_connect();
   $query = "select catid, catname from categories";
   $result = @$conn->query($query);
	 if (!$result){
      return false;
   }
   $num_cats = @$result->num_rows;
   if($num_cats == 0){
      return false;
   }
   $result = db_result_to_array($result);
   return $result;
}

function get_category_name($catid) {
   $conn = db_connect();
   $query = "select catname from categories
             where catid = '".$catid."'";
   if (!result){
      return false;
   }
   $num_cats = @$result->num_rows;
   if ($num_cats == 0) {
      return false;
   }
   $row = $result->fetch_object();
   return $row->catname;
}
