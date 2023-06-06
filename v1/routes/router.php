<?php
$uri = explode("/",$_SERVER['REQUEST_URI']);


if (count($uri) > 2) {


  if (!empty($_GET)) {
  $query_string = explode("?",$uri[2])[1];
}else{
  $query_string = "";
}

  switch ($uri[1]."/".$uri[2]) {

    // case 'portfolio/'.$query_string:
    // include APP_PATH."/views/single_portfolio.php";
    // break;

  }



}else{
  if (!empty($_GET)) {
  $query_string = explode("?",$uri[1])[1];
}else{
  $query_string = "";
}
  // $query_string = explode("?",$uri[1])[1];
  switch ($uri[1]) {


    case '':
     include APP_PATH."/views/nsdhome.php";
      break;

    case 'main':
      include APP_PATH."/views/nsdhome.php";
        break;

      case 'about':
        include APP_PATH."/views/about.php";
        break;

    case 'acd':
     include APP_PATH."/views/academic_resources.php";
       break;

       case 'ev':
      include APP_PATH."/views/events.php";
      break;

      case 'evdt':
        include APP_PATH."/views/event_details.php";
        break;

        case 'nsdn':
          include APP_PATH."/views/news.php";
          break;

        case 'nsdnt':
          include APP_PATH."/views/news_detail.php";
          break;
        

        case 'review':
          include APP_PATH."/views/testimonial.php";
          break;

          case 'contact-us-mail':
          include APP_PATH."/views/mail.php";
          break;


        case 'gal':
          include APP_PATH."/views/gallery.php";
          break;

          case '100200L':
          include APP_PATH."/views/100L_courses.php";
          break;

          default:
          include APP_PATH."/views/404.php";
            break;
        
}

}



// case 'test':
// include APP_PATH."/views/test.php";
// break;
// case 'test?'.$query_string:
// include APP_PATH."/views/test.php";
// break;







 ?>
