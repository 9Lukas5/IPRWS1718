<?php
    session_start();
    include 'dbVar.php';
    $user  = $_SESSION['userid'];

    if (!$user)
    {
        http_response_code(403);
        die();
    }

    $query = "select min(id) from $dbDatabase.GUESTBOOK";
    $result = $db->query($query);

    // check id of first post (so check if there are any entries)
    if($result)
    {
        if ($row = $result->fetch_assoc())
        {
            $firstPage = $row['ID'];
        }
    }

    // check id of last post
    $query = "select max(id) from $dbDatabase.GUESTBOOK";
    $result = $db->query($query);

    if($result)
    {
        if ($row = $result->fetch_assoc())
        {
            $lastPost = $row['ID'];
        }
    }

    // post number go from x1 to (x+1)0
    // if postCount is <= 10, we are on the first page
    if($lastPost <= 10)
    {
        $lastPage = 1;
    }
    // if postID is higher than 10, check if we have modulo unequal 0
    // then move the point one place, cut it and add 1.
    // this should be the last page we have
    else if ($lastPost % 10 !== 0)
    {
        $lastPage = intval(($lastPost / 10)) + 1;
    }
    // if we have modulo equal 0 we do the same as above, but don't add one, as
    // this is the lastPage yet.
    else
    {
        $lastPage = intval(($lastPost / 10));
    }

    // if firstPage and lastPage detection failed, exit with internal error
    if ($firstPage === null || $lastPage === null)
    {
        http_response_code(500);
        die();
    }

    // check if a certain page is wanted
    // if not, set it to page 1
    if (!$page = filter_input(INPUT_GET, 'page'))
    {
        $page = 1;
    }
    // if a certain page is wanted but the requested one is higher than the
    // actual existing one, give the lastPage back.
    else if($page > $lastPage)
    {
        $page = $lastPage;
    }

    // post Count per page
    $distance = 10;

    // first post on page to be shown is page - 1 times distance + 1
    // Example for page 2:
    /**
     * page     = 2
     * distance = 10
     * 
     * page -= 1 => 1
     * page *= 10 => 10
     * page += 1 => 11
     */
    $postStart = (($page - 1) * $distance) + 1;

    // last post on page to be shown is first post on page + (distance - 1)
    // Example for page 2:
    /**
     * postStart    = 11
     * distance     = 10
     * 
     * distance -= 1 => 9
     * postStart += 9 => 20
     */
    $postEnd = $postStart + ($distance -1);

    
?>