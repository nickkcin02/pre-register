<?php
      include'../auth/auth.php';
      $db = db();


      $stmt = $db->prepare('SELECT openCourseID, section, capacity, stuFollow, surveySection, courseID, courseName, lecFirstName, lecLastName, lecPic, classType, classDay, classStart, classEnd, IF((openCourseID, section) IN (SELECT openCourseID, section FROM studentFollow WHERE studentID = :studentID) ,1,0) AS isFollow FROM enrollableCourseView WHERE (openCourseID, section) IN (SELECT openCourseID, section FROM openCourseSection WHERE openCourseID IN(SELECT openCourseID FROM openCourseInfo WHERE courseID IN (SELECT courseID FROM enrollableCourse ec WHERE department = :department AND faculty = :faculty AND studentYear = :studentYear )))');

      $stmt->bindParam("studentYear", $_POST["year"],PDO::PARAM_STR);
      $stmt->bindParam("faculty", $_POST["faculty"],PDO::PARAM_STR);
      $stmt->bindParam("department", $_POST["department"],PDO::PARAM_STR);
      $stmt->bindParam("studentID", $_POST["stdID"],PDO::PARAM_STR);

      $stmt->execute();

      while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = $data;
        // echo '<div class="modal-content">';
        // echo $data["courseName"] ;
        // echo '</div>';
      }



      // $stmt = $db->prepare('SELECT openCourseID, section FROM `studentFollow` WHERE studentID = :studentID');
      // $stmt->bindParam("studentID", $_POST["stdID"],PDO::PARAM_STR);
      // $stmt->execute();

      // while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //   $temp = [];
      //   $temp[0] = $data["openCourseID"];
      //   $temp[1] = $data["section"];
      //   $res2[] = $temp;
      //   // echo '<div class="modal-content">';
      //   // echo $data["courseName"] ;
      //   // echo '</div>';
      // }

      // $res[] = $res1;
      // $res[] = $res2;
      echo json_encode($res);

    ?>