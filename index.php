<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Webpage example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">


</head>

<body>
  <div class="container">
    <div id="contentContainer">
      <div class="header">
        <div class="headerContainer">
          <div class="left">Home</div>
          <div class="left">Products</div>
          <div id="logo">
            <img src="pics/logo.jpg"/>
          </div>
          <div class="right">About us</div>
          <div class="right">Contact</div>
        </div>
      </div>
      <div class="row">
        <div> <?php echo "<h1 style='color:#";
        if (isset($_GET['textColor'])) {
          echo $_GET['textColor'];
        } echo "'>";
        if (isset($_GET['textContent'])) {
          echo $_GET['textContent'];
        } else {
          echo "This is just a sample text";
        }
        ?></h1> </div>
        <a href="#"><div id="button"><p>push the button</p></div></a>
      </div>
      <div class="content">
        <div class="post">
          <div class="postTitle">A heading title</div>
          <div class="picture">
            <img id="photo" src="pics/smallPicture.jpg"/>
          </div>
          <div class="shortTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec quis felis fermentum, dictum odito ut.
          </div>
          <div class="longTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget exa nulla.
            Integer ullam-corber nibh lorem,ut porttitor mi segittis eget.
            Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
            Integer a mi quis lectus wul-putate tempus quis quis dui.
            Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae.
            Vestibulum.
            <span class="longTxtExpanded">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget exa nulla.
              Integer ullam-corber nibh lorem,ut porttitor mi segittis eget.
              Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
            </span>
          </div>
          <div class="readMore">-read more</div>
        </div>
        <div class="post">
          <div class="postTitle">A much longer heading title</div>
          <div class="picture">
            <img id="photo" src="pics/smallPicture.jpg"/>
          </div>
          <div class="shortTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec quis felis fermentum, dictum odito ut.
          </div>
          <div class="longTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget exa nulla.
            Integer ullam-corber nibh lorem,ut porttitor mi segittis eget.
            Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
            <span class="longTxtExpanded">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget exa nulla.
              Integer ullam-corber nibh lorem,ut porttitor mi segittis eget.
              Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
            </span>
          </div>
          <div class="readMore">-read more</div>
        </div>
        <div class="post">
          <div class="postTitle">A heading title</div>
          <div class="picture">
            <img id="photo" src="pics/smallPicture.jpg"/>
          </div>
          <div class="shortTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec quis felis fermentum, dictum odito ut.
          </div>
          <div class="longTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget exa nulla.
            Integer ullam-corber nibh lorem,ut porttitor mi segittis eget.
            Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
            Integer a mi quis lectus wul-putate tempus quis quis dui.
            Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae.
            Vestibulum.
            <span class="longTxtExpanded">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget exa nulla.
              Integer ullam-corber nibh lorem,ut porttitor mi segittis eget.
              Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
            </span>
          </div>
          <div class="readMore">-read more</div>
        </div>
      </div>
      <div class="form">
        <h1>Contact Us</h1>
        <input type="text" value="name" />
        <input type="text" value="email" />
        <input type="text" value="phone" />
        <textarea type="text" id="textarea" placeholder="your message"></textarea>
        <button>send message</button>

      </div>
    </div>
    <div class="footer">
      <div class="footerContainer">
        <div class="firstSection">
          <div>
            <span>
              <p>-home</p>
              <p>-products</p>
            </span>
          </div>
          <div>
            <span>
              <p>-about us</p>
              <p>-contact</p>
            </span>
          </div>

        </div>
        <div class="secondSection">
          <div><p>back to top</p></div>
          <div id="twitter">
            <img src="pics/twitter.png"/>
          </div>
          <div id="fb">
            <img src="pics/fb.jpg"/>
          </div>
        </div>


        <div class="firstSection" id="copyright">
          <p>Copyrights &copy; Sample & Pack, Inc.</p>
        </div>
      </div>
    </div>

  </div>




  <script src="jquery.js"></script>
  <script src="script.js"></script>
</body>
</html>
