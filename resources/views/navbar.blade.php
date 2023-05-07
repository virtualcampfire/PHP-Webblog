<link rel="stylesheet" href="css/app.css">
<div class="navbar">
    <div class="nav-left">
        <div class="nav-name-container">
            <a class="nav-name" href="#">TheCodingSpace</a>
            <a class="nav-name-hidden" href="#">TCS</a>
        </div>
    </div>
    <div class="nav-right">
        <a class="nav-right-elements" href="{{route('home')}}">HOME</a>
        <a class="nav-right-elements" href="{{route('showBlog')}}">BLOG</a>
        <a class="nav-right-elements" href="{{route('contact')}}">CONTACT</a>
    </div>
    <div class="nav-right-elements-close">
        <div class="dropdown" onclick="showMenu()">
            <img class="nav-img" src="menu.png">
            <div id="dropdown-content">
                <a class="dropdown-element" href="#">HOME</a><br>
                <a class="dropdown-element" href="#">ABOUT ME</a><br>
                <a class="dropdown-element" href="#">CONTACT</a>
                </div>
        </div>
    </div>