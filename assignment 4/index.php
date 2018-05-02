<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require_once 'init.php'; ?>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
      .bookCard{
        display: flex;
        align-items: flex-start;
      }
      .img-size{
        height: auto;
        width: 110px;
      }
      .bookInfo{
        margin-left: 10px;
        width:890%;
      }
      .bookinfo h3{
        width: 100%;
      }
      .sort{
        margin-bottom: 20px;
      }
      .sort h4,  select{
        margin-left: 80%;
      }
      .price{
        font-size: 16pt;
        margin: 5%;
      }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="./index.php">BookStore.com</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#" class="active">Books</a></li>
          <li><a href="#">Top books</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="createNewAccount.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
    </nav>

    <div class="container">

      <div class="sort">
        <h4>Sort by</h4>
        <select id="select" name="sortType">
          <option value="newest">newest</option>
          <option value="rated">rated</option>
          <option value="price high to low">price high to low</option>
          <option value="price low to high">price low to high</option>
        </select>
      </div>
      <div id="bookContainer"></div>
    </div>


    <script type="text/javascript">
      var container = document.getElementById('bookContainer');
      var bookList;
      var insertXmlhttp = new XMLHttpRequest();
      insertXmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          bookList =  JSON.parse(this.responseText);
          console.log(bookList)
          create();
        }
      };
    insertXmlhttp.open("GET", "books store.php", true);
    insertXmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    insertXmlhttp.send("x= getBooks");


      
    function create(){
      redraw();
      for(list of bookList){
        var card = document.createElement("div");
        card.className = "well bookCard"
        var image = document.createElement("img");
        image.className = "img-thumbnail img-size";
        image.src = list.image;
        var bookInfo = document.createElement("div");
        bookInfo.className ="bookInfo";
        var title = document.createElement("h3");
        title.appendChild(document.createTextNode(list.title));
        var author = document.createElement("span");
        author.appendChild(document.createTextNode("by "+list.author));
        var br = document.createElement("br");
        var rate = document.createElement("span");
        rate.appendChild(document.createTextNode(list.rate));
        var date = document.createElement("p");
        date.appendChild(document.createTextNode(list.date));
        var price = document.createElement("span");
        price.className="price";
        price.appendChild(document.createTextNode(list.price+" SR"));
        bookInfo.appendChild(title);
        bookInfo.appendChild(author);
        bookInfo.appendChild(br);
        bookInfo.appendChild(rate);
        bookInfo.appendChild(date);
        card.appendChild(image);
        card.appendChild(bookInfo);
        card.appendChild(price);
        container.appendChild(card);
      }
    }

    function redraw(){
      while (container.firstChild) {
        container.removeChild(container.firstChild);
      }
    }





    var select = document.getElementById('select');
    select.onchange = function (){
      if(select.value == "newest"){
        console.log("newest");
        sortByDate();
        create();
      }else if(select.value == "rated"){
        console.log("rated");
        sortByRate();
        create();
      }else if(select.value == "price high to low"){
        console.log("price high to low");
        sortByPriceHTL();
        create();
      }else if(select.value == "price low to high"){
        console.log("price low to high");
        sortByPriceLTH();
        create();
      }else{
        console.log("error sort");
      }
    }

    function sortByDate(){
      bookList.sort(function (a, b) {
        var c = new Date(a.date);
        var d = new Date(b.date);
        return d-c;
      });
    }
    function sortByPriceHTL(){
      bookList.sort(function (a, b) {
        return b.price-a.price;
      });
    }
    function sortByPriceLTH(){
      bookList.sort(function (a, b) {
        return a.price-b.price;
      });
    }
    function sortByRate(){
      bookList.sort(function (a, b) {
        return b.rate-a.rate;
      });
    }


    </script>
  </body>
</html>
