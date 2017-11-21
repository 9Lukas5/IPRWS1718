<?php
    session_start();
    include 'dbVar.php';
    $user  = $_SESSION['userid'];

    if (!$user)
    {
        http_response_code(403);
        die();
    }

    $query = "SELECT USERNAME FROM $dbDatabase.USERS WHERE ID = '$user'";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    $username = $row['USERNAME'];

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

    unset($query);

    $query = "SELECT * FROM $dbDatabase.GUESTBOOK WHERE ID >= $postStart AND ID <= $postEnd";
    $posts = $db-query($query);

    if (!$posts)
    {
        http_response_code(500);
        die();
    }

    $return = "";

    $return .=  "<div id='guestbookNav'>";
    $return .=      "<ul class='pagination'>";

    if ($posts->num_rows() === 0)
    {
        $return .= "<li class='activeSite'>0</li>";
        $return .= "</ul>";

        $return .= "<CUTHERE>";

        $return .= "<div class='guestbookEntry'>";
        $return .= "<div>";
        $return .= "<ul>";
        $return .= "<li>username</li>";
        $return .= "<li>|</li>";
        $return .= "<li>Titel</li>";
        $return .= "</ul>";
        $return .= "<ul>";
        $return .= "<li>create Time</li>";
        $return .= "<li id='postCount'><a href='#postCount1'>postID</a></li>";
        $return .= "</ul>";
        $return .= "</div>";
        $return .= "<p>content</p>";
        $return .= "</div>";

        echo $return;
        http_response_code(200);
        die();
    }

    if (($page - 4) >= 1)
    {
        $return .= "<li><<</li>";
    }

    if (($page -3) >= 1)
    {
        $return .= "<li><</li>";
    }

    if (($page -2) >= 1)
    {
        $return .= "<li>". ($page -2) ."</li>";
    }

    if (($page -1) >= 1)
    {
        $return .= "<li>". ($page -1) ."</li>";
    }

    $return .= "<li class='activeSite'>$page</li>";

    if ($lastPage >= ($page + 1))
    {
        $return .= "<li>". ($page +1) ."</li>";
    }

    if ($lastPage >= ($page + 2))
    {
        $return .= "<li>". ($page +2) ."</li>";
    }

    if ($lastPage >= ($page + 3))
    {
        $return .= "<li>></li>";
    }

    if ($lastPage >= ($page + 4))
    {
        $return .= "<li>>></li>";
    }

    $return .= "<CUTHERE>";

    while ($row = $posts->fetch_assoc())
    {
        $return .= "<div class='guestbookEntry'>";
        $return .= "<div>";
        $return .= "<ul>";
        $return .= "<li>$username</li>";
        $return .= "<li>|</li>";
        $return .= "<li>" . $posts['TITEL'] . "</li>";
        $return .= "</ul>";
        $return .= "<ul>";
        $return .= "<li>". $posts['CREATEDATE'] . "</li>";
        $return .= "<li id='postCount". $posts['ID'] . "'><a href='#postCount". $posts['ID'] . "'>". $posts['ID'] . "</a></li>";
        $return .= "</ul>";
        $return .= "</div>";
        $return .= "<p>". $posts['CONTENT'] . "</p>";
        $return .= "</div>";
    }

    echo $return;
    http_response_code(200);
    die();

?>