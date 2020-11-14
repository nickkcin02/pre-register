<?php
      include'../auth/auth.php';
      $db = db();


      $stmt = $db->prepare('SELECT * FROM enrollableCourseView WHERE (openCourseID, section) IN (SELECT openCourseID, section FROM openCourseSection WHERE openCourseID IN(SELECT openCourseID FROM openCourseInfo WHERE courseID IN (SELECT courseID FROM enrollableCourse ec WHERE department = :department AND faculty = :faculty AND studentYear = :studentYear )))');

      $stmt->bindParam("studentYear", $_POST["year"],PDO::PARAM_STR);
      $stmt->bindParam("faculty", $_POST["faculty"],PDO::PARAM_STR);
      $stmt->bindParam("department", $_POST["department"],PDO::PARAM_STR);

      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $data;
        // echo '<div class="modal-content">';
        // echo $data["courseName"] ;
        // echo '</div>';
      }
      echo json_encode($res);

    ?>