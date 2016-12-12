<?php

    include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');

    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/restaurant.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/review.php');
?>

<h1>Reviews</h1>

<p><a href="/views/review_add.php/?restaurant_id=<?= $_GET['restaurant_id'] ?>">Write a review...</a></p>

  <!-- Star rating system -->
   <script src="/resources/js/star-rating.js"></script>
   <script>
    $(function() {
      $('span.stars').stars();
    });
   </script>

</div>

<?php

    include($_SERVER['DOCUMENT_ROOT'].'/templates/restaurant_reviews_show.php');

    include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');

?>