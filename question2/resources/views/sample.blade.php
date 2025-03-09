<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/home.css') }}">
</head>
<body>

    
    <header>
        <div class="logo">Logo</div>
        <nav>
        <div class="buttons">
                <a href="#" class="btn primary">Log In</a>
                <a href="#" class="btn secondary">Sign Up</a>
            </div>
        </nav>
    </header>
<style>
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}


body {
    background-color: #000;
    color: #fff;
}


header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 50px;
    position: absolute;
    width: 100%;
    z-index: 10;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}


.hero {
    position: relative;
    width: 100%;
    height: 100vh;
    background: url("{{ asset('img/background.jpg') }}")  no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.content {
    position: relative;
    z-index: 2;
}

.content h1 {
    font-size: 50px;
    font-weight: bold;
}

.content p {
    margin-top: 10px;
    font-size: 16px;
}


.buttons {
    margin-top: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    text-decoration: none;
    margin: 10px;
}

.primary {
    background-color: #008080;
    color: white;
    border: none;
}

.secondary {
    border: 2px solid white;
    color: white;
}
</style>
    
    <section class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1>Select Your Team</h1>
            <p>Select Your talented team members..</p>
            <div class="button">
                <a href="#" class="btn primary">Select</a>
            </div>
        </div>
    </section>

</body>
</html>

