<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>No Game No Life Fan Site</title>
    <link rel="stylesheet" href="/website/css and js/styles.css" />
  </head>
  <body>
    <header>
      <h1>No Game No Life</h1>
    </header>
    <div class="nav">
      <nav>
        <button onclick="location.href='homepage.php'">Home</button>
        <button onclick="location.href='aboutpage.php'">About</button>
        <button onclick="location.href='contactuspage.php'">Contact Us</button>
        <button onclick="location.href='logout.php'">Log out</button>
      </nav>
    </div>
    <main>
      <section class="sidebar sidebar-left">
        <h2 class="middle">Quick Links</h2>
        <ul>
          <li><a href="#">Episodes</a></li>
          <li><a href="#">Characters</a></li>
          <li><a href="#">Gallery</a></li>
        </ul>
      </section>
      <section class="content">
        <h1 class="middle">Welcome to Fan Site</h1>
        <img
          src="/website/photos/banner.jpg"
          alt="No Game No Life Banner"
          class="banner"
        />
        <h2 class="middle">Synopsis</h2>
        <p>
          No Game No Life is a surreal comedy that follows Sora and Shiro,
          shut-in NEET siblings and the online gamer duo behind the legendary
          username <i>Blank</i>. They view the real world as just another lousy
          game; however, a strange email challenging them to a chess match
          changes everything—the brother and sister are plunged into an
          otherworldly realm where they meet Tet, the God of Games.
        </p>
        
      </section>

      <section class="sidebar sidebar-right">
        <h2 class="middle">Latest News</h2>
        <p>Check out the latest updates about the No Game No Life franchise!</p>
        <img
          src="/website/photos/latestnews.jpg"
          alt="Latest News"
          class="latestnews"
        />
        
      </section>
    </main>
    <footer>
      <p>&copy; 2024 No Game No Life Fan Site. All Rights Reserved.</p>
    </footer>
  </body>
</html>
